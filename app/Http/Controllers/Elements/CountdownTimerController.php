<?php

namespace App\Http\Controllers\Elements;

use App\Http\Controllers\Elements\BaseController as MainElementsController;
use Illuminate\Http\Request;

class CountdownTimerController extends MainElementsController
{
    public function index() {

        return view('pages.elements.theming.count-down-timer');
    }
}
