@section('title', 'List Blog')
@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">


					@foreach($data as $list_post) 
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_post->slug ) }} "><img src="{{ asset($list_post->gambar)}}" alt="{{ $list_post->judul }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{ route('blog.isi', $list_post->category->name ) }}">{{ $list_post->category->name }}</a>

							</div>
							<h3 class="post-title"><a href="{{ route('blog.isi', $list_post->slug ) }}">{{ $list_post->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="{{ route('blog.isi', $list_post->users->name ) }}">{{ $list_post->users->name }}</a></li>
								<li>{{ $list_post->created_at }}</li>
							</ul>
							
						</div>
					</div>
				
				@endforeach
				<center>{{ $data->links() }}</center>
				</div>

													<!-- /post -->
@endsection