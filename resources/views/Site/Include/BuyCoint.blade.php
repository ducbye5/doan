@if(\Session::has('customer'))
<section class="pgl-properties pgl-bg-grey">
	<div class="properties-full bg-color-white">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="col-md-12">
					<hr>
				</div>
				<div class="col-md-12">
					<u><i><b>SELECT A PAYMENT METHOD</b></i></u>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="col-md-10 col-xs-12 col-sm-10 col-sm-offset-1 col-md-offset-1 pt-3">
				<ul class="nav nav-pills nav-stacked">
				  	<li class="active"><a data-toggle="tab" href="#atm">Online payment by ATM card / QR code (Free, completed in 5 minutes)</a></li>			  	
				  	<li><a data-toggle="tab" href="#visa">Online payment by international card (Visa, Master, JCB) (Free, completed within 5 minutes)</a></li>
				  	<li><a data-toggle="tab" href="#regular">Regular cash transfers (bank fees collected, completed within 48h)</a></li>
				</ul>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="col-md-12 col-xs-12 tab-content">
			  	<div id="atm" class="tab-pane fade in active">
			    	@include('Site.Include.Payment.ATMCard')
			  	</div>
			  	<div id="visa" class="tab-pane fade">
			    	@include('Site.Include.Payment.InternationalCard')
			  	</div>
			  	<div id="regular" class="tab-pane fade">
			    	@include('Site.Include.Payment.RegularTransfers')
			  	</div>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="col-md-12">
					@include('Site.Include.Payment.NotificationFooter')
				</div>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="{{ asset('js/site/payment/payment.js') }}"></script>
@endif