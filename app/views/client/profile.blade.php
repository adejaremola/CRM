@extends('layouts.front.master')

@section('body')

    <style>

        .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }

    </style>

    <div class="panel-body bio-graph-info">
        <div id="page-wrapper" style="margin-right:0px;">
             <div class="container-fluid" >
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    @if($user->id == Auth::user()->id )
                                    <h3 class="panel-title">{{$user->first_name . " " . $user->other_names  }}</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>


                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>User ID NO:</td>
                                                    <td>{{$user->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>email</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                @foreach($clients as $client)
                                                    @if($client->user_id == $client->id )
                                                <tr>
                                                    <td>OFFICE MOBILE NUMBER</td>
                                                    <td>{{ $client->phoneNumber_1 }}</td>
                                                </tr>

                                                <tr>
                                                    <td>MOBILE NUMBER</td>
                                                    <td>{{ $client->phoneNumber_2 }}</td>
                                                </tr>
                                                    @endif
                                                @endforeach

                                                @foreach($companies as $company)
                                                    @if($company->client_id == $client->id )
                                                <tr>
                                                    <td>COMPANY NAME</td>
                                                    <td>{{ $company->company_name }}</td>
                                                </tr>

                                                <tr>
                                                    <td>COMPANY DETAILS</td>
                                                    <td>{{ $company->company_details }}</td>
                                                </tr>
                                                <tr>
                                                    <td>COMPANY ADDRESS</td>
                                                    <td>{{ $company->company_address }}</td>
                                                </tr>
                                                    @endif
                                                @endforeach
                                                @endif

                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="{{url('meetingRequest/'.$user->id)}}" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="{{url('updateProfile/'.$user->id)}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"></i>Update</a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                                </div>

                            </div>
                        </div>
                    </div>

                                    <div>
                                        <h4>Thanks for being our customer</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
@stop