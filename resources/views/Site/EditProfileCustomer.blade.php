@extends('layouts.site')
@section('controller')
<div role="main" class="main pgl-bg-grey">
			
			<!-- Begin content with sidebar -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 sidebar">
						@include('Site.Include.SlidebarProfileCustomer')
					</div>
					<div class="col-md-9 content">
						
						@include('Site.Include.FormEditProfileCustomer')
						
					</div>
					
				</div>	
			</div>
			<!-- End content with sidebar -->
			
</div>
@endsection