@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
			<section class="pgl-intro">
				<div class="container">
					<h2>Welcome to RealEstast</h2>
					<div class="owl-carousel pgl-pro-slide pgl-img-slide" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
						<div class="item-wrap">
							<img src="{{ asset('images/slides/slider1.jpg') }}" alt="Photo" class="img-responsive">
							<div class="item-caption"><p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae.</p></div>
						</div>
						<div class="item-wrap">
							<img src="{{ asset('images/slides/slider2.jpg') }}" alt="Photo" class="img-responsive">
							<div class="item-caption"><p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae.</p></div>
						</div>
						<div class="item-wrap">
							<img src="{{ asset('images/slides/slider3.jpg') }}" alt="Photo" class="img-responsive">
							<div class="item-caption"><p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae.</p></div>
						</div>
					</div>
					<div class="lead pgl-bg-light text-center">
						<p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes</p>
					</div>
				</div>
			</section>
			
			<!-- Begin About -->
			<section class="pgl-offer">
				<div class="container">
					<h2>We offer</h2>
					<div class="row">
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-home"></i></p>
									<h3>Viet Nam</h3>
									<address class="text-left">
										<i class="fa fa-map-marker"></i> Office : HITC Building , 239 Xuân Thủy , Cầu Giấy , Hà Nội<br>
										<i class="fa fa-phone"></i> Telephone : 0800-666-6666<br>
										<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
										<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:RealEstast@gmail.com">RealEstast@gmail.com</a>
									</address>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-home"></i></p>
									<h3>England</h3>
									<address class="text-left">
										<i class="fa fa-map-marker"></i> Office : HITC Building , 239 Xuân Thủy , Cầu Giấy , Hà Nội<br>
										<i class="fa fa-phone"></i> Telephone : 0800-666-6666<br>
										<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
										<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:RealEstast@gmail.com">RealEstast@gmail.com</a>
									</address>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation">
							<div class="offer-item pgl-bg-light">
								<div class="offer-item-inner">
									<p><i class="icons icon-home"></i></p>
									<h3>United States Of America</h3>
									<address class="text-left">
										<i class="fa fa-map-marker"></i> Office : HITC Building , 239 Xuân Thủy , Cầu Giấy , Hà Nội<br>
										<i class="fa fa-phone"></i> Telephone : 0800-666-6666<br>
										<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
										<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:RealEstast@gmail.com">RealEstast@gmail.com</a>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About -->
			
			<!-- Begin testimonial -->
			<section class="pgl-testimonials pgl-testimonials-full">
				<div class="container">
					<h2>CEO</h2>
					<div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true, "autoPlay": true}'>
						<div class="row">
							<div class="col-sm-4">
								<div class="testimonial-author">
									<div class="img-thumbnail-small img-circle">
										<img src="{{ asset('images/agents/agent-1.jpg') }}" class="img-circle" alt="Andrew MCCarthy">
									</div>
									<h4>John Smith</h4>
									<p><strong>CEO</strong></p>
								</div>
							</div>
							<div class="col-sm-8">
								<blockquote class="testimonial pad-top-0">
									<address>
										<i class="fa fa-map-marker"></i> Office : Viet Nam<br>
									</address>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="testimonial-author">
									<div class="img-thumbnail-small img-circle">
										<img src="{{ asset('images/agents/agent-1.jpg') }}" class="img-circle" alt="Andrew MCCarthy">
									</div>
									<h4>John Smith</h4>
									<p><strong>CEO</strong></p>
								</div>
							</div>
							<div class="col-sm-8">
								<blockquote class="testimonial pad-top-0">
									<address>
										<i class="fa fa-map-marker"></i> Office : England<br>
									</address>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="testimonial-author">
									<div class="img-thumbnail-small img-circle">
										<img src="{{ asset('images/agents/agent-1.jpg') }}" class="img-circle" alt="Andrew MCCarthy">
									</div>
									<h4>John Smith</h4>
									<p><strong>CEO</strong></p>
								</div>
							</div>
							<div class="col-sm-8">
								<blockquote class="testimonial pad-top-0">
									<address>
										<i class="fa fa-map-marker"></i> Office : United States Of America<br>
									</address>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End testimonial -->
			
			<!-- Begin testimonial -->
			<section class="pgl-teams">
				<div class="container">
					<h2>BROKER</h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br>veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - U.K</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - Viet Nam</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - Viet Nam</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - England</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>

						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - England</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>

						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - England</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>

						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - England</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>

						<div class="col-xs-6 col-md-3">
							<div class="pgl-team-item pgl-bg-light">
								
								<div class="img-thumbnail-medium">
									<a href="{{ route('agent.index',['id' => '1']) }}"><img src="{{ asset('images/agents/team-1.jpg') }}" class="img-responsive" alt=""></a>
									<ul class="social-links">
										<li><a href="https://www.facebook.com/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.skype.com/" title="skype" target="blank"><i class="fa fa-skype"></i></a></li>
										<li><a href="https://www.linkedin.com/" title="linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<div class="pgl-team-info">
									<h4>Nicholas Mitchell</h4>
									<p class="text-muted">Broker - England</p>
									<p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
									<a href="{{ route('agent.index',['id' => '1']) }}">View profile</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End testimonial -->
			
		</div>
@endsection