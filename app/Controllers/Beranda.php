<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Berita_m;

class Beranda extends BaseController
{
    function home()
    {
        $beritamodel = new Berita_m();
        $data['berita'] = $beritamodel->getBerita();
        return view('home', $data);
    }
    function about()
    {
        return view('about');
    }
}
