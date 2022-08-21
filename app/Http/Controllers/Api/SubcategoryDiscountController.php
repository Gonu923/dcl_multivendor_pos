<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\SubcatDiscount;
use Orion\Concerns\DisableAuthorization;

class SubcategoryDiscountController extends Controller
{
    use DisableAuthorization;
    protected $model = SubcatDiscount::class;
}
