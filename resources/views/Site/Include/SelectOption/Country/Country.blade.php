@if(!empty($data_country))
<option value="" selected>-- Country --</option>
@foreach($data_country as $country)
@php
	if(!empty($data_search_country) && $data_search_country == $country){
		$check = 'selected';
	}else{
		$check = '';
	}
@endphp
<option value="{{ $country }}" {{ $check }}>{{ $country }}</option>
@endforeach
@else
<option value="" selected>-- Country --</option>
@endif
										
									