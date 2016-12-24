<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // we will create new method
    public function index(Reqest $request,$locale){
    	// set application Locale
    	app()->setlocale($locale);
    	// get the translated massege and show it
    	echo trans(language.message);
    }
}
