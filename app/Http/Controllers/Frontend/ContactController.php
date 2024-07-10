<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class ContactController
{
    public function index(){
        return view('frontend.contact');
    }
}
