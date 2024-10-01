<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda(){

        $useLargeHeader = true;
        return view('web.pages.beranda.index')->with('useLargeHeader', $useLargeHeader);
    }

    public function profil_kelurahan(){

        $useLargeHeader = false;
        return view('web.pages.profil-kelurahan.index')->with('useLargeHeader', $useLargeHeader);
    }
 
    public function galeri(){

        $useLargeHeader = false;
        return view('web.pages.profil-kelurahan.galeri.index')->with('useLargeHeader', $useLargeHeader);
    }

}

