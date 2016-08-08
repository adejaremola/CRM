

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>


    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/css/star-strength.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="path/to/js/star-strength.min.js" type="text/javascript"></script>
	<link  href="css/form-register.css" rel="stylesheet">


</head>

	

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="{{URL::route('PostRegister')}}">
        @if(Session::has('success'))
       <div class="alert alert-success"> {{Session::get('success') }}</div>
	    @elseif(Session::has('fail'))
	       <div class="alert alert-danger"> {{Session::get('fail') }}</div>
	    @endif

            <div class="title" style="color:darkslategrey; font-family: 'Franklin Gothic Demi Cond'; text-align: left"><i> <h1>Sci Accounting  </h1></i></div>

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row {{ ($errors->has('first_name')) ? ' has-error'  : '' }}" >
                        <label>
                            <span>First Name: </span>
                            <input type="text" name="first_name" id="first_name">
                        </label>
                         @if($errors->has('first_name'))
				     {{$errors->first('first_name')}}
				 @endif
                    </div>
                     <div class="form-row {{ ($errors->has('other_names')) ? ' has-error'  : '' }}">
                        <label>
                            <span>Other Names: </span>
                            <input type="text" name="other_names" id="other_names">
                        </label>
                         @if($errors->has('other_names'))
				     {{$errors->first('other_names')}}
				 @endif
                    </div>

                    <div class="form-row {{ ($errors->has('email')) ? ' has-error'  : '' }}">
                        <label>
                            <span>Email: </span>
                            <input type="email" name="email" id="email">
                        </label>
                         @if($errors->has('email'))
				     {{$errors->first('email')}}
				 @endif
                    </div>

                    <div class="form-row {{ ($errors->has('password')) ? ' has-error'  : '' }}">
                        <label>
                            <span>Password: </span>
                            <input  class="strength" type="password" name="password" id="password" >
                        </label>
                         @if($errors->has('password'))
				     {{$errors->first('password')}}
				 @endif
                    </div>


                     <div class="form-row {{ ($errors->has('confirm_password')) ? ' has-error'  : '' }}">
                        <label>
                            <span>Confirm Password: </span>
                            <input class="strength" type="password" name="password_confirmation" id="password_confirmation" >
                        </label>
                         @if($errors->has('confirm_password'))
				     {{$errors->first('confirm_password')}}
				 @endif
                    </div>

                     <div class="form-row ">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" id="remember">
                        </label>
                    </div>
                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                        </label>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                     {{Form::token()}}
			 

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

                <a href="{{('Login')}}" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>

            </div>

        </form>

    </div>

</body>
<footer>
<script>
    // initialize with defaults
    $("#password-id").strength();
    // with plugin options
    $("#password-id").strength({showMeter: true, toggleMask: false});
</script>
</footer>

</html>
