<div class="col-md-12 pt-2 pb-2">
	<div class="col-md-3"><label>Address<i class="text-red">*</i></label></div>
		<div class="col-md-6" id="select_address" >
			<div class="pb-2">
				<select class="form-control chosen-select" name="country" data-placeholder="" id="country">
					@include('Site.Include.SelectOption.Country.Country')
				</select>
				<i class="text-red">The field is required</i>
			</div>
			<div class="pb-2">
				<select class="form-control chosen-select" name="city" data-placeholder="" id="city">
					@include('Site.Include.SelectOption.City.VietNam')
				</select>
				<i class="text-red">The field is required</i>
			</div>
			<div class="pb-2">
				<select class="form-control chosen-select" name="district" data-placeholder="" id="district">
					@include('Site.Include.SelectOption.District.VietNam')
				</select>
				<i class="text-red">The field is required</i>
			</div>
			<div class="pb-2">
				<select class="form-control chosen-select" name="ward" data-placeholder="" id="ward">
					@include('Site.Include.SelectOption.Ward.VietNam')
				</select>
			</div>
			<div class="pb-2">
				<select class="form-control chosen-select" name="street" data-placeholder="" id="street">
					@include('Site.Include.SelectOption.Street.VietNam')
				</select>
			</div>
			<div class="pb-2">
				<select class="form-control chosen-select" name="project" data-placeholder="" id="project">
					@include('Site.Include.SelectOption.Project.VietNam')
				</select>
			</div>
			<div class="pb-2">
				<input type="text" id="address" name="address" class="form-control" placeholder="ex : Dự án An Lạc - Yên Phụ - Điện Biên - Ba Đình - Hà Nội - Việt Nam" value="" required>
			</div>
		</div>
</div>