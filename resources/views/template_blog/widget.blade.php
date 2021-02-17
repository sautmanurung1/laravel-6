		<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="https://www.instagram.com/sautmanurung/" class="social-instagram">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/smanurung3601" class="social-twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">About Me</h2>
						</div>
						<div class="sc">
							<form>
							<img src="{{ asset('public/frontend/img/saut.jpg')}}" alt=""style="height: 200px"><p>Selamat Datang Di Blog Saya <br> Selamat Membaca <br> Enjoy</p>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
						<!-- /post -->
						<!-- post -->
						<!-- /post -->
						<!-- post -->
						<!-- /post -->

						<!-- post -->
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>