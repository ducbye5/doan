@if(!empty($data_project))
<option value="" selected>-- Project --</option>
@foreach($data_project as $project)
@php
	if(!empty($data_search_project) && $data_search_project == $project){
		$check = 'selected';
	}else{
		$check = '';
	}
@endphp
<option value="{{ $project }}" {{ $check }}>{{ $project }}</option>
@endforeach
@else
<option value="" selected>-- Project --</option>
@endif