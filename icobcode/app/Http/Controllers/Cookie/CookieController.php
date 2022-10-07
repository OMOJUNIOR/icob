<?php

namespace App\Http\Controllers\Cookie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $minutes = 60;
        $response = new Response('Cookie Bşarıyla Oluşturuldu');
        $response->withCookie(cookie('isim', $request->input('isim'), $minutes));
        $response->withCookie(cookie('eposta', $request->input('eposta'), $minutes));
        $response->withCookie(cookie('konu', $request->input('konu'), $minutes));
        $response->withCookie(cookie('mesaj', $request->input('mesaj'), $minutes));

        return $response;
    }

    public function getCookie(Request $request)
    {
        return view('contact.view');
    }
}
