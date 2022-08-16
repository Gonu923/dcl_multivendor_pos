@extends('layouts.admin')

@section('title', 'Sub Category Based Discount')
@section('content-header', 'Sub Category Based Discount')
@section('content-actions')
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Discount 
    </button>  
    <button onclick="window.print()"><span class="fas fa-print"></span></button>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>BDT</h4>
                        <p>Total Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comment-dollar"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>2%</h4>
                        <p>Average Commission</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-percent"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>BDT 200000</h4>
                        <p>Commission Target</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4>sad</h4>
                        <p>Total Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg col-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>BDT</h4>
                        <p>Collection Processing</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Vendor Name</th>
                    <th>Sub Category Name</th>
                    <th>DCL Discount (%)</th>
                    <th>Vendor Discount (%)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subcatDiscounts as $discount)
                <tr>
                    <td>{{ $discount->vendor_id }}</td>
                    <td>{{ $discount->subcategory_id }}</td>
                    <td>{{ $discount->dcl_discount }}</td>
                    <td>{{ $discount->vendor_discount }}</td>
                    <td><a href="">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')


@endsection
