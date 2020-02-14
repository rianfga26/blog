@extends('template')

@section('judul_halaman', 'News Page')

@section('konten')
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="/">Home</a></li>
								<li>News</li>
							</ul>
							<h1>News</h1>
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
						<div class="row">
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
							
							<!-- post -->
							@foreach($l as $t)
							<div class="col-md-12">
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
							</div>
							@endforeach
							<!-- /post -->
							
							<div class="col-md-12">
								<div class="section-row text-right">
									{{$l->links()}}
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									@foreach($h as $cat)
									<li><a href="/kategori/{{$cat->nama}}" class="cat-{{ $cat->id }}">{{ $cat->nama }}
										<span>
										
										</span>
									</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									@foreach($j as $t)
									<li><a href="#">{{$t->nama}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /tags -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
@endsection