<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Blog;
use Storage;
use Session;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getIndex(){
    	return view("admin.index");
    }

    public function getIndexBlog(){
        $data = Blog::orderBy("created_at","desc")->get();
        return view("admin.tabelblog")->with("data",$data);;
    }

    public function getTambahBlog(){
        return view("admin.tambahblog");
    }

    public function postSaveBlog(Request $request){
        $this->validate($request, array(
                'judul'     => 'required|max:255',
                'url'       => 'required|alpha_dash|min:5|max:255|unique:blogs,url',
                'deskripsi' => 'required',
                'img'       => 'required'
        ));

        $blog = new Blog;

        $blog->judul     = $request->judul;
        $blog->url       = $request->url;
        $blog->deskripsi = $request->deskripsi;

        $img = $request->file('img');
        if ($img !== null) {
            $filename       = $img->getClientOriginalName();
            Storage::disk('uploads')->put($filename, file_get_contents($img -> getRealPath()));
            
            $blog->img     = $filename; 
        }

        $blog->save();

        Session::flash('success','Blog Berhasil di Tambah!');

        return  redirect()->route('blog.show');
    }

    public function getEditBlog($id){
        $data = Blog::find($id);
        return view("admin.editblog")->with("data", $data);
    }

    public function putUpdateBlog(Request $request, $id){
        $blog = Blog::find($id);

        if ($request->url == $blog->url) {     
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'deskripsi' => 'required'
            ));
        } else{
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'url'       => 'required|alpha_dash|min:5|max:255|unique:blogs,url',
                    'deskripsi' => 'required'
            ));
        }

        $blog->judul     = $request->judul;
        $blog->url       = $request->url;
        $blog->deskripsi = $request->deskripsi;

        $img = $request->file('img');
        if ($img !== null) {
            $filename       = $img->getClientOriginalName();
            Storage::disk('uploads')->put($filename, file_get_contents($img -> getRealPath()));
            
            $blog->img     = $filename;  
        }

        $blog->save();

        Session::flash('success','Blog Berhasil di Edit!');

        return  redirect()->route('blog.show');
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);

        $blog->delete();

        Session::flash('success', 'Blog Berhasil diHapus');

        return redirect()->route('blog.show');
    }
}
