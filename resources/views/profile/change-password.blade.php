
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <div class="modal-body" style="margin-left:7rem;">
                  <div class="row">
                      <!-- Modify Start -->
                      <div class="col-md-10 mb-3" >
                          <div class="card">
                                  <div class="card-header bg-custom_side text-white">
                                  <h6 class="text-uppercase text-sm">User Information</h6>
                                  </div>
                                  <div class="card-body">

                                      <div class="panel-body">
                                          @if (session('error'))
                                              <div class="alert alert-danger">
                                                  {{ session('error') }}
                                              </div>
                                          @endif
                                          @if (session('success'))
                                              <div class="alert alert-success">
                                                  {{ session('success') }}
                                              </div>
                                          @endif
                                          @if($errors)
                                              @foreach ($errors->all() as $error)
                                                  <div class="alert alert-danger">{{ $error }}</div>
                                              @endforeach
                                          @endif
                                          <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                                              {{ csrf_field() }}

                                              <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                  <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                                  <div class="col-md-12 mb-3">
                                                      <input id="current-password" type="password" class="form-control" name="current-password" required>

                                                      @if ($errors->has('current-password'))
                                                          <span class="help-block">
                                                              <strong>{{ $errors->first('current-password') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                  <label for="new-password" class="col-md-4 control-label">New Password</label>

                                                  <div class="col-md-12 mb-3">
                                                      <input id="new-password" type="password" class="form-control" name="new-password" required>

                                                      @if ($errors->has('new-password'))
                                                          <span class="help-block">
                                                              <strong>{{ $errors->first('new-password') }}</strong>
                                                          </span>
                                                      @endif
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                                  <div class="col-md-12 mb-3">
                                                      <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-12 col-md-offset-4 text-end">
                                                      {{-- <a href="/profile" class="btn btn-secondary">
                                                          Cancel
                                                      </a> --}}
                                                      <button type="submit" class="btn btn-primary">
                                                          Change Password
                                                      </button>
                                                  </div>

                                              </div>
                                          </form>
                                      </div>
                                    </div>
                          </div>
                        </div>



                      <!-- Modify End -->
                  </div>

                </div>
          </div>
      </div>
    </div>

