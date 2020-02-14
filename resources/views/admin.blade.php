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
                        <a href="/admin/anime-batch" class="list-group-item c">Anime Batch</a>
                        <a href="/admin/movies" class="list-group-item c">Movies</a>
                        <a href="/admin/catagory" class="list-group-item c">Category</a>
                    </div>
                </div>
            </div>    
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
