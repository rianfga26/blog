@extends('template')			

@section('judul_halaman', 'Blog Artikel')

@section('konten')
		<!-- section -->
		<div class="section" style="background: url('/gambar/bg.jpg'); background-size: cover;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row ">
					<!-- Post content -->
					<div class="col-md-7">
					<div style="padding: 30px; border-radius: 5px; border: 1px solid #dadada; margin-bottom: 50px; background: white;">
						<a href="#" class="btn btn-danger btn-xs text-uppercase text-bold"><strong>{{ $p->kategori}}</strong></a>
						<h1>{{$p->judul}}</h1>
						<p style="border-bottom: 1px solid #000;" class="rounded">
						<span class="float-left">By Admin {{date('d F Y | h:ia',strtotime($p->created_at))}} |</span>
						<span style="margin-left: 5px;"><i class="fas fa-eye"></i> {{views($p)->count()}}</span>
						<span style="float: right;">{{ $p->tag->tags }}</span>
						</p>
						<img src="/gambar/{{$p->gambar}}" class="img-fluid" width="100%" alt="Responsive image">
						<br><br>
							<div style="word-wrap: break-word;">
								<p>{!! $p->sinopsis !!}</p>
							</div>
						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="/img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
					</div>
						
						<!-- author -->
						<div class="section-row" style="padding: 30px; border-radius: 5px; border: 1px solid #dadada; background: white;">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="/gambar/admin.jpg" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3>Farros Nufail</h3>
										</div>
										<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente harum nostrum nisi! Officia architecto suscipit distinctio tempore saepe impedit totam iusto error quis deserunt quia officiis alias perspiciatis, ipsa magnam?	</p>
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row" style="background: white; padding: 20px; border-radius: 4px;">
							<!-- disqus -->

						<div id="disqus_thread"></div>
							<script>

							/**
							*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = 'https://reinime.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

						<!-- end disqus -->
							
						</div>
						<!-- /comments -->

						
					</div>
					<!-- /Post content -->

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
						<div class="aside-widget" style="margin-top: -50px;">
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
						<!-- /post widget -->

						<!-- catagories -->
						<div class="aside-widget" style="background: white; padding: 20px; border-radius: 4px;">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									@foreach($k as $cat)
									<li>
									<a href="/kategori/{{$cat->nama}}" class="cat-{{ $cat->id }}">{{ $cat->nama }}
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
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		@endsection
