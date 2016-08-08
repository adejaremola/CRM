
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset Password</title>


    <link rel="stylesheet" href="css/form-login.css">

</head>




<div class="main-content">


    <style>
        header#header{
            display: none;
        }
        footer{
            text-align: center;
        }
    </style>
    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Enter your email below to reset your password</h3>
                    </div>
                    {{ Form::open(array('route' => 'password.getReset', 'class' =>'from-horizontal')) }}
                    <form action="{{action('RemindersController@postReset') }}" method="Post">
                    @if(isset($message))
                        <div class="alert alert-dismissible alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span><span class="sr-only">Close</span></button>
                            {{$message}}
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Email</label>
                            <div class="col-md-9">
                                <input autocomplete="off" type="email" name="email" class="required form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix"></div>
                        <div class="col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit">Reset Password</button>
                            <div style="line-height:3em">
                                <span>Not yet registered? <a href="{{ url('Register') }}" title="Register">Register Now</a></span>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
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
