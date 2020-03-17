@extends('layouts.app') 

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Login Form -->
    <div class="container space-2">
        <form class="js-validate w-md-75 w-lg-50 mx-md-auto" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <!-- Title -->
            <div class="mb-7">
                <h2 class="h3 text-trado1 font-weight-normal mb-0">Welcome <span
                        class="font-weight-semi-bold">back</span></h2>
                <p>Login to manage your account.</p>
            </div>
            <!-- End Title -->

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
                <label class="form-label" for="signinSrPassword">
                    <span class="d-flex justify-content-between align-items-center">
                        Password <!--<a class="link-muted text-trado1 text-capitalize font-weight-normal"
                            href="recover-account-simple.html">Forgot Password?</a>-->
                    </span>
                </label>
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

            <!-- Button -->
            <div class="row align-items-center mb-5">
                <div class="col-6">
                    <span class="small text-muted">Don't have an account?</span>
                    <a class="small text-trado1" href="/register">Signup</a>
                </div>

                <div class="col-6 text-right">
                    <button type="submit" class="btn btn-trado transition-3d-hover">Log In</button>
                </div>
            </div>
            <!-- End Button -->
        </form>
    </div>
    <!-- End Login Form -->
</main>
<!-- ========== END MAIN ========== -->
@endsection
