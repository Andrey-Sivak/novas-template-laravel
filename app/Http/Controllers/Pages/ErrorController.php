<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Pages\BaseController as MainPageController;
use Illuminate\Http\Request;

class ErrorController extends MainPageController
{
    public function index() {

        return view('pages.pages.404-error', ['name' => 'Error 404']);
    }
}
