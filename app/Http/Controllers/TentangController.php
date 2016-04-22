<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TentangController extends Controller
{
    public function getSejarah(){
    	return view('tentang.sejarah');
    }

    public function getVisi(){
    	return view('tentang.visi');
    }

    public function getStruktur(){
    	return view('tentang.struktur');
    }

    public function getSarana(){
    	return view('tentang.sarpras');
    }
}
