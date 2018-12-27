						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-12">
								<hr>
								<b class="text-ED8B8B"><u>BASIC INFORMATION</u></b>
								<hr>
								@if(session::has('post_news_noti'))
								<label><i class="text-red">{{ session::get('post_news_noti') }}</i></label>
								<hr>
								@endif
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Title<i class="text-red">*</i></label></div>
							<div class="col-md-9">
								<input type="text" name="basicInformation[title]" class="form-control" placeholder="ex : For sale or rent villas" value=""  maxlength="99" minlength="10" id="postnews_title">
								<i class="text-red hide" id="postnews_title_error"></i>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Type<i class="text-red">*</i></label></div>
							<div class="col-md-6">
								<div class="pb-2">
									<select class="form-control chosen-select" name="basicInformation[type]" data-placeholder="" id="postnews_type">
										<option value="" selected>-- Type --</option>
										<option value="Rental">Rental</option>
										<option value="Sell">Sell</option>
										<option value="Rent">Rent</option>
										<option value="Purchase">Purchase</option>
									</select>
									<i class="text-red hide" id="postnews_type_error"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Type Of Properties<i class="text-red">*</i></label></div>
							<div class="col-md-6">
								<div class="pb-2">
									<select class="form-control chosen-select" name="basicInformation[typeofproperties]" data-placeholder="" id="postnews_typeofproperties">
										<option value="" selected>-- Type --</option>
										<option value="Dwelling_House">Dwelling House</option>
										<option value="Apartment">Apartment</option>
										<option value="Land">Land</option>
										<option value="Other_Real_Estate">Other Real Estate</option>
									</select>
									<i class="text-red hide" id="postnews_typeofproperties_error"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Address<i class="text-red">*</i></label></div>
							<div class="col-md-6" id="postnews_place" >
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[country]" data-placeholder="" id="postnews_country">
											@include('Site.Include.SelectOption.Country.Country')
										</select>
										<i class="text-red hide" id="postnews_country_error"></i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[city]" data-placeholder="" id="postnews_city">
											@include('Site.Include.SelectOption.City.VietNam')
										</select>
										<i class="text-red hide" id="postnews_city_error"></i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[district]" data-placeholder="" id="postnews_district">
											@include('Site.Include.SelectOption.District.VietNam')
										</select>
										<i class="text-red hide" id="postnews_district_error"></i>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[ward]" data-placeholder="" id="postnews_ward">
											@include('Site.Include.SelectOption.Ward.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[street]" data-placeholder="" id="postnews_street">
											@include('Site.Include.SelectOption.Street.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<select class="form-control chosen-select" name="basicInformation[project]" data-placeholder="" id="postnews_project">
											@include('Site.Include.SelectOption.Project.VietNam')
										</select>
									</div>
									<div class="pb-2">
										<input type="text" id="postnews_address" name="basicInformation[address]" class="form-control" placeholder="ex : Dự án An Lạc - Yên Phụ - Điện Biên - Ba Đình - Hà Nội - Việt Nam" value="">
										<i class="text-red hide" id="postnews_address_error"></i>
									</div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Acreage<i class="text-red">*</i></label></div>
							<div class="col-md-6 col-sm-9">
								<input type="number" name="basicInformation[acreage]" class="form-control" placeholder="ex : 100" value="0" required id="postnews_acreage" min="0">
								<i class="text-red hide" id="postnews_acreage_error"></i>
							</div>
							<div class="col-md-3 col-sm-3"><i>m²</i></div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Price<i class="text-red">*</i></label></div>
							<div class="col-md-6 col-sm-9">
								<input type="number" name="basicInformation[price]" class="form-control" placeholder="ex : 1000" value="0" required id="postnews_price" min="0">
								<i class="text-red hide" id="postnews_price_error"></i>
							</div>
							<div class="col-md-3"><i>$</i></div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3"><label>Unit</label></div>
							<div class="col-md-6 col-sm-9">
								<select class="form-control chosen-select" name="basicInformation[unit]" data-placeholder="" id="postnews_unit">
									<option value="Dollar" selected="selected">Dollar</option>
									<option value="Dollar/m²">Dollar/m²</option>
									<option value="Negotiate">Negotiate</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 pt-2 pb-2">
							<div class="col-md-3 col-sm-3 col-xs-5"><label>Total Price($)</label></div>
							<div class="col-md-6 col-sm-9 col-xs-7">
								<b id="postnews_total_price">0</b>
							</div>
						</div>