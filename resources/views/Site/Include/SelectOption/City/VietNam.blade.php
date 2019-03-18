@if(!empty($data_city))
<option value="" selected="selected">-- Province/City --</option>
@foreach($data_city as $city)
@php
	if(!empty($data_search_city) && $data_search_city == $city){
		$check = 'selected';
	}else{
		$check = '';
	}
@endphp
<option value="{{ $city }}" {{ $check }}>{{ $city }}</option>
@endforeach
@else
<option value="" selected="selected">-- Province/City --</option>
@endif