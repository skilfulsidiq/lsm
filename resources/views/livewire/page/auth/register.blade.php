<div>
    <h3 class="mb-3 font-weight-bold text-center">Sign Up</h3>
                        <p class="text-center text-secondary mb-4">Create An Account</p>
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
                                    <label class="text-secondary">Password</label>
                                    <input class="form-control" type="password" placeholder="Enter Password">
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-2">
                                    <div class="form-check form-check-inline">
                                       <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                          <input type="checkbox" class="custom-control-input m-0" id="inlineCheckbox1">
                                          <label class="custom-control-label pl-2" for="inlineCheckbox1">I agree to the <a href="terms-of-service.html">Terms of Service </a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <button wire:click="register"  type="submit" class="btn btn-primary btn-block mt-2">Create Account</button>
                           <div class="col-lg-12 mt-3">
                                <p class="mb-0 text-center">Do you have an account? <a href="{{route('auth.login')}}">Sign In</a></p>
                           </div>
                        </form>
</div>
