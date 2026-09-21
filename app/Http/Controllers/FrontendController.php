<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        return view('frontend.home');
    }

    function shop() {
        return view('frontend.shop');
    }

    function blog() {
        return view('frontend.blog');
    }

    function about() {
        return view('frontend.about');
    }

    function contact() {
        return view('frontend.contact');
    }

    function item() {
        return view('frontend.item');
    }
}
