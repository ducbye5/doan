<form method="post" action="{{ route('admin.user.changerole') }}">
@csrf
<div class="modal fade" id="changeRole">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@lang('Modal.changerole')</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@lang('Modal.email')</span>
              </div>
              <select class="form-control" name="email">
              <option value=""></option>
              @foreach($response['data'] as $rows)
              <option value="{{ $rows->email }}">{{ $rows->email }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@lang('Modal.role')</span>
              </div>
              <select class="form-control" name="role">
              <option value=""></option>
              @foreach($response['role'] as $rows)
              <option value="{{ $rows }}">{{ $rows }}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">@lang('Modal.change')</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Modal.cancel')</button>
      </div>
    </div>
  </div>
</div>
</form>