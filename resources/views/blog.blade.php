@section('title', 'Welcome To - Saut Blog')
@extends('template_blog.content')
	
@section('isi')
<div class="page-header-bg-center">

					
		<div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
					<li data-target="#carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
				@foreach($data as $carousel)
                    <div class="item {{$carousel['id']==10?'active':''}}">
					<a class="post-img" href="{{ route('blog.isi', $carousel->slug ) }}"><img class="d-block"src="{{ $carousel['gambar'] }}" alt="First slide"></a>
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>{{ $carousel->judul }}</h1>

                            </div>
							<div class="post-category">
								<a href="{{ route('blog.category', $carousel->category->name ) }}">{{ $carousel->category->name }}</a>
							</div>
                        </div>
                    </div>
				@endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="{{ route('blog.category', $post_terbaru->category->name ) }}">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<div class="section-row loadmore text-center">
							<a href="{{ route('blog.list') }}" class="primary-button">Load More</a>
						</div>
					</div>
					<!-- /row -->
					<!-- row -->
					<!-- /row -->

	
			</div>
				
		
		
			<!-- /row -->
@endsection





