<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function zambia()
    {
    	return view('countries.zambia');
    }
}
