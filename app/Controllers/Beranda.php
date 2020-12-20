<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    function home()
    {
        return view('home');
    }
    function about()
    {
        return view('about');
    }
}
