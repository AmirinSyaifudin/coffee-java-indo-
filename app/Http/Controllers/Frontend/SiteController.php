<?php

namespace App\Http\Controllers\Frontend;

use App\Drink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Food;

class SiteController extends Controller
{
    //
    public function home()
    {
        return view('frontend.templates.home');
    }


    public function drink()
    {
        return view('frontend.templates.drink');
    }


    public function food()
    {
        return view('frontend.templates.food');
    }

    public function spesial()
    {
        return view('frontend.templates.spesial');
    }
}