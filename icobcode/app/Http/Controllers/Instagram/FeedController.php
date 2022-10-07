<?php

namespace App\Http\Controllers\Instagram;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Instagram\Api;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class FeedController extends Controller
{
    public function getFeed(Request $request)
    {
        $username = 'su_trhna';
        $path = new FilesystemAdapter('instagram', 0, __DIR__.'/cache');
        $user = new Api($path);
        $profile = $user->getProfile($username);

        if ($profile->isPrivate()) {
            return 'bu hesap gizlidir';
        } else {
            dd($profile);
        }
    }

        public function proxy(Request $request)
        {
            $username = 'cfc._zone';

            $client = new Client([
                'proxy' => [
                    'localhost ' => '127.0.0.1',  //ornek proxy host
                ],
            ]);

            $path = new FilesystemAdapter('instagram', 0, __DIR__.'/cache');
            $user = new Api($path, $client);

            $profile = $user->getProfile($username);
            dd($profile);
        }
}
