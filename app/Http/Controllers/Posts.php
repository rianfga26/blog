<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Tag;

class Posts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        
         $this->validate($request, [ 
             'judul' => 'required|unique:batch|max:100',
             'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
             'sinopsis' => 'required',
             'catagory' => 'required',
             'kategori' => 'required'
             ]);

            $file = $request->file('gambar');
            $gambar = time().",".$file->getClientOriginalName();
            $file->move('gambar', $gambar);
             
            $cok = \App\Kategori::where('nama', $request->kategori)->get();     
            $p = Post::create([
                'judul' => $request->judul,
                'slug' => str_slug($request->judul),
                'gambar' => $gambar,
                'sinopsis' => $request->sinopsis,
                'kategori' => $request->kategori,
                'kategori_id' => $cok[0]['id']
            ]);
            
                
             if ($p) {
                $id = Post::select('id')->orderBy('id', 'DESC')->get()->first();
                $tag = implode(',',$request->catagory);
                $j = Tag::create([
                    'tags' => $tag,
                    'post_id' => $id->id
                ]);
                if ($j) {
                    return redirect('/admin/post')->with('status', 'Data Berhasil Ditambahkan!');
                }
            }else{
                return redirect('/admin/post')->with('status', 'Data Gagal Ditambah!');
            }

    }

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $p = \App\Post::where('slug', $slug)->first();
        $h = \App\Post::orderBy('id', 'DESC')->limit(5)->get();
        $k = \App\Kategori::all();
        $j = \App\Genre::all();
        views($p)
        ->delayInSession(1)
        ->record();
        return view('blog-post', compact('p','h','k','j'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = \App\Post::where('id' , $id)->first();
        $k = \App\Genre::all();
        $c = \App\Kategori::all();
        return view('admin.edit', compact('p', 'k', 'c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $g = \App\Post::where('id', $id)->first();
        $file = $request->file('gambar');
        if ($file === null) {
            $gambar = $g->gambar;
        }else{
            $gambar = time().",".$file->getClientOriginalName();
            $file->move('gambar', $gambar);
        }
        $cok = \App\Kategori::where('nama', $request->kategori)->get();     
        
        $post = \App\Post::find($id);
        $post->judul = $request->judul;
        $post->slug = str_slug($request->judul);
        $post->gambar = $gambar;
        $post->sinopsis = $request->sinopsis;
        $post->kategori = $request->kategori;
        $post->kategori_id = $cok[0]['id'];

        if ($post->save()) {
            $no = Post::where('id', $id)->first();
                $tag = implode(',',$request->catagory);
                $j = Tag::where('post_id', $id)->first();
                $j->tags = $tag;
                $j->post_id = $no->id;

                if ($j->save()) {
                    return redirect('/admin/post')->with('status', 'data berhasil di edit!');
                }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
