@extends('layouts.app')
@section('content')

<!-- Content Section -->
<div class="bg-light">
    <div class="container space-2">
        <form id="changePasswordForm" class="js-validate" method="Post" action="https://tradoapp.herokuapp.com/password/email">
            {{ csrf_field() }}
                

            <!-- Input -->
            <div class="js-form-message mb-6">
                <label class="form-label">
                    E-Mail Address @if (session('status'))
                    <div class="alert alert-success status">
                        {{ session('status') }}
                    </div>
                @endif
                    <script>
                        $(function(){
                            function hide(){
                                $('div#status').hide();
                            }
                           setTimeout(hide, 5000); 
                        });
                    </script>
                </label>

                <div class="js-focus-state input-group u-form">
                    <input type="email" class="form-control u-form__input" name="email" required
                           placeholder="Enter your email address"
                           aria-label="Enter your email address"
                           data-msg="Please enter a valid email address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success" />
                    <div class="input-group-append u-form__append">
                      <button type="submit" class="btn btn-trado u-btn-wide--sm">Send Password Reset Link</button>
                    </div>
                                
                                
                  </div>
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>                                    
                  @endif
            </div>
            <!-- End Input -->
        </form>
    </div>

    <div class="container space-2"></div>
</div>
<!-- End Content Section -->
@endsection
