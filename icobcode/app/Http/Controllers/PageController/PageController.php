<?php

namespace App\Http\Controllers\PageController;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function viewCookie()
    {
        return view('contact.view');
    }

    public function profil()
    {
        return view('instagram.instagram');
    }

    public function proxyIle(){
        return view('instagram.proxy');
    }
}
