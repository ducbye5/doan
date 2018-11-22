						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12">
								<b class="text-ED8B8B"><u>OTHERS INFORMATION</u></b>
								<hr>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Facade(m)</label></div>
							<div class="col-md-6">
								<input type="number" name="otherInformation[facade]" class="form-control" placeholder="ex : 5" value="" min=0 id="postnews_facade">
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Direction of the house</label></div>
							<div class="col-md-6">
								<select class="form-control chosen-select" name="otherInformation[directionhouse]" data-placeholder="">
									@include('Site.Include.SelectOption.Direction')
								</select>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Direction of balcony</label></div>
							<div class="col-md-6">
								<select class="form-control chosen-select" name="otherInformation[directionbalcony]" data-placeholder="">
									@include('Site.Include.SelectOption.Direction')
								</select>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Number of floors</label></div>
							<div class="col-md-6">
								<input type="text" name="otherInformation[numberfloors]" class="form-control" placeholder="ex : 3" value="" min=0 id="postnews_numberfloors">
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Number of bedrooms</label></div>
							<div class="col-md-6">
								<input type="text" name="otherInformation[numberbedrooms]" class="form-control" placeholder="ex : 3" value="" min=0 id="postnews_numberbedrooms">
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Number of toilets</label></div>
							<div class="col-md-6">
								<input type="text" name="otherInformation[numbertoilets]" class="form-control" placeholder="ex : 3" value="" min=0 id="postnews_numbertoilets">
							</div>
						</div>