@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
	<form method="post" action="{{ route('properties.searchProperties',['type' => $type]) }}"  id="formSearchPurchaseAndRent">
		@csrf
			<input type="hidden" name="search[type]" value="{{ $type }}">	
			<!-- Begin Advanced Search -->
			<section class="pgl-advanced-search pgl-bg-light">
				<div class="container">
					@component('Site.Include.Search.SearchProperties',[])
					@endcomponent
				</div>
			</section>
			<!-- End Advanced Search -->
			
			<!-- Begin Featured -->
			<section class="pgl-featured">
				<div class="container">
					<h2>Top View Properties</h2>
					<div class="row">
						<div class="owl-carousel pgl-pro-slide" data-plugin-options='{"items": 4, "singleItem": false, "autoPlay": true, "pagination": false}'>
							@foreach($list_data['top_view_property'] as $data)
							@php
								$id = $data['id'];
								$data_picture = explode(';',$data['news_picture']);
								$picture_name = empty($data_picture)?'default.jpg':$data_picture[0];
								if($data['news_basic_info_unit'] == 'Negotiate'){
									$cost = 'Negotiate';
								}else{
									$cost = '$ '.number_format($data['news_basic_info_total_price']);
								}
								$type_of_cost = $data['news_calendar_typeofcost']??'';
								$title = strtoupper($data['news_basic_info_title']);
								$address = $data['news_basic_info_address'];
								$area = $data['news_basic_info_acreage'].' m²';
							@endphp
							<div class="col-md-12 animation">
								<div class="pgl-property featured-item">
									<div class="property-thumb-info">
										<div class="property-thumb-info-image">
											<img alt="" class="img-responsive" src="{{ asset('upload/image/news/'.$picture_name) }}">
										</div>
										<div class="property-thumb-info-content">
											<h3><a href="{{ route('properties.detail',['id' => $id]) }}">{{ $title }}</a></h3>
											<p>{{ $cost }} - {{ $area }}</p>
											<p>{{ $address }}</p>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<hr class="top-tall">
				</div>
			</section>
			<!-- End Featured -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Property</h2>
					<div class="properties-full properties-listing properties-listfull">
						<div class="listing-header clearfix">
							@component('Site.Include.Filter.FilterProperties',[])
							@endcomponent
						</div>
						@foreach($list_data['data_property'] as $data)
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
						<div class="pgl-property animation">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="property-thumb-info-image">
										<img alt="" class="img-responsive" src="{{ asset('upload/image/news/'.$picture_name) }}">
										<span class="property-thumb-info-label">
											<span class="label price">{{ $cost }}</span>
										</span>
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
									<div class="property-thumb-info">
											
										<div class="property-thumb-info-content">
											<h3><a href="{{ route('properties.detail',['id' => $id]) }}"  class="{{ $text_color }}">{{ $title }}</a></h3>
											<address>{{ $address }}</address>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
										<div class="amenities clearfix">
											<ul class="pull-left">
												<li><strong>Area:</strong> {{ $area }}<sup>m2</sup></li>
											</ul>
											<ul class="pull-right">
												<li><i class="icons icon-bedroom"></i> {{ $bedroom }}</li>
												<li><i class="icons icon-bathroom"></i> {{ $bathroom }}</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="row text-center">
							{{ $list_data['data_property']->links() }}
						</div>
					</div>
				</div>
			</section>
			<!-- End Properties -->
	</form>		
</div>
<script type="text/javascript" src="{{ asset('js/site/custom/custom.js') }}"></script>
@endsection