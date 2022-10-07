<?php

namespace App\Http\Controllers\Instagram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Instagram\Api;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class FeedController extends Controller
{
    /*
    * Herhangi bir login işlemi yapmadan kodunu
    */

    public function profilAksini(Request $request)
    {
        
        try {
            $kullanciAdi = $request->input('kullanciAdi');
            $path = new FilesystemAdapter('instagram', 0, __DIR__.'/cache');
            $user = new Api($path);
            $profil = $user->getProfile($kullanciAdi);
            dd($profil);
        } catch (\Exception $e) {
            return back()->with('error','oops kullancı Bulmadık');
        }

        
    }

    /*
    * Proxy aracılığıyla login kodu
    */

    public function proxy(Request $request)
    {
       try {

        $kullanciAdi = $request->input('kullanciAdi');

        $proxy = new \GuzzleHttp\Client(['proxy'=>['https' => '50.217.110.226']]);

        $path = new FilesystemAdapter('instagram', 0, __DIR__.'/cache');
        $user = new Api($path,$proxy);

        $profil = $user->getProfile($kullanciAdi);
        dd($profil);
           
       } catch (\Exception $e) {
         return back()->with('error','oops kullancı Bulmadık');
       }catch(\Exception $e){
        return back()->with('error','proxy bilgiler doğru şekilde girdiniz mi');
       }
       
       
    }

    public function loginIşlem(Request $request)
    {
        $kullanciAdi = '';

        $path = new FilesystemAdapter('instagram', 0, __DIR__.'/cache');
        $user = new Api($path);
        $profil = $user->login('kullancıIsim', 'şifre'); //Instagram kullancı bilgiler
        $profil = $user->getProfile($kullanciAdi);
        dd($profil);
    }
}
