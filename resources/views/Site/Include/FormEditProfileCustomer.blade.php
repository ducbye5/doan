@if(\Session::has('customer'))
<!-- Begin Properties -->
	<section class="pgl-properties pgl-bg-grey">
		<div class="properties-full bg-color-white">
			<div class="row">
				<form method="post" action="" enctype="multipart/form-data">
					@csrf
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-12">
							<b class="text-ED8B8B">INFORMATION BASIC</b>
							<hr>
						</div>
					</div>
					<div class="col-md-12 col-xs-12 pt-2 pb-2">
						<div class="col-md-3"><label>Pictures</label></div>
						<div class="col-md-6">
							<input type="file" name="profile[pictures]" class="form-control">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Full name<i class="text-red">*</i></label></div>
						<div class="col-md-6">
							<input type="text" name="profile[fullname]" class="form-control" placeholder="ex : Nguyễn Văn A" value="" required>
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Birthday</label></div>
						<div class="col-md-6">
							<input type="date" name="profile[birthday]" class="form-control" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Sex</label></div>
						<div class="col-md-4">
							<input type="radio" name="profile[sex]" value="man" checked><i>Man</i>
							<input type="radio" name="profile[sex]" value="woman"><i>Woman</i>
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Address<i class="text-red">*</i></label></div>
							<div class="col-md-6" id="select_profile_address" >
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[country]" data-placeholder="" id="profile_country">
										@include('Site.Include.SelectOption.Country.Country')
									</select>
									<i class="text-red">The field is required</i>
								</div>
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[city]" data-placeholder="" id="profile_city">
										@include('Site.Include.SelectOption.City.VietNam')
									</select>
									<i class="text-red">The field is required</i>
								</div>
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[district]" data-placeholder="" id="profile_district">
										@include('Site.Include.SelectOption.District.VietNam')
									</select>
									<i class="text-red">The field is required</i>
								</div>
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[ward]" data-placeholder="" id="profile_ward">
										@include('Site.Include.SelectOption.Ward.VietNam')
									</select>
								</div>
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[street]" data-placeholder="" id="profile_street">
										@include('Site.Include.SelectOption.Street.VietNam')
									</select>
								</div>
								<div class="pb-2">
									<select class="form-control chosen-select" name="profile[project]" data-placeholder="" id="profile_project">
										@include('Site.Include.SelectOption.Project.VietNam')
									</select>
								</div>
								<div class="pb-2">
									<input type="text" id="profile_address" name="profile[address]" class="form-control" placeholder="ex : Dự án An Lạc - Yên Phụ - Điện Biên - Ba Đình - Hà Nội - Việt Nam" value="" required>
								</div>
							</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-12">
							<b class="text-ED8B8B">CONTACT INFORMATION</b>
							<hr>
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Telephone</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[telephone]" class="form-control" placeholder="ex : 0966291026" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Email</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[email]" class="form-control" placeholder="ex : nguyenvana@gmail.com" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Facebook</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[facebook]" class="form-control" placeholder="ex : https://www.facebook.com/" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Skype</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[skype]" class="form-control" placeholder="ex : https://www.skype.com/" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Twitter</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[twitter]" class="form-control" placeholder="ex : https://twitter.com/" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Linkedin</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[linkedin]" class="form-control" placeholder="ex : https://www.linkedin.com/" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-3"><label>Slack</label></div>
						<div class="col-md-6">
							<input type="text" name="profile[slack]" class="form-control" placeholder="ex : https://www.slack.com/" value="">
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-12">
							<hr>
						</div>
					</div>
					<div class="col-md-12 pt-2 pb-2">
						<div class="col-md-12 text-center">
							<input type="submit" value="Submit" class="btn btn-info">
							<input type="reset" value="Reset" class="btn btn-danger">
							<hr>
						</div>
					</div>
				</form>								
			</div>
		</div>
	</section>
<!-- End Properties -->
@endif
<script type="text/javascript" src="{{ asset('js/site/profile/profile.js') }}"></script>