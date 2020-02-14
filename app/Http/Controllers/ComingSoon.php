<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kategori;
use \App\Coming;


class ComingSoon extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $c = Kategori::all();
        $v = Coming::paginate(5);
        return view('admin/coming', compact('c', 'v'));
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
        //
        $this->validate($request, [ 
             'judul' => 'required|unique:batch|max:100',
             'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
             'kategori' => 'required'
             ]);

            $file = $request->file('gambar');
            $gambar = time().",".$file->getClientOriginalName();
            $file->move('gambar', $gambar);
             

            $p = Coming::create([
                'judul' => $request->judul,
                'gambar' => $gambar,
                'kategori' => $request->kategori
            ]);
         
            if ($p) {
                return redirect('admin/post-coming-soon')->with('status', 'berhasil di tambah!');
            }else{
                return redirect('admin/post-coming-soon')->with('status', 'gagal di tambah!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Coming::where('id', $id)->first();
        $c = Kategori::all();
        return view('admin.editcom' , compact('p','c'));
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
        $g = \App\Coming::where('id', $id)->first();
        $file = $request->file('gambar');
        if ($file === null) {
            $gambar = $g->gambar;
        }else{
            $gambar = time().",".$file->getClientOriginalName();
            $file->move('gambar', $gambar);
        }

        $t = Coming::find($id);
        $t->judul = $request->input('judul');
        $t->gambar = $gambar;
        $t->kategori = $request->input('kategori');

        if ($t->save()) {
            return redirect('/admin/post-coming-soon')->with('status', 'Berhasil MengUpdate Data!');
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
        $cpl = Coming::find($id);
        $cpl->delete();

        return redirect()->back();
    }
}
