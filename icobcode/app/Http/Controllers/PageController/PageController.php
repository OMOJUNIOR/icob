<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
}
