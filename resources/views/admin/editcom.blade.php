@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="/home" class="list-group-item c">
                           Dashboard
                        </a>
                        <a href="/admin/post" class="list-group-item c">Posts</a>
                        <a href="/admin/post-coming-soon" class="list-group-item c">Coming Soon</a>
                        <a href="/admin/catagory" class="list-group-item c">Category</a>
                    </div>
                </div>
            </div>    
        </div>
 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Posts : '{{$p->judul}}'</div>
                <div class="card-body">
                    <div class="col-md">
                        <h4 class="text-muted">Edit Posts</h4>
                        <form method="post" enctype="multipart/form-data" action="/admin/com/update/{{$p->id}}">
                        @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" value="{{$p->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar : <br><img src="/gambar/{{$p->gambar}}" width="50%" alt=""></label>
                                <input type="file" id="exampleInputFile" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="catagory">Catagory :</label>
                                <select class="form-control" name="kategori" id="catagory">
                                    @foreach($c as $s)
                                    <option value="{{ $s->nama }}" @php if($s->nama === $p->kategori) echo "selected"; @endphp>{{ $s->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





