 <!-- Info Section -->
 <div class="login-section">
    <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
    <div class="outer-box">
      <!-- Login Form -->
      <div class="login-form default-form">
        <div class="form-inner">
          <h3>Create a Free Superio Account</h3>

          <!--Login Form-->
          <form method="post">
            <div class="form-group">
              <div class="btn-box row">
                <div class="col-lg-6 col-md-12">
                  <a href="#" class="theme-btn btn-style-seven"><i class="la la-user"></i> Candidate </a>
                </div>
                <div class="col-lg-6 col-md-12">
                  <a href="#" class="theme-btn btn-style-four"><i class="la la-briefcase"></i> Employer </a>
                </div>
              </div>
            </div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-red">*{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group">
                <label>Name</label>
                <input type="email" wire:model="name" placeholder="Name" required>
              </div>

            <div class="form-group">
              <label>Email Address</label>
              <input type="email" wire:model="email" placeholder="Email" required>
            </div>

            <div class="form-group">
              <label>Password</label>
              <input id="password-field" type="password" wire:model="password" value="" placeholder="Password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input id="password-field" type="password" wire:model="password_confirmation" value="" placeholder="Retype Password">
              </div>

            <div class="form-group">
              <button class="theme-btn btn-style-one " name="Register" wire:click.prevent='register'>Register</button>
            </div>
          </form>

          <div class="bottom-box">
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
  <!-- End Info Section -->