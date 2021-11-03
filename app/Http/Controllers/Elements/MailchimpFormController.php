<?php

namespace App\Http\Controllers\Elements;

use App\Http\Controllers\Elements\BaseController as MainElementsController;
use Illuminate\Http\Request;

class MailchimpFormController extends MainElementsController
{
    public function index() {

        return view('pages.elements.theming.mailchimp-form');
    }
}
