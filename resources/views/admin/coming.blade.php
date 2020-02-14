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


                    <div class="row">
                    <div class="col-md-12 mb-5">
                        <a href="#create" class="btn btn-info btn-xs">Create New Posts</a>
                    </div>
                        <div class="col-md" id="list">
                            <h3>List Posts Coming Soon</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>Judul</td>
                                        <td>Gambar</td>
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
                                        <td>{{$t->kategori}}</td>
                                        <td>
                                        <a href="com/up/{{$t->id}}" class="badge badge-primary">Edit</a> |
                                        <a href="com/del/{{$t->id}}" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-right m-2 mb-5">{{ $v->links() }}</div>
                        </div>


                        <div class="col-md " id="create">
                         <h3>Create Post</h3>
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
                                    <label for="catagory">Catagory :</label>
                                    <select class="form-control" name="kategori" id="catagory">
                                        @foreach($c as $s)
                                        <option value="{{ $s->nama }}">{{ $s->nama }}</option>
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
</div>
@endsection





