						<div class="row">	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[country]" class="chosen-select">
										@component('Site.Include.SelectOption.Country.Country',['data_search_country' => $data_search['country'],'data_country' => $data_to_search['country']])
										@endcomponent
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[city]" class="chosen-select">
										@component('Site.Include.SelectOption.City.VietNam',['data_search_city' => $data_search['city'],'data_city' => $data_to_search['city']])
										@endcomponent
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[district]" class="chosen-select">
										@component('Site.Include.SelectOption.District.VietNam',['data_search_district' => $data_search['district'],'data_district' => $data_to_search['district']])
										@endcomponent
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[project]" class="chosen-select">
										@component('Site.Include.SelectOption.Project.VietNam',['data_search_project' => $data_search['project'],'data_project' => $data_to_search['project']])
										@endcomponent
									</select>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[area]" class="chosen-select">
										<option selected="selected" value="">Area From</option>
										@foreach($data_to_search['area'] as $data_area)
										@php
											if($data_search['area'] == $data_area){
												$check = 'selected';
											}else{
												$check = '';
											}
										@endphp
										<option value="{{ $data_area }}" {{ $check }}>{{ $data_area }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[bedrooms]" class="chosen-select">
										<option selected="selected" value="">Bedrooms</option>
										@foreach($data_to_search['bedrooms'] as $data_bedrooms)
										@php
											if($data_bedrooms == '5plus'){
												$value = '5+';
											}else{
												$value = $data_bedrooms;
											}
											if($data_search['bedrooms'] == $data_bedrooms){
												$check = 'selected';
											}else{
												$check = '';
											}
										@endphp
										<option value="{{ $data_bedrooms }}" {{ $check }}>{{ $value }}</option>
										@endforeach
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<select name="search[bathrooms]" class="chosen-select">
										<option selected="selected" value="">Bathrooms</option>
										@foreach($data_to_search['bathrooms'] as $data_bathrooms)
										@php
											if($data_bathrooms == '5plus'){
												$value = '5+';
											}else{
												$value = $data_bathrooms;
											}
											if($data_search['bathrooms'] == $data_bathrooms){
												$check = 'selected';
											}else{
												$check = '';
											}
										@endphp
										<option value="{{ $data_bathrooms }}" {{ $check }}>{{ $value }}</option>
										@endforeach
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<div class="row pgl-narrow-row">
										<div class="col-xs-6">
											<select name="search[minprice]"" class="chosen-select">
												<option selected="selected" value="">Price From</option>
												@foreach($data_to_search['minprice'] as $data_minprice)
												@php
													if($data_search['minprice'] == $data_minprice){
														$check = 'selected';
													}else{
														$check = '';
													}
												@endphp
												<option value="{{ $data_minprice }}" {{ $check }}>${{ $data_minprice }}</option>
												@endforeach
											</select>
										</div>
										<div class="col-xs-6">
											<select name="search[maxprice]" class="chosen-select">
												<option selected="selected" value="">Price To</option>
												@foreach($data_to_search['maxprice'] as $data_maxprice)
												@php
													if($data_search['maxprice'] == $data_maxprice){
														$check = 'selected';
													}else{
														$check = '';
													}
												@endphp
												<option value="{{ $data_maxprice }}" {{ $check }}>${{ $data_maxprice }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary">Find your home</button>
								</div>
							</div>
						</div>