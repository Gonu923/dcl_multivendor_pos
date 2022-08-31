<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    
    public function index(Request $request)
    {
        if (request()->wantsJson()) {
            return response(
                Customer::all()
            );
        }

        $orders = Order::all();
        $customers_count = Customer::all()->count();
        $inactive_count = Customer::where('status', 0)->count();
        $total = $orders->map(function($i) {
            return $i->total();
        })->sum();

        $customers = new Customer();
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->email;

        if ($request->has('name')) {
            $customers = $customers->where('first_name', $name);
        }
        if ($request->has('phone')) {
            $customers = $customers->where('phone','LIKE','%'.$phone.'%');
        }
        if ($request->has('email')) {
            $customers = $customers->where('email','LIKE','%'.$email.'%');
        }
        if ($request->has('address')) {
            $customers = $customers->where('address','LIKE','%'.$address.'%');
        }

        $customers = Customer::latest()->paginate(20);
        return view('customers.index', compact('customers', 'customers_count', 'inactive_count', 'total'));
    }

    
    public function create()
    {
        return view('customers.create');
    }

    
    public function store(CustomerStoreRequest $request)
    {


        // for ($i=1; $i <= 2000 ; $i++) {
        //     $array[] =[
        //         'first_name' => 'Customer '.$i,
        //         'last_name' => 'Name '. $i,
        //         'email' => 'test'.$i.'@gmail.com',
        //         'phone' => '01753662262',
        //         'address' => 'Dhaka',
        //         'avatar' => 'dash.jpg',
        //         'user_id' => 1,
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ] ;
        // };
        // Customer::insert($array);



        $avatar_path = '';

        if ($request->hasFile('avatar')) {
            $avatar_path = $request->file('avatar')->store('customers', 'public');
        }

        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'avatar' => $avatar_path,
            'user_id' => $request->user()->id,
        ]);

        if (!$customer) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating customer.');
        }
        return redirect()->route('customers.index')->with('success', 'Success, your customer have been created.');
    }

    
    public function show(Customer $customer)
    {
    }

    
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    
    public function update(Request $request, Customer $customer)
    {
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if ($request->hasFile('avatar')) {
            // Delete old avatar
            if ($customer->avatar) {
                Storage::delete($customer->avatar);
            }
            // Store avatar
            $avatar_path = $request->file('avatar')->store('customers', 'public');
            // Save to Database
            $customer->avatar = $avatar_path;
        }

        if (!$customer->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating customer.');
        }
        return redirect()->route('customers.index')->with('success', 'Success, your customer have been updated.');
    }

    public function destroy(Customer $customer)
    {
        if ($customer->avatar) {
            Storage::delete($customer->avatar);
        }

        $customer->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
