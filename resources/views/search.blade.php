@extends('template')			
@section('judul_halaman', 'Halaman Pencarian!')

@section('konten')
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="/">Home</a></li>
								<li>Search page</li>
							</ul>
							<h3><span>Hasil Pencarian : </span>'{{ $request->search }}'</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
					@if($pesan === false)

					<h2>Data Pencarian Anda Tidak Ditemukan!</h2>

					@else 

						@foreach($p as $t)
							<div class="post post-row">
									<a class="post-img" href="article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-{{$t->kategori_id}}" href="#">{{$t->kategori}}</a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a href="article/{{$t->slug}}">{{$t->judul}}</a></h3>
										<div style="word-wrap: break-word;">
											<p>{!! str_limit($t->sinopsis, 170, '...') !!}</p>
										</div>
									</div>
								</div>
						@endforeach

						@endif
					</div>
					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							
							@foreach($h as $t)
								<div class="post post-widget">
									<a class="post-img" href="/article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
									<div class="post-body">
										<h3 class="post-title"><a href="/article/{{$t->slug}}">{{$t->judul}}</a></h3>
									</div>
								</div>
							@endforeach

						</div>
						<!-- /post widget -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

@endsection