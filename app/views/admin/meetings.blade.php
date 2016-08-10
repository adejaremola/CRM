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
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" style="width:1000px">
                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{Session::get('success') }}</div>
                            @elseif(Session::has('fail'))
                                <div class="alert alert-danger"> {{Session::get('fail') }}</div>
                            @endif
                            <thead>
                            <tr>
                                <th>MEETING FOR</th>
                                <th>MEETING PURPOSE</th>
                                <th>STATUS</th>
                                <th>ADD NOTE </th>
                                @if((Auth::user()->isAdmin()))
                                <th>DELETE MEETING</th>
                                    @endif
                            </tr>
                            </thead>


                            <tbody>


                            @foreach($meetings as $meet)
                                @foreach($clients as $client)
                                    @if($meet->client_id == $client->id)
                                        <tr>
                                            <td>{{$meet->client->user->first_name}} </td>
                                            <td>{{$meet->meeting_description}} </td>
                                            @if($meet->accepted == 1)

                                                <td> Accepted </td>

                                            @elseif($meet->accepted == 0)

                                                <td> Declined </td>

                                                @else

                                                <td> Pending </td>

                                            @endif




                                            <td><a href="{{url('notes/'.$meet->id)}}"  class="btn btn-success btn-sm">Drop Note </a></td>
                                            @if((Auth::user()->isAdmin()))
                                            <td> <a href="{{url('deleteMeeting/'.$meet->id)}}"  class="btn btn-danger btn-sm">DELETE </a> </td>
                                                @endif
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach


                            </tbody>


                        </table>

                    </div>


                    <div class="col-md-6 col-md-6" style="font-family: 'Gentium Book Basic';">
                        <h4>Thanks for being our customer</h4>
                    </div>
                </div>
            </div>

        </div>


    </div>


@stop