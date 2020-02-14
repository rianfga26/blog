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
                        <form method="post" enctype="multipart/form-data" action="/admin/post/update/{{$p->id}}">
                        @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" value="{{ $p->judul }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleInputFile">Gambar : <br><img src="/gambar/{{$p->gambar}}" alt="" class="img-fluid" width="50%"></label>
                                <input type="file" id="exampleInputFile" name="gambar">
                            </div>
                            <div class="form-group">
                                <textarea class="ckeditor" id="ckeditor" name="sinopsis">{{$p->sinopsis}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">genre : </label>
                                <div class="checkbox">
                                    @php $t = explode(',', $p->tag->tags)  @endphp
                                    
                                    @foreach($k as $i)
                                    <label class="mr-3">
                                        <input type="checkbox" name="catagory[]" value="{{$i->nama}}" <?php if(in_array($i->nama, $t)) { echo "checked"; } ?>
                                        >{{$i->nama}} 
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                        <label for="catagory">Catagory :</label>
                                        <select class="form-control" name="kategori" id="catagory">
                                        @foreach($c as $s)
                                            <option value="{{ $s->nama }}" <?php if($p->kategori === $s->nama) { echo "selected"; } ?>>{{ $s->nama }} </option>
                                        @endforeach
                                        </select>
                                    </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





