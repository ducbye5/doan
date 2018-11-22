@extends('layouts.admin')
@section('controller')
<div class="col-md-12">
	@if($profile[2] == 'administrator' ||  $response[2]['id'] ==$profile[1])
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateUser">@lang('ProfileUser.edit')</button>
	@endif
	<hr>
</div>
@if($errors->any())
	<div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-danger">@lang('validation.false')</span>@lang('validation.message_false')
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
@if($errors->any())
	{{ $errors }}
@endif                           
<div class="col-md-12">
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.fullname')</b></div>
		<div class="col-md-8">
		@if($response[0]['profile_fullname'] != '')
			<i>{{ $response[0]['profile_fullname'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.avatar')</b></div>
		<div class="col-md-8">
			<img src="{{ asset('upload/image/user/'.$response[0]['profile_avatar']) }}" height="100" width="100">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.sex')</b></div>
		<div class="col-md-8">
			<input type="radio" name="sex" {{ ($response[0]['profile_sex']=='man')?'checked':'' }} value="man"><i>@lang('ProfileUser.man')</i>
			<input type="radio" name="sex" {{ ($response[0]['profile_sex']=='woman')?'checked':'' }} value="woman"><i>@lang('ProfileUser.woman')</i>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.birthday')</b></div>
		<div class="col-md-8">
		@if($response[0]['profile_birthday'] != '')
			<i>{{ $response[0]['profile_birthday'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.address')</b></div>
		<div class="col-md-8">
		@if($response[0]['profile_address'] != '')
			<i>{{ $response[0]['profile_address'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.telephone')</b></div>
		<div class="col-md-8">
		@if($response[0]['profile_telephone'] != '')
			<i>{{ $response[0]['profile_telephone'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.email')</b></div>
		<div class="col-md-8">
		@if($response[2]['email'] != '')
			<i>{{ $response[2]['email'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.role')</b></div>
		<div class="col-md-8">
		@if($response[2]['role'] != '')
			<i>{{ $response[2]['role'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.description')</b></div>
		<div class="col-md-8">
		@if($response[0]['profile_description'] != '')
			<i>{{ $response[0]['profile_description'] }}</i>
		@else
			<b>@lang('ProfileUser.noinformation')</b>
		@endif
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"><b>@lang('ProfileUser.sociallinks')</b></div>
		<div class="col-md-4">
			<div class="row">
				@if($response[1]['facebook'] != '')
				<div class="col"><a href="{{ $response[1]['facebook'] }}" target="_blank" title="@lang('ProfileUser.facebook')"><i class="fa fa-facebook-square"></i></a></div>
				@endif
				@if($response[1]['twitter'] != '')
				<div class="col"><a href="{{ $response[1]['twitter'] }}" target="_blank" title="@lang('ProfileUser.twitter')"><i class="fa fa-twitter-square"></i></a></div>
				@endif
				@if($response[1]['linkedin'] != '')
				<div class="col"><a href="{{ $response[1]['linkedin'] }}" target="_blank" title="@lang('ProfileUser.linkedin')"><i class="fa fa-linkedin-square"></i></a></div>
				@endif
				@if($response[1]['pinterest'] != '')
				<div class="col"><a href="{{ $response[1]['pinterest'] }}" target="_blank" title="@lang('ProfileUser.pinterest')"><i class="fa fa-pinterest-square"></i></a></div>
				@endif
				@if($response[1]['skype'] != '')
				<div class="col"><a href="{{ $response[1]['skype'] }}" target="_blank" title="@lang('ProfileUser.skype')"><i class="fa fa-skype"></i></a></div>
				@endif
			</div>
		</div>
	</div>
	<hr>
</div>
@include('Modal.UpdateUserModal')
@endsection