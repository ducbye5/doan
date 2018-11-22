@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>Blog</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
			
			<!-- Begin content with sidebar -->
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						<div class="blog-posts">
							<article class="post post-large">
								<div class="post-image">
									<div class="owl-carousel pgl-pro-slide pgl-img-slide" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
										<div class="item"><img class="img-responsive" src="images/blog/demo-1.jpg" alt="Blog">
											<div class="item-caption">
												<p><small>Caption here eaque ipsa</small></p>
											</div>
										</div>
										<div class="item"><img class="img-responsive" src="images/blog/demo-1.jpg" alt="Blog">
											<div class="item-caption">
												<p><small>Excepteur sint occaecat cupidatat</small></p>
											</div>
										</div>
										<div class="item"><img class="img-responsive" src="images/blog/demo-3.jpg" alt="Blog">
											<div class="item-caption">
												<p><small>Voluptatem accusantium doloremque laudantium</small></p>
											</div>
										</div>
									</div>
									
								</div>
								<div class="post-body">
									<div class="post-date">
										<span class="day">29</span>
										<span class="month-year">Sep 2014</span>
									</div>
									<div class="post-content">
										<h3><a href="blog-single.html">Gallery Post Type</a></h3>
										<div class="post-meta">
											<span>By <a href="#">John Doe</a> in <a href="#">Blog</a></span>
											<span><i class="fa fa-comment-o"></i> <a href="#">212 Comments</a></span>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
										<a class="btn btn-default btn-sm" href="blog-single.html">Read more</a>
									</div>
								</div>
								
							</article>
							
							<article class="post post-large">
								<div class="post-image">
									<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-2.jpg" alt="Blog"></a>
								</div>
								<div class="post-body">
									<div class="post-date">
										<span class="day">29</span>
										<span class="month-year">Sep 2014</span>
									</div>
									<div class="post-content">
										<h3><a href="blog-single.html">Image Post Type</a></h3>
										<div class="post-meta">
											<span>By <a href="#">John Doe</a> in <a href="#">Blog</a></span>
											<span><i class="fa fa-comment-o"></i> <a href="#">212 Comments</a></span>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
										<a class="btn btn-default btn-sm" href="blog-single.html">Read more</a>
									</div>
								</div>
								
							</article>
							
							<article class="post post-large">
								<div class="post-body">
									<div class="post-date">
										<span class="day">29</span>
										<span class="month-year">Sep 2014</span>
									</div>
									<div class="post-content">
										<h3><a href="blog-single.html">No Image Post Type</a></h3>
										<div class="post-meta">
											<span>By <a href="#">John Doe</a> in <a href="#">Blog</a></span>
											<span><i class="fa fa-comment-o"></i> <a href="#">212 Comments</a></span>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
										<a class="btn btn-default btn-sm" href="blog-single.html">Read more</a>
									</div>
								</div>
								
							</article>
							
							<article class="post post-large">
								<div class="post-video youtube">
									<iframe width="100%" height="488" src="http://www.youtube.com/embed/C-y70ZOSzE0" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="post-body">
									<div class="post-date">
										<span class="day">29</span>
										<span class="month-year">Sep 2014</span>
									</div>
									<div class="post-content">
										<h3><a href="blog-single.html">Youtube Post Type</a></h3>
										<div class="post-meta">
											<span>By <a href="#">John Doe</a> in <a href="#">Blog</a></span>
											<span><i class="fa fa-comment-o"></i> <a href="#">212 Comments</a></span>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
										<a class="btn btn-default btn-sm" href="blog-single.html">Read more</a>
									</div>
								</div>
								
							</article>
							
							<ul class="pagination">
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">Next</a></li>
						   </ul>
					   
						</div>
					</div>
					<div class="col-md-3 sidebar">
						<aside class="block pgl-bg-light blk-search">
							<form class="form-inline form-search" class="form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="textsearch2">Looking for something</label>
									<input type="text" class="form-control" id="textsearch2" placeholder="Looking for something">
								</div>
								<button type="submit" class="btn"><i class="fa fa-search"></i></button>
							</form>
						</aside>
						<!-- Begin Posts By Category -->
						<aside class="block pgl-cat pgl-bg-light">
							<h3>Posts By Category</h3>
							<ul class="list-unstyled list-cat">
								<li><a href="#">Single Family </a> <span>(39)  </span></li>
								<li><a href="#">Apartment  </a> <span>(15)  </span></li>
								<li><a href="#">Condo </a> <span>(27)  </span></li>
								<li><a href="#">Multi Family </a> <span>(23)  </span></li>
								<li><a href="#">Villa </a> <span>(18)  </span></li>
								<li><a href="#">Other  </a> <span>(21)  </span></li>
							</ul>
						</aside>
						<!-- End Posts By Category -->
						
						<aside class="block blk-ads pgl-bg-light">
							<img class="img-responsive" src="images/blog/side-ad.png" alt="Blog">
						</aside>
						
						<aside class="block tabs pgl-bg-light">
							<ul class="nav nav-tabs second-tabs">
								<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Popular</a></li>
								<li><a href="#latestComments" data-toggle="tab">Comments</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="popularPosts">
									<ul class="list-unstyled simple-post-list">
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-7.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Proin rutrum nisi eu ante mattis sit amet</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-6.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Sed non mauris vitae erat consequat</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-5.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Nullam ac urna eu felis dapibus</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-4.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Class aptent taciti sociosqu ad litora</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Ac urna eu felis condimentum</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
									</ul>
								</div>
								
								<div class="tab-pane" id="latestComments">
									<ul class="list-unstyled simple-post-list">
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-1.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Sed non mauris vitae erat consequat</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 213 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-2.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Proin rutrum nisi eu ante mattis sit amet</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 117 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Nullam ac urna eu felis dapibus</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 19 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-4.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Class aptent taciti sociosqu ad litora</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<a href="blog-single.html"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" alt="Blog"></a>
											</div>
											<div class="post-info">
												<a href="blog-single.html">Ac urna eu felis condimentum</a>
												<div class="post-meta">
													<i class="fa fa-eye"></i> 113 views
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</aside>
						<aside class="block pgl-bg-light">
							<h3>Tags</h3>
							<ul class="list-inline tagclouds">
								<li><a href="#">Image</a></li>
								<li><a href="#">Features</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Post Formats</a></li>
								<li><a href="#">Typography</a></li>
								<li><a href="#">WooCommerce</a></li>
								<li><a href="#">Shortcodes</a></li>
								<li><a href="#">Best Sellers</a></li>
								<li><a href="#">Slideshow</a></li>
							</ul>
						</aside>
						<aside class="block pgl-bg-light">
							<h3>Flickr Photos</h3>
							<ul class="list-thumb-gallery">
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-1.jpg" width="70" alt="Photo"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-2.jpg" width="70" alt="Photo"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-3.jpg" width="70" alt="Photo"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-4.jpg" width="70" alt="Photo"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-5.jpg" width="70" alt="Photo"></a></li>
								<li><a href="#"><img class="img-responsive" src="images/blog/demo-thumb-6.jpg" width="70" alt="Photo"></a></li>
							</ul>
						</aside>
					</div>
				</div>	
			</div>
			<!-- End content with sidebar -->
			
		</div>
@endsection