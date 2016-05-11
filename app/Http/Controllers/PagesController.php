<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class PagesController extends Controller
{
    public function getIndex(){
        $post = Blog::orderBy("created_at", "desc")->take(3)->get();
    	return view('pages.home')->with("data", $post);
    }

    public function getTentang(){
    	return view('pages.tentang');
    }

    public function getKursus(){
    	return view('pages.kursus');
    }

    public function getKontak() {
    	return view('pages.kontak');
    }

    public function getInfo(){
        return view('pages.infokursus');
    }

    public function getPendaftaran(){
        return view('pages.infodaftar');
    }

    public function getTataPeserta(){
        return view('pages.tatapeserta');
    }

    public function getTataPendidik(){
        return view('pages.tatapendidik');
    }


}
