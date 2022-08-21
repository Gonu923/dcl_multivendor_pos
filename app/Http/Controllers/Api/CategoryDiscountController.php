<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\CatDiscount;
use Orion\Concerns\DisableAuthorization;

class CategoryDiscountController extends Controller
{
    use DisableAuthorization;
    protected $model = CatDiscount::class;
}
