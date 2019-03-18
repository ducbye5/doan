@extends('layouts.site')
@section('controller')
<!-- Begin Main Slide -->
<div role="main" class="main">
	<form method="post" action="{{ route('index.searchProperties') }}" id="formSearchIndex">
		@csrf
			<section class="main-slide">
				<div id="owl-main-slide" class="owl-carousel pgl-main-slide" data-plugin-options='{"autoPlay": true}'>
					@foreach($list_data['data_top_slide'] as $data)
					@php
						$id = $data['id'];
						$data_picture = explode(';',$data['news_picture']);
						$picture_name = empty($data_picture)?'default.jpg':$data_picture[0];
						if($data['news_basic_info_unit'] == 'Negotiate'){
							$cost = 'Negotiate';
						}else{
							$cost = '$ '.number_format($data['news_basic_info_total_price']);
						}
						$title = strtoupper($data['news_basic_info_title']);
						$address = $data['news_basic_info_address'];
						$area = $data['news_basic_info_acreage'].' m²';
					@endphp
					<div class="item"><img src="{{ asset('upload/image/news/'.$picture_name) }}" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">{{ $cost }}</span>
										<span class="label"><a href="{{ route('properties.detail',['id' => $id]) }}" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="">{{ $title }}</a></h2>
										<p>{{ $area }}</p>
										<p>{{ $address }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Advanced Search -->
			<section class="pgl-advanced-search pgl-bg-light">
				<div class="container">
					@component('Site.Include.Search.SearchProperties',
					[
						'data_search' => $list_data['data_input_search'],
						'data_to_search' => $list_data['list_data_to_search']
					])
					@endcomponent
				</div>
			</section>
			<!-- End Advanced Search -->
			
			<!-- Begin Featured -->
			<section class="pgl-featured pgl-bg-grey">
				<div class="container">
					<div class="row">
					@php
						$stt = 0;
					@endphp
					@foreach($list_data['data_middle_slide'] as $data)
					@php
						$id = $data['id'];
						$data_picture = explode(';',$data['news_picture']);
						$picture_name = empty($data_picture)?'default.jpg':$data_picture[0];
						$title = strtoupper($data['news_basic_info_title']);
						$address = $data['news_basic_info_address'];
						$area = $data['news_basic_info_acreage'].' m²';
						$check = !empty($stt > 0)?'col-md-3':'';
						$stt++;
					@endphp
						<div class="col-md-6 animation {{ $check }}">
							<div class="pgl-property featured-item">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="{{ asset('upload/image/news/'.$picture_name) }}">
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="{{ route('properties.detail',['id' => $id]) }}">{{ $title }}</a></h3>
										<p>{{ $area }}</p>
										<p>{{ $address }}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					</div>
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Featured -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Properties</h2>
					<div class="listing-header clearfix">
						@component('Site.Include.Filter.FilterProperties',
						['data_filter' => $list_data['data_input_fillter']])
						@endcomponent
					</div>
					<div class="row">
						@foreach($list_data['data_news'] as $data)
						@php
							$id = $data['id'];
							$data_picture = explode(';',$data['news_picture']);
							$picture_name = empty($data_picture)?'default.jpg':$data_picture[0];
							$type = strtoupper($data['news_basic_info_type']??'');
							if($data['news_basic_info_unit'] == 'Negotiate'){
								$cost = 'Negotiate';
							}else{
								$cost = '$ '.number_format($data['news_basic_info_total_price']);
							}
							$title = strtoupper($data['news_basic_info_title']??'');
							$address = $data['news_basic_info_address']??'';
							$area = $data['news_basic_info_acreage']??'';
							$bedroom = $data['news_other_info_numberbedrooms']??'';
							$bathroom = $data['news_other_info_numbertoilets']??'';
							$type_of_cost = $data['news_calendar_typeofcost']??'';
							if($type_of_cost == 'Special'){
								$text_color = 'text-red';
							}elseif($type_of_cost == 'Vip'){
								$text_color = 'text-blue';
							}elseif($type_of_cost == 'Goodwill'){
								$text_color = 'text-green';
							}else{
								$text_color = '';
							}
						@endphp
						<div class="col-xs-4 col-md-4 animation">
							<div class="pgl-property">
								<div class="property-thumb-info">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive img-properties" src="{{ asset('upload/image/news/'.$picture_name) }}">
										<span class="property-thumb-info-label">
											<span class="label price">{{ $cost }}</span>
											<span class="label forrent">{{ $type }}</span>
										</span>
									</div>
									<div class="property-thumb-info-content">
										<h3><a href="{{ route('properties.detail',['id' => $id]) }}" class="{{ $text_color }}">{{ $title }}</a></h3>
										<address>{{ $address }}</address>
									</div>
									<div class="amenities clearfix">
										<ul class="pull-left">
											<li><strong>Area: </strong>{{ $area }}<sup>m²</sup></li>
										</ul>
										<ul class="pull-right">
											<li><i class="icons icon-bedroom"></i> {{ $bedroom }}</li>
											<li><i class="icons icon-bathroom"></i> {{ $bathroom }}</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="row text-center">
						{{ $list_data['data_news']->links() }}
					</div>				
				</div>
			</section>
			<!-- End Properties -->

			<!-- Begin About -->
			<section class="pgl-about">
				<div class="container">
					<div class="row">
						<div class="col-md-12 animation about-item">
							<h2>New Infomation</h2>
							<div class="panel-group" id="New_Infomation">
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#New_Infomation" href="#Interior_And_Exterior">Interior And Exterior</a> </h4>
									</div>
									<div id="Interior_And_Exterior" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<ul>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#New_Infomation" href="#Feng_Shui_Painting" class="collapsed">Feng Shui Painting</a> </h4>
									</div>
									<div id="Feng_Shui_Painting" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#New_Infomation" href="#Home_Design_Template" class="collapsed">Home Design Template</a> </h4>
									</div>
									<div id="Home_Design_Template" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
												<li>
													<b>=>  </b><a href="">a</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About -->
			
			<!-- Begin Agents -->
			<section class="pgl-agents">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animation about-item">
							<h2>Broker</h2>
							<div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true, "autoPlay": true}'>
								@foreach($company['data_broker'] as $broker)
								<div class="col-md-12">
									<div class="testimonial-author">
										<div class="img-thumbnail-small img-circle">
											<a href="{{ route('agent.index',['id' => $broker['id']]) }}"><img src="{{ asset('images/agents/'.$broker['broker_avatar']) }}" class="img-circle" alt="{{ $broker['broker_name'] }}" height="110" width="110"></a>
										</div>
										<h4>{{ $broker['broker_name'] }}</h4>
										<p><strong>Broker</strong></p>
									</div>
									<div class="divider-quote-sign"><span>“</span></div>
									<blockquote class="testimonial">
										<p>{{ $broker['broker_description'] }}</p>
									</blockquote>
								</div>
								@endforeach
							</div>
						</div>
						<div class="col-md-8 animation about-item">
							<h2>Utility Support</h2>
							<div class="panel-group" id="Utility_Support">
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#Utility_Support" href="#Feng_Shui_Counseling">Feng Shui Counseling</a> </h4>
									</div>
									<div id="Feng_Shui_Counseling" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
											<p>Go to <u><a href="">Feng Shui Counseling</a></u></p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#Utility_Support" href="#Estimating_The_Cost_Of_Housing" class="collapsed">Estimating The Cost Of Housing</a> </h4>
									</div>
									<div id="Estimating_The_Cost_Of_Housing" class="panel-collapse collapse">
										<div class="panel-body"> <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p> 
										<p>Go to <u><a href="">Estimating The Cost Of Housing</a></u></p></div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#Utility_Support" href="#Calculate_Interest_Rates_When_Borrowing_From_Banks" class="collapsed">Calculate Interest Rates When Borrowing From Banks</a> </h4>
									</div>
									<div id="Calculate_Interest_Rates_When_Borrowing_From_Banks" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
											<p>Go to <u><a href="">Calculate Interest Rates When Borrowing From Banks</a></u></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Agents -->
	</form>		
</div>
<script type="text/javascript" src="{{ asset('js/site/custom/custom.js') }}"></script>			
@endsection