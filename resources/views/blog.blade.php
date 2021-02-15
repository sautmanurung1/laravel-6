@extends('template_blog.content')
	
@section('isi')
<div class="col-md-8 hot-post-left">

					
					<div class="post post-thumb">
					<!-- post -->
						<a class="post-img lazy-load" href=""><img src="" alt="" style=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href=""></a>
							</div>
							<h3 class="post-title title-lg"><a href=""></a></h3>
							<ul class="post-meta">
								<li><a href=""></a></li>
								<li></li>
							</ul>
						</div>
					
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img lazy-load" href=""><img src="" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href=""></a>
							</div>
							<h3 class="post-title"><a href=""></a></h3>
							<ul class="post-meta">
								<li><a href=""></a></li>
								<li></li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href=""><img src="" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href=""></a>
								<a href=""></a>
							</div>
							<h3 class="post-title"><a href=""></a></h3>
							<ul class="post-meta">
								<li><a href=""></a></li>
								<li></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
		<!-- /container -->
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
			
					</div>
					<!-- /row -->

	
				</div>
				
		
		
			<!-- /row -->
@endsection





