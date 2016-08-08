
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Form</title>


	<link rel="stylesheet" href="css/form-login.css">

</head>


	

    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="{{URL::route('PostLogin')}}">
             @if(Session::has('success'))
       <div class="alert alert-success"> {{Session::get('success') }}</div>
	    @elseif(Session::has('fail'))
	       <div class="alert alert-danger"> {{Session::get('fail') }}</div>
	    @endif


            <div class="title" style="color:darkslategrey; font-family: 'Franklin Gothic Demi Cond'; text-align: left"><i> <h1>Sci Accounting  </h1></i></div>


            <div class="form-log-in-with-email" style="margin-left: 6px;">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
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
                            <input type="password" name="password" id="password">
                        </label>
                        @if($errors->has('password'))
				     {{$errors->first('password')}}
				 @endif
                    </div>
                     <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" id="remember">
                        </label>
                    </div>

                    {{Form::token()}}

                    <div class="form-row">
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <a href="{{url('remind')}}" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="{{('Register')}}" class="form-create-an-account">Create an account &rarr;</a>

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

</html>
