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
                <div class="card-header">Genre</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md">
                            <form method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="catagory">Genre</label>
                                    <input type="text" class="form-control" id="catagory" placeholder="Masukkan Catagory Baru" name="nama">
                                </div>
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif

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



