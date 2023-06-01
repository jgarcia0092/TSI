<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getData($a)
    {
        $data = array_merge([], $a);
        return $data;
    }

    public function welcome()
    {
        return view('pages/welcome', $this->getData([]));
    }

    public function showMarketingEvents()
    {
        $quotes = "";
        return view('pages/events/marketing-events', [
            'view' => 'events',
            'quotes' => $quotes
        ]);
    }
}
