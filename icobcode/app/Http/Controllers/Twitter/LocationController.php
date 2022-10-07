<?php

namespace App\Http\Controllers\Twitter;

use App\Http\Controllers\Controller;
use App\Traits\Twitter\TwitterScraper;

class LocationController extends Controller
{
    use TwitterScraper;

    public function getTweetsByLocation()
    {
        $value = 'istanbul';
        $location = $this->test_input($value);

        dd($location);
    }
}
