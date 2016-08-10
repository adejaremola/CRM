@extends('layouts.front.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Meeting Requests</h3>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success"> {{Session::get('success') }}</div>
                            @elseif(Session::has('fail'))
                                <div class="alert alert-danger"> {{Session::get('fail') }}</div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" style="width:1000px">
                                    <thead>
                                    <tr>

                                        <th>MEETING REQUEST</th>
                                        <th>ACCEPT</th>
                                        <th>DECLINE</th>
                                    </tr>
                                    </thead>


                                        <tbody>




                                               @foreach($meetings as $meeting)
                                                   @if ($meeting->client_id == $client->id)
                                                    <tr>
                                            <td>{{$meeting->meeting_description}} </td>


                                            <td><a href="{{url('accept/'.$meeting->id)}}" value="true" class="btn btn-success btn-sm">Accept </a></td>
                                                   <td> <a href="{{url('decline/'.$meeting->id)}}" value="False" class="btn btn-danger btn-sm">Decline </a> </td>
                                                    </tr>
                                                @endif
                                               @endforeach


                                        </tbody>


                                </table>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@stop