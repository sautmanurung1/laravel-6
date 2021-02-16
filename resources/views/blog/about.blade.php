@extends('template_blog.content')

@section('isi')
	<div id="post-header" class="page-header">
			<div class="page-header-bg" style="
			background-image: url( {{ asset('public/frontend/img/') }} );" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html"></a>
						</div>
						<h1></h1>
						<ul class="post-meta">
							<li><a href="author.html"></a></li>
						
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<div class="col-md-8 hot-post-left">
	<br>
		<div class="section-row">
    <h1>About Us</h1>
    <p>Saut Manurung</p>
		</div>
	</div>

@endsection