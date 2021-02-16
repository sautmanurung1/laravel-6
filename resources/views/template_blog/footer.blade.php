	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="{{ url('') }}" class="logo"><img src="{{ asset('public/frontend/img/judul.png')}}" alt=""></a>
						</div>
						<p>Selamat Datang Di Blog Saya dan Selamat Membaca</p>
						<ul class="contact-social">
							<li><a href="https://wa.wizard.id/4842dc" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://twitter.com/smanurung3601" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://github.com/sautmanurung1" class="social-github"><i class="fa fa-github"></i></a></li>
							<li><a href="https://www.instagram.com/sautmanurung/" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="{{ url('') }}">Home</a></li>
						<li><a href="{{ route('blog.about') }}">About Us</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/main.js') }}"></script>

</body>

</html>