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
        return view('instagram.user');
    }

    public function profiller()
    {
        return view('instagram.list-users');
    }

    public function proxyIle()
    {
        return view('instagram.proxy');
    }
}
