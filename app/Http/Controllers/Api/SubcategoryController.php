<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use App\Models\Subcategory;
use Orion\Concerns\DisableAuthorization;

class SubcategoryController extends Controller
{
    use DisableAuthorization;
    protected $model = Subcategory::class;
}
