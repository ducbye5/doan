@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>Contact Us</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
			
			<!-- Begin content with sidebar -->
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						
						<div class="contact">
							<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.</p>
							<div id="contact-map" class="pgl-bg-light">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<strong>Your address</strong>
									<address>129/6 tristique eu eleifend sit amet, tincid unt afringilla rhoncus lacus in condimentum.</address>
								</div>
								<div class="col-sm-6">
									<address>
										<strong>Phone.</strong> 012.666.999<br>
										<strong>Fax.</strong> 012.666.999<br>
										<strong>Email.</strong> pixelgeeklab@gmail.com
									</address>
								</div>
							</div>
							<hr>
							<form id="contact-form" name="form1" method="post" action="">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="name">Your Name<span class="text-red">*</span></label>
											<input type="text" name="name" id="name" class="form-control" data-msg-required="Please enter your name." required>
										</div>
										<div class="col-sm-6">
											<label for="customer_mail">Your Email<span class="text-red">*</span></label>
											<input type="email" name="customer_mail" id="customer_mail" class="form-control" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="subject">Subject<span class="text-red">*</span></label>
											<input type="text" name="subject" id="subject" class="form-control" data-msg-required="Please enter the subject." required>
										</div>
										<div class="col-sm-6">
											<label for="website">Website</label>
											<input type="text" name="website" id="website" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="comments">Your Message<span class="text-red">*</span></label>
									<textarea rows="9" name="comments" id="comments" class="form-control" data-msg-required="Please enter your message." required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-primary min-wide" data-loading-text="Loading...">
								</div>
							</form>
						</div>
						
					</div>
					<div class="col-md-3 sidebar">
						
						<!-- Begin Our Agents -->
						<aside class="block pgl-agents pgl-bg-light">
							<h3>Our Agents</h3>
							<div class="owl-carousel pgl-pro-slide pgl-agent-item" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>

								<div class="pgl-agent-item">
									<div class="img-thumbnail-medium">
										<a href=""><img src="{{ asset('images/agents/temp-agent.png') }}" class="img-responsive" alt=""></a>
									</div>
									<div class="pgl-agent-info">
										<small>NO.1</small>
										<h4><a href="agentprofile.html">John Smith</a></h4>
										<address>
											<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
											<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
											<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
											<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:JohnSmith@gmail.com">JohnSmith@gmail.com</a>
										</address>
									</div>	
								</div>

								<div class="pgl-agent-item">
									<div class="img-thumbnail-medium">
										<a href=""><img src="{{ asset('images/agents/temp-agent.png') }}" class="img-responsive" alt=""></a>
									</div>
									<div class="pgl-agent-info">
										<small>NO.2.1</small>
										<h4><a href="agentprofile.html">Andrew MCCarthy</a></h4>
										<address>
											<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
											<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
											<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
											<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:MCCarthy@gmail.com">MCCarthy@gmail.com</a>
										</address>
									</div>	
								</div>
								
							</div>
						</aside>
						<!-- End Our Agents -->
						
						<!-- Begin Tabs -->
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-7.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-6.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-5.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-4.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-3.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-1.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-2.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-3.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-4.jpg') }}" alt="Blog"></a>
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
												<a href="blog-single.html"><img class="img-responsive" src="{{ asset('images/blog/demo-thumb-3.jpg') }}" alt="Blog"></a>
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
						<!-- End Tabs -->
						
					</div>
				</div>	
			</div>
			<!-- End content with sidebar -->
			
		</div>
@endsection