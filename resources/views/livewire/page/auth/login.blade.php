<div>
    <h3 class="mb-3 font-weight-bold text-center">Sign In</h3>
                        <p class="text-center text-secondary mb-4">Log in to your account to continue</p>

                        {{-- <div class="mb-5">
                            <p class="line-around text-secondary mb-0"><span class="line-around-1">or login with email</span></p>
                        </div> --}}
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="text-secondary">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter Email">
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-2">
                                 <div class="form-group">
                                     <div class="d-flex justify-content-between align-items-center">
                                         <label class="text-secondary">Password</label>
                                         <label><a href="{{route('auth.forgot')}}">Forgot Password?</a></label>
                                     </div>
                                    <input class="form-control" type="password" placeholder="Enter Password">
                                 </div>
                              </div>
                           </div>
                           <button wire:click="login" type="submit" class="btn btn-primary btn-block mt-2">Log In</button>
                           <div class="col-lg-12 mt-3">
                                <p class="mb-0 text-center">Don't have an account? <a href="{{route('auth.register')}}">Sign Up</a></p>
                           </div>
                        </form>
</div>
