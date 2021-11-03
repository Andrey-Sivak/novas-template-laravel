<?php

namespace App\Http\Controllers\Elements;

use App\Http\Controllers\Elements\BaseController as MainElementsController;
use Illuminate\Http\Request;

class ProductShowcaseController extends MainElementsController
{
    public function index() {

        return view('pages.elements.shop-products.product-showcase');
    }
}
