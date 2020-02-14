@extends('template')

@section('judul_halaman', 'Home - Page')

@section('konten')
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<div class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											@foreach($cok as $t)
											<div class="item active">
											<a href="/article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
												<div class="post-body">
													<div class="post-meta">
														<a class="post-category cat-{{$t->kategori_id}}" href="">{{$t->kategori}}</a>
														<span class="post-date">{{date('F d,Y',strtotime($t->created_at))}}</span>
													</div>
													<h3 class="post-title" style="color: white;"><a href="/article/{{$t->slug}}">{{$t->judul}}</a></h3>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							<!-- post -->
							<div class="col-md-12">
								<h2 class="border-bottom">Anime Batch</h2>
							</div>
							@foreach($b as $t)
							<div class="col-xs-6">
								<div class="post mt-2">
									<a class="post-img img-fluid" href="/article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-{{$t->kategori_id}}" href="/tag/{{$t->kategori}}">{{$t->kategori}}</a>
											<span class="post-date">{{date('F d,Y',strtotime($t->created_at))}}</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{str_limit($t->judul, 30, '...')}}</a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							@endforeach
						</div>
						<div class="text-center">{{ $b->links() }}</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Updates</h2>
							</div>
							@foreach($p as $t)
							<div class="post post-widget">
								<a class="post-img" href="/article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="/article/{{$t->slug}}">{{$t->judul}}</a></h3>
								</div>
							</div>
							@endforeach
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Coming Soon</h2>
							</div>
							<div class="post post-thumb">
								<a class="post-img"><img src="/gambar/{{ $c->gambar }}" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-{{$t->kategori_id}}" href="/kategori/{{$t->kategori}}">{{$c->kategori}}</a>
										<span class="post-date">{{date('F d,Y',strtotime($c->created_at))}}</span>
									</div>
									<h3 class="post-title" style="text-shadow: 2px 2px white">{{ $c->judul }}</h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Movies</h2>
								</div>
							</div>
							<!-- post -->
							@foreach($d as $t)
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="/article/{{$t->slug}}"><img src="/gambar/{{$t->gambar}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-{{$t->kategori_id}}" href="/kategori/{{$t->kategori}}">{{$t->kategori}}</a>
											<span class="post-date">{{date('F d,Y',strtotime($t->created_at))}}</span>
										</div>
										<h3 class="post-title"><a href="/article/{{$t->slug}}">{{$t->judul}}</a></h3>
										<div style="word-wrap: break-word;">
											<p>{!! str_limit($t->sinopsis, 170, '...') !!}</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /post -->
							@endforeach
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
									@foreach($j as $p)
									<li><a href="#">{{ $p->nama }}</a></li>
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
		