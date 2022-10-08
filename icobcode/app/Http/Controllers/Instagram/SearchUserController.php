<?php

namespace App\Http\Controllers\Instagram;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use InstagramScraper\Instagram;

class SearchUserController extends Controller
{
    //birdan fazla profil akişi
    public function userSearch(Request $request)
    {
        try {
            $kullanciAdi = $request->input('kullanciAdi');
            $client = new Client();
            $instagram = new Instagram($client);

            $profil = $instagram->searchAccountsByUsername($kullanciAdi);

            dd($profil);
        } catch (\Exception $e) {
            return back()->with('error', 'oops kullancı Bulmadık');
        }
    }
}
