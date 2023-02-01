<div>
  <h3 class="mb-3 font-weight-bold text-center">Forgot Password</h3>
                        {{-- <p class="text-center text-secondary mb-4">Log in to your account to continue</p> --}}

                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="text-secondary">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter Email">
                                 </div>
                              </div>

                           </div>
                           <button wire:click="forgot"  type="submit" class="btn btn-primary btn-block mt-2">Reset Password</button>
                           <div class="col-lg-12 mt-3">
                                <p class="mb-0 text-center">I remember <a href="{{route('auth.login')}}">Sign In</a></p>
                           </div>
                        </form>
</div>
