
@if(\Session::has('customer'))
						<aside class="block animation about-item pgl-bg-light">
							<h3 class="text-center"><b>Your Profile</b></h3>
							<div class="testimonial-author text-center pb-2">
								<div class="img-thumbnail-small img-circle">
									<img src="{{ asset('upload/image/user/'.$customer['profile_avatar']) }}" class="img-circle" alt="Andrew MCCarthy" width="110" height="110">
								</div>
								<div>{{ $customer['profile_fullname'] }}</div>
								<div>Coint : <i>{{ $customer['coint'] }}</i></div>
								<div>
									<a href="{{ route('coint.index') }}" class="btn btn-primary">Buy Coint</a>
								</div>
							</div>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Profile Management</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<ul>
												<li>
													<a href="{{ route('customer.editprofile') }}">Change Profile</a>
												</li>
												<li>
													<a href="">Change Password</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">News Management</a> </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>
													<a href="">News Management</a>
												</li>
												<li>
													<a href="{{ route('postnews.index') }}">Post News</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Financial Management</a> </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>
													<a href="">Balance Information</a>
												</li>
												<li>
													<a href="">Transaction History</a>
												</li>
												<li>
													<a href="{{ route('coint.index') }}">Buy Coint</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">Utilities</a> </h4>
									</div>
									<div id="collapseFouth" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>
													<a href="">Notifications</a><i class="badge badge-primary">0</i>
												</li>
												<li>
													<a href="">Messages</a><i class="badge badge-primary">0</i>
												</li>
												<li>
													<a href="">Tutorial Post News</a>
												</li>
												<li>
													<a href="">Tutorial Buy Coint</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</aside>
						
						<!-- Begin Advanced Search -->
						<aside class="block pgl-agents pgl-bg-light">
							<h3>Real Estate Broker</h3>
							<div class="owl-carousel pgl-pro-slide pgl-agent-item" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>

								<div class="pgl-agent-item">
									<div class="img-thumbnail-small img-circle text-center">
										<img src="{{ asset('images/agents/agent-1.jpg') }}" class="img-circle" alt="Andrew MCCarthy">
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
									<div class="img-thumbnail-small img-circle text-center">
										<img src="{{ asset('images/agents/agent-1.jpg') }}" class="img-circle" alt="Andrew MCCarthy">
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
						<!-- End Advanced Search -->
						
@endif					
					