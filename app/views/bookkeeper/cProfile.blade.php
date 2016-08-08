@extends('layouts.front.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                        </div>




                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped"   style="width:1000px">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>FIRSTNAME</th>
                                        <th>OTHERNAMES</th>
                                        <th>Email</th>
                                        <th>MOBILE NUMBER</th>
                                        <th>OFFICE NUMBER</th>
                                        <th>COMPANY NAME</th>
                                        <th>COMPANY ADDRESS</th>
                                        <th>COMPANY DETAILS</th>
                                        <th>ACTION</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>

                                        <tbody>
                                        <tr>


                                            <td>{{$user->id }}</td>
                                            <td>{{$user->first_name }}</td>
                                            <td>{{$user->other_names }}</td>
                                            <TD>{{$user->email }}</TD>

                                                 @foreach($clients as $client)
                                                    @if($client->user_id == $user->id )
                                            <td>{{ $client->phoneNumber_1 }}</td>
                                            <td>{{ $client->phoneNumber_2 }}</td>
                                                    @foreach($companies as $company)
                                                    @if($company->client_id == $client->id)
                                            <td> {{$client->company_name}}</td>
                                            <td>{{$client->company_address}}</td>
                                            <td>{{$client->company_details}}</td>
                                                        @endif
                                                    @endforeach
                                                            <td><a href="{{url('meetingRequest/'.$user->id)}}" type="" class="btn btn-sm  btn-success">Request Meeting</a></td>
                                                    <td> <a href="{{url('retrieve/'.$user->id)}}" class="btn btn-sm  btn-success">Upload</a></td>



                                        </tr>

                                        </tbody>

                                                   @endif
                                                 @endforeach



                                </table>







                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@stop