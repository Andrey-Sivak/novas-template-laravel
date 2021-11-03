<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Shop\BaseController as MainShopController;
use Illuminate\Http\Request;

class CheckOutController extends MainShopController
{
    public function index() {

        return view('pages.shop.shop-pages.check-out');
    }
}
