<!--Form login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <a class="modal-title">@lang('LoginRegisterCustomerModal.login')</a>
              <a href="" class="close" data-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form method="post" action="{{ route('customer.login') }}" >
                {{ csrf_field() }}
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('LoginRegisterCustomerModal.email')</label>
                  <input type="email" name="email" class="form-control" placeholder="@lang('LoginRegisterCustomerModal.email')" required>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('LoginRegisterCustomerModal.password')</label>
                  <input type="password" name="password" class="form-control" placeholder="@lang('LoginRegisterCustomerModal.password')" required>
                </div>
                <div class="form-group mt-3">
                  <input type="submit" value="@lang('LoginRegisterCustomerModal.login')" class="btn btn-info">
                  <input type="button" value="@lang('LoginRegisterCustomerModal.register')" class="btn btn-success" data-toggle="modal" data-target="#register" data-dismiss="modal">
                  <input type="button" value="@lang('LoginRegisterCustomerModal.close')" class="btn btn-danger" data-dismiss="modal">
                </div>
              </form>
            </div>

          </div>
        </div>
    </div>
      <!--Form register-->
    <div class="modal fade" id="register">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <a class="modal-title">@lang('LoginRegisterCustomerModal.register')</a>
              <a href="" class="close" data-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form method="post" action="{{ route('customer.regist') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="form-control-label">@lang('LoginRegisterCustomerModal.fullname')</label>
                  <input type="text" name="fullname" class="form-control" placeholder="@lang('LoginRegisterCustomerModal.fullname')" required>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('LoginRegisterCustomerModal.email')</label>
                  <input type="email" name="email" class="form-control" placeholder="@lang('LoginRegisterCustomerModal.email')" required>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('LoginRegisterCustomerModal.password')</label>
                  <input type="password" name="password" class="form-control" placeholder="@lang('LoginRegisterCustomerModal.password')" required>
                </div>
                <div class="form-group mt-3">
                  <input type="submit" value="@lang('LoginRegisterCustomerModal.register')" class="btn btn-success">
                  <input type="button" value="@lang('LoginRegisterCustomerModal.close')" class="btn btn-danger" data-dismiss="modal">
                </div>
              </form>
            </div>

          </div>
        </div>
    </div>