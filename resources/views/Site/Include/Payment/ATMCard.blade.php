<div class="col-md-12 col-xs-12">
	<div class="col-md-12">
		<div class="panel-group" id="ATMCard">
			<div class="panel panel-default pgl-panel">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#ATMCard" href="#listbank">Bank list associated with the system</a> </h4>
				</div>
				<div id="listbank" class="panel-collapse collapse in">
					<div class="panel-body"> 
						@include('Site.Include.Payment.ListBank')
					</div>
				</div>
			</div>
			<div class="panel panel-default pgl-panel">
				<div class="panel-heading">
					<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#ATMCard" href="#FormBuyCointByATMCard"  class="collapsed">Regist Buy Coint</a> </h4>
				</div>
				<div id="FormBuyCointByATMCard" class="panel-collapse collapse">
					<div class="panel-body"> 
						@include('Site.Include.Payment.BuyCointByATMCard')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
