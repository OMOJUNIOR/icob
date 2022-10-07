<?php

namespace App\Http\Controllers\Instagram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use InstagramScraper\Instagram;

class FetchController extends Controller
{
    public function fetch(Request $request)
    {
        $res = new \GuzzleHttp\Client();
        $instagram = new Instagram($res);
        $nonPrivateAccountMedias = $instagram->searchAccountsByUsername('su_trhna', 5);
        dd($nonPrivateAccountMedias);

        //dd($dd);
    }

    public function withProxy()
    {
        $res = new \GuzzleHttp\Client();
        $instagram = new Instagram($res);
        $account = $instagram->getAccount('codewithomo', 5);
        dd($account);
    }
}
