<!DOCTYPE html>


<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login | Scroll 1.0</title>

    
    <meta name="description" content="" />
    <meta name="keywords" content="">
  

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/materialize-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/fonts/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/fonts/fontawesome.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/css/rtl/core.css')}}"  />
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/css/rtl/theme-default.css')}}"  />
    <link rel="stylesheet" href="{{ asset('html/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{ asset('html/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
<link rel="stylesheet" href="{{ asset('html/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="{{ asset('html/assets/vendor/css/pages/page-auth.css')}}">
    <!-- Helpers -->
    <script src="{{ asset('html/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  
</head>

<body>


  
  <!-- Content -->

<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="index.html" class="auth-cover-brand d-flex align-items-center gap-2">
    <span class="app-brand-logo demo">
<span style="color:var(--bs-primary);">
  <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
   
  </svg>
</span>
</span>
    <span class="app-brand-text demo text-heading fw-bold">Materialize</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Section -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
      <img src="{{ asset('html/assets/img/illustrations/auth-login-illustration-light.png')}}" class="auth-cover-illustration w-100" alt="auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.html" />
      <img src="{{ asset('html/assets/img/illustrations/auth-cover-login-mask-light.png')}}" class="authentication-image" alt="mask" data-app-light-img="illustrations/auth-cover-login-mask-light.png" data-app-dark-img="illustrations/auth-cover-login-mask-dark.html" />
    </div>
    <!-- /Left Section -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
      <div class="w-px-400 mx-auto pt-5 pt-lg-0">
        <h4 class="mb-2 fw-semibold">Welcome to Scroll 1.0</h4>
        <p class="mb-4">Please sign-in to your account and start your adventure</p>

        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating form-floating-outline mb-3">
            <input type="text"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
             placeholder="Enter your email" autofocus>
             @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
              @enderror
            <label for="email">Email or Username</label>
          </div>
          <div class="mb-3">
            <div class="form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <label for="password">Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
              </div>
            </div>
          </div>
          <div class="mb-3 d-flex justify-content-between">
            <div class="form-check">
              <input class="form-check-input" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
               @if (Route::has('password.request'))
                <a class="float-end mb-1" href="{{ route('password.request') }}">
                    <span>Forgot Password?</span>
                </a>
                @endif      
          </div>
          <button class="btn btn-primary d-grid w-100">
            Sign in
          </button>
        </form>

        <p class="text-center mt-2">
          <span>New on our platform?</span>
          <a href="auth-register-cover.html">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-4">
          <div class="divider-text">or</div>
        </div>

        
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->

  

  

  <!-- Core JS -->
  <!-- build:js asset/vendor/js/core.js -->
  <script src="{{ asset('html/assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
  
  <script src="{{ asset('html/assets/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/libs/i18n/i18n.js')}}"></script>
  <script src="{{ asset('html/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
  
  <script src="{{ asset('html/assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('html/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{ asset('html/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{ asset('html/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

  <!-- Main JS -->
  <script src="{{ asset('html/assets/js/main.js')}}"></script>

  <!-- Page JS -->
  <script src="{{ asset('html/assets/js/pages-auth.js')}}"></script>
  

  
  
</body>

</html>