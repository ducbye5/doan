@if(!empty($data_district))
<option value="" selected="selected">-- District --</option>
@foreach($data_district as $district)
@php
	if(!empty($data_search_district) && $data_search_district == $district){
		$check = 'selected';
	}else{
		$check = '';
	}
@endphp
<option value="{{ $district }}" {{ $check }}>{{ $district }}</option>
@endforeach
@else
<option value="" selected="selected">-- District --</option>
@endif