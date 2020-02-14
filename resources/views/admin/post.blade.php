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
                <div class="card-header">Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                    <div class="container-fluid mt-3 mb-5">
                        <div class="row">  
                        <div class="col-md">   
                         <h4 class="text-muted ">List Posts</h4>
                         <div class="float-right m-2">{{ $v->links() }}</div>
                         <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>Judul</td>
                                        <td>Gambar</td>
                                        <td>Sinopsis</td>
                                        <td>Kategori</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($v as $t)
                                    <tr>
                                        <td>
                                            <div style="width: 100px; height: 100px; overflow-y: auto;">
                                                    {{ $t->judul }} 
                                            </div></td>
                                        <td>
                                            <div style="width: 130px; height: 100px; overflow-y: auto;">
                                                <img src="/gambar/{{$t->gambar}}" alt="" width="50%" class="img-fluid">
                                            </div>
                                        </td>
                                            <td style="margin: 0;"> 
                                                <div style="width: 150px; height: 100px; overflow-y: auto;">
                                                {{ $t->sinopsis }} 
                                                </div>
                                            </td>
                                        <td>{{$t->kategori}}</td>
                                        <td>
                                        <a href="post/up/{{$t->id}}" class="badge badge-primary">Edit</a> |
                                        <a href="post/del/{{$t->id}}" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-right m-2 mb-5">{{ $v->links() }}</div>
                        </div>
                        </div>
                    </div>

                    <div class="container-fluid">    
                        <div class="row mt-5 justify-content-center">
                            <div class="col-md-10">
                                <h4 class="text-muted">Create New Posts</h4>
                                <form method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" value="{{ old('judul') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar : </label>
                                        <input type="file" id="exampleInputFile" name="gambar">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="ckeditor" id="ckeditor" name="sinopsis" value="{{ old('sinopsis') }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">genre : </label>
                                        <div class="checkbox">
                                        @foreach($p as $t)
                                            <label class="mr-3">
                                                <input type="checkbox" name="catagory[]" value="{{ $t->nama }}"> {{ $t->nama }}
                                            </label>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="catagory">Catagory :</label>
                                        <select class="form-control" name="kategori" id="catagory">
                                            @foreach($c as $s)
                                            <option value="{{ $s->nama }}">{{ $s->nama }}</option>
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
    </div>
</div>
@endsection





