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

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>


                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr> @if (isset($user))
                                                    <td>User ID :</td>
                                                    <td>{{$user->id}}</td>
                                                        {{ Session::put('user',$user->id)}}
                                                </tr>
                                                <tr>
                                                    <td>First Name</td>
                                                    <td>{{$user->first_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Names</td>
                                                    <td>{{$user->other_names}}</td>
                                                </tr>
                                                <tr>
                                                    <td>email</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                @endif
                                                    @if (isset($clients))
                                                <tr>
                                                    <td>OFFICE MOBILE NUMBER</td>
                                                    <td>{{ $clients->phoneNumber_1 }}</td>
                                                </tr>

                                                <tr>
                                                    <td>MOBILE NUMBER</td>
                                                    <td>{{ $clients->phoneNumber_2 }}</td>
                                                </tr>
                                                    @endif
                                                @if (isset($message))

                                                    <tr>

                                                        <td>{{ $message }}</td>
                                                    </tr>
                                                @endif



                                                @if (isset($companies))
                                                <tr>
                                                    <td>COMPANY NAME</td>
                                                    <td>{{ $companies->company_name }}</td>
                                                </tr>

                                                <tr>
                                                    <td>COMPANY DETAILS</td>
                                                    <td>{{ $companies->company_details }}</td>
                                                </tr>
                                                <tr>
                                                    <td>COMPANY ADDRESS</td>
                                                    <td>{{ $companies->company_address }}</td>
                                                </tr>
                                                    @endif



                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                                    <?php

                                    $user=Session::get('user');
                                    ?>
                                    @if(isset($user) && isset($clients)&&isset($companies))
                                    @endif

                                       </div>

                            </div>
                            {{link_to_route('updateProfile','Update',array($user),array('class'=>'btn btn-success'))}}
                        </div>
                    </div>

                 <div>
                     <h4>Thanks for being our customer</h4>
                 </div>
             </div>
        </div>
    </div>
@stop