						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12">
								<b class="text-ED8B8B"><u>BASIC INFORMATION</u></b>
								<hr>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Title<i class="text-red">*</i></label></div>
							<div class="col-md-8 col-sm-9">
								<input type="text" name="basicInformation[title]" class="form-control" placeholder="ex : For sale or rent villas" required value="">
								<i class="text-red">The field is required. Min is 30 charactors and max is 99 charactors</i>
							</div>
							<div class="col-md-1 col-sm-3">
								<i>99</i>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Type<i class="text-red">*</i></label></div>
							<div class="col-md-6">
								<div class="pb-2">
									<select class="form-control chosen-select" name="basicInformation[type]" data-placeholder="">
										<option value="" selected="selected">-- Type --</option>
										<option value="Rental">Rental</option>
										<option value="Sell">Sell</option>
									</select>
									<i class="text-red">The field is required</i>
								</div>
							</div>
						</div>
						<div class="col-md-12 pt-2 pb-2">
							<div class="col-md-3"><label>Address<i class="text-red">*</i></label></div>
							<div class="col-md-6" id="news_purchase_address" >
									<div class="pb-2">
										<select class="form-control chosen-select" name="country" data-placeholder="" id="purchase_country">
											@include('Site.Include.SelectOption.Country.Country')
										</select>
										<i class="text-red">The field is required</i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="city" data-placeholder="" id="purchase_city">
											@include('Site.Include.SelectOption.City.VietNam')
										</select>
										<i class="text-red">The field is required</i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="district" data-placeholder="" id="purchase_district">
											@include('Site.Include.SelectOption.District.VietNam')
										</select>
										<i class="text-red">The field is required</i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="ward" data-placeholder="" id="purchase_ward">
											@include('Site.Include.SelectOption.Ward.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="street" data-placeholder="" id="purchase_street">
											@include('Site.Include.SelectOption.Street.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="project" data-placeholder="" id="purchase_project">
											@include('Site.Include.SelectOption.Project.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<input type="text" id="purchase_address" name="address" class="form-control" placeholder="ex : Dự án An Lạc - Yên Phụ - Điện Biên - Ba Đình - Hà Nội - Việt Nam" value="" required>
									</div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Acreage<i class="text-red">*</i></label></div>
							<div class="col-md-6 col-sm-9">
								<input type="number" name="basicInformation[acreage]" class="form-control" placeholder="ex : 100" value="" required min=0>
							</div>
							<div class="col-md-3 col-sm-3"><i>m²</i></div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Price<i class="text-red">*</i></label></div>
							<div class="col-md-6 col-sm-9">
								<input type="number" name="basicInformation[price]" class="form-control" placeholder="ex : 1000" value="" required min=0>
							</div>
							<div class="col-md-3"><i>$</i></div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Unit</label></div>
							<div class="col-md-6 col-sm-9">
								<select class="form-control chosen-select" name="basicInformation[unit]" data-placeholder="">
									<option value="Dollar" selected="selected">Dollar</option>
									<option value="Dollar/m²">Dollar/m²</option>
									<option value="Negotiate">Negotiate</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Total Price</label></div>
							<div class="col-md-6 col-sm-9">
								<b>100000</b><i> $</i>
							</div>
						</div>