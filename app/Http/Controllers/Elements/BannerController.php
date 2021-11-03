<?php

namespace App\Http\Controllers\Elements;

use App\Http\Controllers\Elements\BaseController as MainElementsController;
use Illuminate\Http\Request;

class BannerController extends MainElementsController
{
    public function index() {

        return view('pages.elements.theming.banner');
    }
}
