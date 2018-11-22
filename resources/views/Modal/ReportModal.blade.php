<!--Form login-->
    <div class="modal fade" id="report">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <a class="modal-title">@lang('ReportModal.report')</a>
              <a href="" class="close" data-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form method="post" action="" >
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('ReportModal.email')</label>
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <label class="form-control-label">@lang('ReportModal.contact')</label>
                  <textarea class="form-control" rows="5" placeholder="@lang('ReportModal.placeholder_contact')"></textarea>
                </div>
                <div class="form-group mt-3">
                  <input type="submit" value="@lang('ReportModal.submit')" class="btn btn-info">
                  <input type="button" value="@lang('ReportModal.close')" class="btn btn-danger" data-dismiss="modal">
                </div>
              </form>
            </div>

          </div>
        </div>
    </div>