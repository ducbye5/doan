						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12">
								<hr>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12 text-center">
								@if(\Session::has('customer'))
								<input type="submit" value="Submit" class="btn btn-info" id="submit">
								@else
								<input type="button" value="Submit" class="btn btn-info" data-toggle="modal" data-target="#login">
								@endif
								<input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12">
								<hr>
							</div>
						</div>