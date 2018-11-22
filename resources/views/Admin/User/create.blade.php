@extends('layouts.admin')
@section('controller')
	<div class="content mt-3">
    	<div class="animated fadeIn">
        	<div class="row">
        		<div class="col-lg-6 offset-md-3">
                    <div class="card">
                      <div class="card-header">Add new User</div>
                      <div class="card-body card-block">
                        <form action="{{ route('admin.user.regist') }}" method="post" >
                        	{{ csrf_field() }}
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
	                        <div class="form-group">
	                            <div class="input-group">
	                              	<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
	                              	<input type="email" id="email" name="email" placeholder="Email" class="form-control" required="required">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="input-group">
	                              	<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
	                              	<input type="password" id="password" name="password" placeholder="Password" class="form-control" required="required">
	                            </div>
	                        </div>
	                        <div class="form-actions form-group">
	                          	<button type="submit" class="btn btn-success btn-sm">Submit</button>
	                          	<input type="reset" class="btn btn-primary btn-sm" value="Reset">
	                          	<a href="{{ route('admin.user.list') }}" class="btn btn-danger btn-sm">Cancel</a>
	                        </div>
                        </form>
                      </div>
                    </div>
                </div>
        	</div>
    	</div>
	</div>
@endsection