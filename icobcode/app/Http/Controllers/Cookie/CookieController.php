<?php

namespace App\Http\Controllers\Cookie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $dakika = 60;
        $response = new Response('Cookie Bşarıyla Oluşturuldu');
        $response->withCookie(cookie('isim', $request->input('isim'), $dakika));
        $response->withCookie(cookie('eposta', $request->input('eposta'), $dakika));
        $response->withCookie(cookie('konu', $request->input('konu'), $dakika));
        $response->withCookie(cookie('mesaj', $request->input('mesaj'), $dakika));

        return $response;
    }

    public function getCookie(Request $request)
    {
        return view('contact.view');
    }
}
