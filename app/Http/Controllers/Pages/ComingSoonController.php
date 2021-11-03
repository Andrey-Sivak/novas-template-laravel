<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Pages\BaseController as MainPageController;
use Illuminate\Http\Request;

class ComingSoonController extends MainPageController
{
    public function index() {

        return view('pages.pages.coming-soon');
    }
}
