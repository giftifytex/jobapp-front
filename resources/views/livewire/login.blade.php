<div class="login-section">
    <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
    <div class="outer-box">
        <!-- Login Form -->
        <div class="login-form default-form">
            <div class="form-inner">
              <h3>Login to Jobapp</h3>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
              <!--Login Form-->
              <form method="post">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" placeholder="email" wire:model='email'>
                </div>
  
                <div class="form-group">
                  <label>Password</label>
                  <input id="password-field" type="password" value="" placeholder="Password" wire:model='password'>
                </div>
  
                <div class="form-group">
                  <div class="field-outer">
                    <div class="input-group checkboxes square">
                      <input type="checkbox" name="remember-me" value="" id="remember">
                      <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                    </div>
                    <a href="#" class="pwd">Forgot password?</a>
                  </div>
                </div>
  
                <div class="form-group">
                  <button class="theme-btn btn-style-one" type="submit" name="log-in" wire:click.prevent='login'>Log In</button>
                </div>
              </form>
  
              <div class="bottom-box">
                <div class="text">Don't have an account? <a href="register.blalde.php">Signup</a></div>
                <div class="divider"><span>or</span></div>
                <div class="btn-box row">
                  <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Login Form -->
        </div>
    </div>