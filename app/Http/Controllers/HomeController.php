<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function auth(){
        return abort(404);
    }

    public function post(){

        $p = \App\Genre::all();
        $c = \App\Kategori::all();
        $v = \App\Post::orderBy('id', 'DESC')->paginate(5);
        return view('admin/post', compact(['p','c','v']));
    }

    public function catagory(){
        return view('admin/catagory');
    }

    public function postdel($id){
        $h = \App\Post::where('id', $id)->first();
        File::delete('gambar/'.$h->gambar);
        
        \App\Post::where('id', $id)->delete();
        return redirect()->back();
    }
    

 
}