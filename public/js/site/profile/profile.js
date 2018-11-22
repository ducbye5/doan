$(document).ready(function(){
	var country = $('#profile_country');
	var city = $('#profile_city');
	var district = $('#profile_district');
	var ward = $('#profile_ward');
	var street = $('#profile_street');
	var project = $('#profile_project');
	var address = $('#profile_address');
	var country_text = '';
	var city_text = '';
	var district_text = '';
	var ward_text = '';
	var street_text = '';
	var project_text = '';

	function AddAddress(){
		$(country).change(function(){
			country_text = country.val();
		});
		$(city).change(function(){
			if(city.val() != ''){
				city_text = city.val() + " - ";
			}else{
				city_text = city.val();
			}
		});
		$(district).change(function(){
			if(district.val() != ''){
				district_text = district.val() + " - ";
			}else{
				district_text = district.val();
			}
		});
		$(ward).change(function(){
			if(ward.val() != ''){
				ward_text = ward.val() + " - ";
			}else{
				ward_text = ward.val();
			}
		});
		$(street).change(function(){
			if(street.val() != ''){
				street_text = street.val() + " - ";
			}else{
				street_text = street.val();
			}
		});
		$(project).change(function(){
			if(project.val() != ''){
				project_text = project.val() + " - ";
			}else{
				project_text = project.val();
			}
		});
		var address_val = project_text + street_text + ward_text + district_text + city_text + country_text;
		address.val(address_val);
		address.text(address_val);
	}
	$('#select_profile_address').click(AddAddress);
	AddAddress();
});