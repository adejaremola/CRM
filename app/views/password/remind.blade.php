
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forgot Password</title>


    <link rel="stylesheet" href="css/form-login.css">

</head>




<div class="main-content">


    <div class="container" style="margin-top: 50px;margin-left: 150px;padding: 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">


                    <div class="form-log-in-with-email">

                        <div class="form-white-background">

                            <div class="form-title-row">
                                <h3>Password Update</h3>
                                <h3>Please enter a new password to log in to your account</h3>
                            </div>

                    <form action="{{action('postRemind')}}" method="Post">


                    @if(isset($message))
                        <div class="alert alert-dismissible alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span><span class="sr-only">Close</span></button>
                            {{$message}}
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email"></label>
                            <div class="col-md-9 form-group">
                                <input autocomplete="off" type="email" name="email" class="required form-control" placeholder="Email">
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="col-md-12 form-group">

                            <div class="pull-right">
                                <button class="btn btn-primary" style="width: 100%;" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

