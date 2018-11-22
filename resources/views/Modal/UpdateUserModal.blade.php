

<div class="modal fade" id="updateUser">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">@lang('Modal.edit')</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form method="post" action="{{ route('admin.user.edit',['id'=>$response[2]['id']]) }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="form-control-label">@lang('Modal.fullname')</label>
                  <input type="text" name="fullname" class="form-control" placeholder="Fullname"  value="{{ $response[0]['profile_fullname'] }}">
                </div>
                <div class="form-group">
                  <img src="{{ asset('upload/image/user/'.$response[0]['profile_avatar']) }}" width="50" height="50">
                  <input type="file" name='avatar'>
                </div>
                <div class="form-group mt-3">
                  <input type="radio" name="sex" value="man" {{ ($response[0]['profile_sex']=='man')?'checked':'' }}><i>@lang('Modal.man')</i>
                  <input type="radio" name="sex" value="woman" {{ ($response[0]['profile_sex']=='woman')?'checked':'' }}><i>@lang('Modal.woman')</i>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.birthday')</label>
                  <input type="date" name="birthday" class="form-control" value="{{ $response[0]['profile_birthday'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.address')</label>
                  <input type="text" name="address" class="form-control" value="{{ $response[0]['profile_address'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.telephone')</label>
                  <input type="number" name="telephone" class="form-control" value="{{ $response[0]['profile_telephone'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.description')</label>
                  <textarea name="description" class="form-control" rows="5">{{ $response[0]['profile_description'] }}</textarea>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.facebook')</label>
                  <input type="text" name="facebook" class="form-control" value="{{ $response[1]['facebook'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.twitter')</label>
                  <input type="text" name="twitter" class="form-control" value="{{ $response[1]['twitter'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.linkedin')</label>
                  <input type="text" name="linkedin" class="form-control" value="{{ $response[1]['linkedin'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.pinterest')</label>
                  <input type="text" name="pinterest" class="form-control" value="{{ $response[1]['pinterest'] }}">
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('Modal.skype')</label>
                  <input type="text" name="skype" class="form-control" value="{{ $response[1]['skype'] }}">
                </div>
                <div class="form-group mt-3 text-center">
                  <input type="submit" value="@lang('Modal.edit')" class="btn btn-primary">
                  <input type="button" value="Close" class="btn btn-danger" data-dismiss="modal">
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

