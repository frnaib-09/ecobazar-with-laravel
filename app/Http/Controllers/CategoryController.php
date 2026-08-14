<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        return view('backend.category');
    }

    function create() {
        return view('backend.category-create');
    }

    function store(Request $request) {
        // Logic for storing category
    }
}
