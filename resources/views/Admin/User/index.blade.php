@extends('layouts.admin')
@section('controller')
<div class="mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">@lang('ProfileUser.listadmin')</strong>
                        </div>
                        <div class="card-body table-responsive pl-0 pr-0">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered text-center pl-0 pr-0">
                            <thead>
                              <tr>
                                <th>@lang('ProfileUser.id')</th>
                                <th>@lang('ProfileUser.fullname')</th>
                                <th>@lang('ProfileUser.role')</th>
                                <th>@lang('ProfileUser.active')</th>
                                <th>@lang('ProfileUser.option')</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($response as $rows)
                              	<tr>
	                                <td>{{ $rows->id }}</td>
	                                <td>{{ $rows->profile_fullname }}</td>
	                                <td>{{ $rows->role }}</td>
	                            @if($rows->active == 'enable')
	                                <td><label class="badge badge-primary">@lang('ProfileUser.enable')</label></td>
	                            @else
	                                <td><label class="badge badge-dark">@lang('ProfileUser.disable')</label></td>
	                            @endif
	                            @if(($profile[2] == 'admin' || $profile[2] == 'administrator') && $rows->role != $profile[2])
	                                <td>
	                                  	<a href="{{ route('admin.user.profile',['id'=>$rows->id]) }}" class="btn btn-success">@lang('ProfileUser.profile')</a>
	                            	@if($rows->active == 'disable')
	                                  	<button type="button" data-href="{{ route('admin.user.enable',['id'=>$rows->id]) }}" class="btn btn-primary confirm" data-toggle="modal" data-target="#confirm">@lang('ProfileUser.enable')</button>
	                            	@else
	                            		   <button type="button" data-href="{{ route('admin.user.disable',['id'=>$rows->id]) }}" class="btn btn-dark confirm" data-toggle="modal" data-target="#confirm">@lang('ProfileUser.disable')</button>
	                            	@endif
	                                  	<button type="button" data-href="{{ route('admin.user.delete',['id'=>$rows->id]) }}" class="btn btn-danger confirm" data-toggle="modal" data-target="#confirm">@lang('ProfileUser.delete')</button>
	                                </td>
	                            @else
	                                <td>
	                                  	<a href="{{ route('admin.user.profile',['id'=>$rows->id]) }}" class="btn btn-success">@lang('ProfileUser.profile')</a>
	                                </td>
                               	@endif
                              	</tr>
                            @endforeach 
                            </tbody>
                          </table>
                        </div>
                    </div>
      </div>


    </div>
  </div>
</div>
@include('Modal.ConfirmModal')
<script type="text/javascript">
  $(document).ready(function(){
    // var route = $('.confirm').attr('href');
    // function load_ajax(){
    //   $.ajax({
    //       url : route,
    //       type : "get",
    //       dataType:"json",
    //       data : {
    //         "_token":"{{ csrf_token() }}"
    //       },
    //       success : function (result){
    //          console.log(result);
    //       }
    //   });
    // }

    $('.confirm').click(function(){
      var href = $(this).attr('data-href');
      document.getElementById('confirm-yes').href = href;
    });
});
</script>

@endsection