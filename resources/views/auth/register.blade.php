@extends('layouts.app')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Login Form -->
    <div class="container space-2">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <!-- Title -->
            <div class="mb-7">
                <h1 class="h3 text-trado1 font-weight-normal mb-0">Welcome</h1>
                <p>Fill out the form to get started.</p>
            </div>
            <!-- End Title -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="form-label" for="signinSrUsername">Username</label>
                <input type="text" class="form-control" name="name" id="signinSrUsername" placeholder="Username"
                    aria-label="Username" required data-msg="Please enter your username"
                    data-error-class="u-has-error" data-success-class="u-has-success" value="{{ old('name') }}" />

                    @if ($errors->has('name'))
                        <span class="text-danger small">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <!-- End Form Group -->


            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="form-label" for="signinSrEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address"
                    aria-label="Email address" required data-msg="Please enter a valid email address." 
                    data-error-class="u-has-error" data-success-class="u-has-success" value="{{ old('email')}}" />

                    @if ($errors->has('email'))
                        <span class="text-danger small">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="form-label" for="signinSrPassword">Password</label>
                <input type="password" class="form-control" name="password" id="signinSrPassword"
                    placeholder="********" aria-label="********" required
                    data-msg="Your password is invalid. Please try again." data-error-class="u-has-error"
                    data-success-class="u-has-success" />

                    @if ($errors->has('password'))
                        <span class="text-danger small">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="form-label" for="signinSrConfirmPassword">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation" id="signinSrConfirmPassword"
                    placeholder="********" aria-label="********" required
                    data-msg="Password does not match the confirm password." data-error-class="u-has-error"
                    data-success-class="u-has-success" />
            </div>
            <!-- End Form Group -->

            <!-- Checkbox -->
            <div class="js-form-message mb-5">
                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                    <input type="checkbox" class="custom-control-input btn-trado" id="termsCheckbox"
                        name="termsCheckbox" required data-msg="Please accept our Terms and Conditions."
                        data-error-class="u-has-error" data-success-class="u-has-success" />
                    <label class="custom-control-label" for="termsCheckbox">
                        <small>
                            I agree to the
                            <a class="link-muted text-trado1" href="/terms">Terms and Conditions</a>
                        </small>
                    </label>
                </div>
            </div>
            <!-- End Checkbox -->

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-5 col-sm-6">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="small text-trado1" href="/login">Login</a>
                </div>

                <div class="col-7 col-sm-6 text-right">
                    <button type="submit" class="btn btn-trado transition-3d-hover">Get Started</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
</main>
<!-- ========== END MAIN ========== -->
@endsection
