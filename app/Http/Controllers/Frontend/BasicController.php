<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function about()
    {
        return view('site.about');
    }

    public function service()
    {
        return view('site.service');
    }
}
