@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
			
			<!-- Begin content with sidebar -->
			<div class="container">
				<div class="row">
					@if(\Session::has('customer'))
					<div class="col-md-3 sidebar">
						@include('Site.Include.SlidebarProfileCustomer')
					</div>
					<div class="col-md-9 content">	
						@include('Site.Include.PostNews')						
					</div>
					@else
					<div class="col-md-10 col-md-offset-1 content">	
						@include('Site.Include.PostNews')						
					</div>
					@endif
				</div>	
			</div>
			<!-- End content with sidebar -->
			
</div>
@endsection