<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Genre;
use App\Kategori;
use App\Coming;
use App\Post;


class Home extends Controller
{

    public function store(Request $request){
        $this->validate($request, [ 'nama' => 'required' ]);
        Genre::create([
            'nama' => $request->nama
        ]);
        
        return redirect('/admin/catagory')->with('status', 'Data Catagory Telah Ditambahkan!');
    }

    public function search(Request $request){
        $search = $request->search;
        if ($search === null) {
            return redirect()->back();
        }
        $p = Post::where('judul','like',"%".$search."%")->get();
        $h = Post::orderBy('id', 'DESC')->limit(5)->get();
        if (empty($p[0])) {
            return view('search', ['pesan' => false, 'request' => $request, 'h' => $h , 'p' => $p]);
        }
        return view('search', ['pesan' => 'data tidak ditemukan', 'request' => $request, 'h' => $h, 'p' => $p ]);
    }

    public function home(){
        $c = Coming::orderBy('created_at', 'desc')->first();
        $h = Kategori::all();
        $j = Genre::all();
        $b = Post::where('kategori', 'batch')->paginate(8);
        $d = Post::where('kategori', 'movies')->orderBy('id', 'DESC')->take(4)->get();
        $p = Post::orderBy('id', 'DESC')->limit(4)->get();
        $cok = Post::where('kategori', 'ongoing')->limit(7)->get();
        // $asu = \App\Post::all();
        // $o =  \App\Post::select(DB::raw('id'))
        // ->where('kategori', $asu[0]['kategori'])
        // ->get();
        return view('index', compact(['h','j','c','b','d','p','cok']));
    }

    public function completed(){
        $h = Kategori::all();
        $j = Genre::all();
        $k = Post::where('kategori', 'completed')->paginate(5);
        return view('completed', compact(['h','j', 'k']));
    }
    
    public function news(){
        $h = Kategori::all();
        $j = Genre::all();
        $l = Post::orderBy('id', 'DESC')->paginate(10);
        return view('news', compact(['h','j','l']));
    }
    
    public function about(){
        return view('about');
    }

    public function contact(){
        
        return view('contact');
    }
    public function kategori($kategori){
        $k = \App\Post::where('kategori', $kategori)->paginate(6);
        $h = \App\Kategori::all();
        $j = \App\Genre::all();
        return view('kategori', compact('k', 'h', 'j', 'kategori'));
    }

}
