@extends('layouts.admin')
@section('controller')
<div class="mt-3">
  <div class="animated fadeIn">
    <div class="row">
		<div class="col-md-2 text-center">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#changeRole">Change Role</button>  
		</div>
		@if($errors->any())
			<div class="col-md-8 col-sm-12">
		        <div class="alert  alert-danger alert-dismissible fade show mb-0" role="alert">
		            <span class="badge badge-pill badge-danger">@lang('validation.false')</span>@lang('validation.message_false')
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		            </button>
		        </div>
		    </div>
		@endif 
      	<div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">@lang('ProfileUser.role')</strong>
                        </div>
                        <div class="card-body table-responsive pl-0 pr-0">
                          <table id="bootstrap-data-table-role-user" class="table table-striped table-bordered text-center pl-0 pr-0">
                            <thead>
                              <tr>
                              	<th>@lang('ProfileUser.fullname')</th>
                                <th>@lang('ProfileUser.email')</th>
                                <th>@lang('ProfileUser.role')</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($response['data'] as $rows)
                              	<tr>
	                                <td>{{ $rows->profile_fullname }}</td>
	                                <td>{{ $rows->email }}</td>
	                                <td>{{ $rows->role }}</td>
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
@include('Modal.ChangeRoleModal')
@endsection