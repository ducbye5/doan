
<section class="pgl-properties pgl-bg-grey">
	<div class="properties-full bg-color-white">
		<div class="row">
			<div class="col-md-12">
			  	<div class="">
			    	<form method="post" action="{{ route('postNews.regist') }}" enctype="multipart/form-data" id="postnews">
						@csrf
						<div class="col-md-12" id="BasicInformation">
							<div class="row">
								@include('Site.Include.PostNews.BasicInformation')
							</div>
						</div>
						<div class="col-md-12" id="DescriptionInformation">
							<div class="row">
								@include('Site.Include.PostNews.DescriptionInformation')
							</div>
						</div>
						<div class="col-md-12" id="OthersInformation">
							<div class="row">
								@include('Site.Include.PostNews.OthersInformation')
							</div>
						</div>
						<div class="col-md-12" id="Pictures">
							<div class="row">
								@include('Site.Include.PostNews.Pictures')
							</div>
						</div>
						<div class="col-md-12" id="ContactInformation">
							<div class="row">
								@include('Site.Include.PostNews.ContactInformation')
							</div>
						</div>
						<div class="col-md-12" id="PostCalendar">
							<div class="row">
								@include('Site.Include.PostNews.PostCalendar')
							</div>
						</div>
						<div class="col-md-12" id="Capcha">
							<div class="row">
								@include('Site.Include.PostNews.Capcha')
							</div>
						</div>
						<div class="col-md-12" id="Button">
							<div class="row">
								@include('Site.Include.PostNews.Button')
							</div>
						</div>
						<div class="col-md-12" id="NotificationFooter">
							<div class="row">
								@include('Site.Include.PostNews.NotificationFooter')
							</div>
						</div>	
					</form>
			  	</div>
			  	
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="{{ asset('js/site/postnews/postnews.js') }}"></script>
