@extends('layouts.front.master')

@section('body')



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Meetings
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i> Meetings
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i>Add Meetings
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


            <!-- /.row -->


            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <h2>Request For a meeting</h2>
                    <div class="form-group">

                        <form class="form-register" method="post" action="{{URL::route('meetingPost')}}">

                            <span class="label label-success">meeting</span>

                            <div class="form-group input-group">
                                <label>
                                    <span>Name: </span>
                                <input class="form-control" type="text" value="{{$user->first_name}}" disabled>
                                </label>
                            </div>

                            <div class="form-group input-group">
                                <label>
                                    <span>User ID:</span>
                                <input class="form-control" type="text" value="{{$user->id}}" name="userId" disabled>
                                </label>
                            </div>

                            <div class="form-group input-group">

                                <textarea type="textarea" class="form-control" name="meeting_description" placeholder="details here" id="textarea" cols="70" rows="5"></textarea>
                            </div>

                            <div class="form-group input-group">
                                <button class="btn btn-large btn-primary" type="submit">Request</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <h4>Thanks for being our customer</h4>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



@stop