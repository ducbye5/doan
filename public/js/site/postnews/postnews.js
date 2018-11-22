$(function(){

	var message = {
			required: 'The field is required',
			number: 'The data type is number',
			string: 'The data type is string',
			positive_numbers : 'The data must be greater than 0',
			incorrect_data : 'The data is not correct'
		},
		submit = '#submit';
		var postnews_title = '#postnews_title',
			postnews_title_minlength = 10,
			postnews_title_maxlength = 99,
			postnews_title_message = 'The field is required. Min is '+ postnews_title_minlength+ ' charactors and max is '+ postnews_title_maxlength+' charactors';

		var postnews_address = '#postnews_address';


		var postnews_type = '#postnews_type',
			postnews_country = '#postnews_country',
			postnews_city = '#postnews_city',
			postnews_district = '#postnews_district';

		var postnews_acreage = '#postnews_acreage';

		var postnews_price = '#postnews_price';

		var postnews_unit = '#postnews_unit';

		var postnews_total_price = '#postnews_total_price';

		var postnews_description = '#postnews_description',
			postnews_description_minlength = 10,
			postnews_description_maxlength = 3000,
			postnews_description_message = 'The field is required. Min is '+ postnews_description_minlength+ ' charactors and max is '+ postnews_description_maxlength+' charactors';

		var postnews_facade = '#postnews_facade';

		var postnews_numberfloors = '#postnews_numberfloors';

		var postnews_numberbedrooms = '#postnews_numberbedrooms';

		var postnews_numbertoilets = '#postnews_numbertoilets';	

		var postnews_picture = '#postnews_picture';

		var postnews_contact_mobilephone = '#postnews_contact_mobilephone',
			postnews_contact_mobilephone_minlength = 10,
			postnews_contact_mobilephone_maxlength = 12,
			postnews_contact_mobilephone_message = 'The field is required. Min is '+ postnews_contact_mobilephone_minlength+ ' charactors and max is '+ postnews_contact_mobilephone_maxlength+' charactors';

		var postnews_contact_email = '#postnews_contact_email';	

		var postnews_contact_name = '#postnews_contact_name';

		var postnews_typeofcost = '#postnews_typeofcost';

		var postnews_price_per_day = '#postnews_price_per_day';

		var postnews_time_start = '#postnews_time_start';

		var postnews_time_finish = '#postnews_time_finish';

		var postnews_total_days = '#postnews_total_days';

		var postnews_post_fee = '#postnews_post_fee';

		var postnews_vat = '#postnews_vat';

		var postnews_total_cost = '#postnews_total_cost';

		

	function success(param, check = false){
		$(param+'_error').addClass('hide');
		if(check){
			$(param).removeClass('isValid');
			$(param).removeClass('success');
		}else{
			$(param).removeClass('isValid');
			$(param).addClass('success');
		}
	}
	function error(param){
		$(param+'_error').removeClass('hide');
		$(param).removeClass('success');
		$(param).addClass('isValid');		
	}
	function message_error(param,message){
		$(param+'_error').text(message);
	}
	function check_number(param){
			var regex = /[(\-+)(\++)\D+]/,
				input_value = $(param).val();
			if(regex.test(input_value)){
				$(param).val('');
			}else{
				success(param);
			}
	}
	function check_integer(param){
			var regex = /[0-9]/,
				input_value = $(param).val();
			if(regex.test(input_value)){
				$(param).val('');
			}else{
				success(param);
			}
	}
	function check_special_charactor(param){
		var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=",
			string = $(param).val(),
			message = 'This data have special charactor',
			status = true;  
		for(i = 0; i < specialChars.length;i++){ 
		    if(string.indexOf(specialChars[i]) > -1){ 
		      	status =  false ;
		     } 
		} 
		if(status){
			success(param);
		}else{
			message_error(param,message);
			error(param);
		}
		return status;
	}

	function check_positive_decimals(param){
			var text = $(param).val();
			if(text == ''){
				$(param).val('');
			}else{
				success(param);
			}
	}

	function valid_input_text(param,min = 1,max = 150,messages = message.required){
			var minlength = min,
			 	maxlength = max,
			 	text_error = messages,
			 	input_value = $(param).val(),
			 	input_length = input_value.length;
			if((minlength > input_length) || (maxlength < input_length)){
				message_error(param,text_error);
				error(param);
				return false;
			}
			if((minlength <= input_length)&&(input_length <= maxlength)){
				success(param);
				return true;
			}
	}

	function valid_input_number(param,min = 1,max = 150,messages = message.required){
			var minlength = min,
			 	maxlength = max,
			 	text_error = messages,
			 	input_value = $(param).val(),
			 	input_length = input_value.length;
			if(minlength > input_length){
				check_positive_decimals(param);
				message_error(param,messages);
				error(param);
				return false;
			}
			if(minlength <= input_length){
				check_positive_decimals(param);
				return true;
			}
	}
	function valid_input_select(param){
			var input_value = $(param).val();
			if(input_value != ''){
				$(param+'_error').addClass('hide');
				$(param+'_chosen a').removeAttr("style");
				$(param+'_chosen a').css({'border-color':'green'});
				return true;
			}
			if(input_value == ''){
				$(param+'_error').removeClass('hide');
				$(param+'_error').text(message.required);
				$(param+'_chosen a').removeAttr("style");
				$(param+'_chosen a').css({'border-color':'red'});
				return false;
			}
	}
	function address(){
		var country_postnews = $('#postnews_country'),
		 	city_postnews = $('#postnews_city'),
		 	district_postnews = $('#postnews_district'),
		 	ward_postnews = $('#postnews_ward'),
		 	street_postnews = $('#postnews_street'),
		 	project_postnews = $('#postnews_project'),
		 	address_postnews = $('#postnews_address'),
		 	country_postnews_text = '',
		 	city_postnews_text = '',
		 	district_postnews_text = '',
		 	ward_postnews_text = '',
		 	street_postnews_text = '',
		 	project_postnews_text = '';

			

		function AddPropertiesAddress(){
			$(country_postnews).change(function(){
				country_postnews_text = country_postnews.val();
			});
			$(city_postnews).change(function(){
				if(city_postnews.val() != ''){
					city_postnews_text = city_postnews.val() + " - ";
				}else{
					city_postnews_text = city_postnews.val();
				}
			});
			$(district_postnews).change(function(){
				if(district_postnews.val() != ''){
					district_postnews_text = district_postnews.val() + " - ";
				}else{
					district_postnews_text = district_postnews.val();
				}
			});
			$(ward_postnews).change(function(){
				if(ward_postnews.val() != ''){
					ward_postnews_text = ward_postnews.val() + " - ";
				}else{
					ward_postnews_text = ward_postnews.val();
				}
			});
			$(street_postnews).change(function(){
				if(street_postnews.val() != ''){
					street_postnews_text = street_postnews.val() + " - ";
				}else{
					street_postnews_text = street_postnews.val();
				}
			});
			$(project_postnews).change(function(){
				if(project_postnews.val() != ''){
					project_postnews_text = project_postnews.val() + " - ";
				}else{
					project_postnews_text = project_postnews.val();
				}
			});
			var address_message = {
					country : 'The field country , city and district is required',
					city : 'The field city and district is required',
					district : 'The field district is required',
				},
				address_val = '',
				address_param = ('#postnews_address');
			if(country_postnews_text == ''){
				error(address_param);
				message_error(address_param,address_message.country);
			}else if(city_postnews_text == ''){
				address_val = country_postnews_text;
				error(address_param);
				message_error(address_param,address_message.city);
			}else if(district_postnews_text == ''){
				address_val = city_postnews_text + country_postnews_text;
				error(address_param);
				message_error(address_param,address_message.district);
			}else{
				address_val = project_postnews_text + street_postnews_text + ward_postnews_text + district_postnews_text + city_postnews_text + country_postnews_text;
				success(address_param,false);
			}
			address_postnews.val(address_val);
			address_postnews.text(address_val);
		}
		$('#postnews_place').click(function(){
			AddPropertiesAddress();
		});
	}

	function news_type(){
		var val =  $(postnews_type).val();
		if((val == 'Rental') || (val == 'Sell')){
			$('#OthersInformation').removeClass('hide');
		}else if((val == 'Rent') || (val == 'Purchase')){
			$('#OthersInformation').addClass('hide');
		}else{

		}
	}

	function properties_price(){
			var unit = $(postnews_unit).val(),
				acreage = $(postnews_acreage).val(),
				price = $(postnews_price).val(),
				total_price = 0;
			if(acreage != ''){
				acreage = parseFloat($(postnews_acreage).val());
			}else{
				acreage = 0;
			}
			if(price != ''){
				price = parseFloat($(postnews_price).val());
			}else{
				price = 0;
			}
			if(unit === 'Dollar'){
				if(isNaN(price) == false){
					total_price = price.toFixed(2);
					$(postnews_price).removeAttr('readonly','readonly');
				}
			}else if(unit === 'Dollar/m²'){
				if((isNaN(price) && isNaN(acreage)) == false){
					total_price = (price * acreage).toFixed(2); 
					$(postnews_price).removeAttr('readonly','readonly');
				}else{
					total_price = 0;
				}
			}else{
				total_price = 'Negotiate';
				$(postnews_price).val(0);
				success(postnews_price,true);
				$(postnews_price).attr('readonly','readonly');
			}
			$(postnews_total_price).text(total_price);
		}

		function limit_file(param,file_length,limit){
			var max_file = limit + 1;
			var file_length = file_length;
			var check_limit = true;
			if(max_file >= file_length){
				check_limit = true;
				success(param);
			}else{
				check_limit = false;
				message = 'Max file is '+max_file;
				error(param);
				message_error(param,message);
			}
			return check_limit;
		}
	
		function phonenumber(param){
			var regex = /[(\-+)(\++)\D+]/,
				input_value = $(param).val();
			if(regex.test(input_value)){
				$(param).val('');
			}
		}

		function check_email(param){
			var regex = /[A-Za-z0-9\._%+!$&*=^|~#%'`?{}/\-]+@([a-z0-9\-]+\.){1,}([a-z]{2,16})/,
				input_value = $(param).val(),
				message = 'Email is not correct format',
				status = true;
			if(input_value != ''){
				if(regex.test(input_value)){
					success(param);
				}else{
					status = false;
					error(param);
					message_error(param,message);
				}
			}else{
				success(param);
			}
			return status;
		}

		function total_cost(){
			var postnews_type_val = $(postnews_type).val(),
				;

			var sales = 0;

			if((postnews_type_val == 'Rental') || (postnews_type_val == 'Sell')){
				sales = 0;
				if(){

				}
			}else if((postnews_type_val == 'Rent') || (postnews_type_val == 'Purchase')){

			}
		}

	function validation(){


		$(postnews_title).keyup(function(){
			valid_input_text(postnews_title,postnews_title_minlength,postnews_title_maxlength,postnews_title_message);
		});
		$(postnews_title).click(function(){
			valid_input_text(postnews_title,postnews_title_minlength,postnews_title_maxlength,postnews_title_message);
		});

		$(postnews_address).keyup(function(){
			valid_input_text(postnews_address);
		});
		$(postnews_address).click(function(){
			valid_input_text(postnews_address);
		});

		$(postnews_acreage).keyup(function(){
			valid_input_number(postnews_acreage);
			properties_price();
		});
		$(postnews_acreage).click(function(){
			valid_input_number(postnews_acreage);
		});

		$(postnews_price).keyup(function(){
			valid_input_number(postnews_price);
			properties_price();
		});
		$(postnews_price).click(function(){
			valid_input_number(postnews_price);
		});

		$(postnews_unit).change(function(){
			properties_price();
		});

		$(postnews_description).keyup(function(){
			valid_input_text(postnews_description,postnews_description_minlength,postnews_description_maxlength,postnews_description_message);
		});
		$(postnews_description).click(function(){
			valid_input_text(postnews_description,postnews_description_minlength,postnews_description_maxlength,postnews_description_message);
		});

		$(postnews_facade).keyup(function(){
			check_positive_decimals(postnews_facade);
		});

		$(postnews_numberfloors).keyup(function(){
			check_number(postnews_numberfloors);
		});

		$(postnews_numberbedrooms).keyup(function(){
			check_number(postnews_numberbedrooms);
		});

		$(postnews_numbertoilets).keyup(function(){
			check_number(postnews_numbertoilets);
		});
		$(postnews_picture).click(function(e){
			$('.remove_picture').parents('.animation').remove();
		});
		$(postnews_picture).change(function(e) {
			var limit = 5,count = 0;
			var file_length = e.originalEvent.srcElement.files.length;
			var check_limit = limit_file(postnews_picture,file_length,limit);
			console.log($(postnews_picture));
			if(check_limit){ 
			    for (var i = 0; i < file_length; i++) { 
				    var file = e.originalEvent.srcElement.files[i]; 
				    var reader = new FileReader();
			    	if (file) {
					    reader.readAsDataURL(file);
					}
				   	reader.onload = function(e) {  
				      	var url = e.target.result;
				     	var html = "<div class='col-md-3 animation'><div class='pgl-property featured-item'><div class='property-thumb-info'><div class='property-thumb-info-image'><img alt='' class='img-responsive' src="+url+"><a href='javascript:void(0)' style='position: absolute; top: 0;right: 0;z-index:999' class='fa fa-close remove_picture'></a></div></div></div></div>";
				     	if(count <= limit){
				     		count++;
				     		$(".import_picture").append(html);
				     	}
				    } 
			    }
			    var obj = {};
				var array = Array.from(e.originalEvent.srcElement.files);
				array.splice(0,1);
				var j = 0;
				for(var i =0 ; i< array.length;i++){
					obj[j] = array[i];
					e.originalEvent.srcElement.files[j] = array[i];
					j++;
				}
				//e.originalEvent.srcElement.files = obj;
				//console.log(obj);
				//console.log(array);
				//console.log(e.originalEvent.srcElement.files);
			    $(document).on('click', '.remove_picture', function(a){ 
					a.preventDefault();
					count--;
					$(this).parents('.animation').remove();
				}); 
			}
		});
		$(postnews_contact_mobilephone).keyup(function(){
			valid_input_text(postnews_contact_mobilephone,postnews_contact_mobilephone_minlength,postnews_contact_mobilephone_maxlength,postnews_contact_mobilephone_message);
			phonenumber(postnews_contact_mobilephone);
		});
		$(postnews_contact_mobilephone).click(function(){
			valid_input_text(postnews_contact_mobilephone,postnews_contact_mobilephone_minlength,postnews_contact_mobilephone_maxlength,postnews_contact_mobilephone_message);
		});
		$(postnews_contact_email).blur(function(){
			check_email(postnews_contact_email);
		});
		$(postnews_contact_name).keyup(function(){
			check_integer(postnews_contact_name);
			check_special_charactor(postnews_contact_name);
		});

		$(postnews_type).change(function(){
			valid_input_select(postnews_type);
			news_type();
		});
		$(postnews_country).change(function(){
			valid_input_select(postnews_country);
		});
		$(postnews_city).change(function(){
			valid_input_select(postnews_city);
		});
		$(postnews_district).change(function(){
			valid_input_select(postnews_district);
		});
	}
	address();
	validation();
	
	

	$(submit).click(function(){
		valid_input_text(postnews_title,postnews_title_minlength,postnews_title_maxlength,postnews_title_message);
		valid_input_select(postnews_type);
		valid_input_select(postnews_country);
		valid_input_select(postnews_city);
		valid_input_select(postnews_district);
		valid_input_text(postnews_description,postnews_description_minlength,postnews_description_maxlength,postnews_description_message);
		valid_input_text(postnews_contact_mobilephone,postnews_contact_mobilephone_minlength,postnews_contact_mobilephone_maxlength,postnews_contact_mobilephone_message);
	});
	function submit_form(){
		var arr_result = [
			valid_input_text(postnews_title,postnews_title_minlength,postnews_title_maxlength,postnews_title_message),
			valid_input_select(postnews_type),
			valid_input_select(postnews_country),
			valid_input_select(postnews_city),
			valid_input_select(postnews_district),
			valid_input_text(postnews_description,postnews_description_minlength,postnews_description_maxlength,postnews_description_message),
			valid_input_text(postnews_contact_mobilephone,postnews_contact_mobilephone_minlength,postnews_contact_mobilephone_maxlength,postnews_contact_mobilephone_message),
			check_email(postnews_contact_email),
			check_integer(postnews_contact_name),
			check_special_charactor(postnews_contact_name)
		],
			status = true;
		length = arr_result.length;
		for(var i = 0;i <= length;i++){
			if(arr_result[i] == false){
				status =  false;
				break;
			}
		}
		return status;
	}
	$('#postnews').submit(function(e) {
		if(!submit_form()){
			e.preventDefault();
		}			
	});
});