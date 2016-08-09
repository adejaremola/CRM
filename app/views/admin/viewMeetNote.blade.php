@extends('layouts.front.master')

@section('body')


    <div id="page-wrapper " style="padding-right: -90px; margin-right: 60px; ">
      <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user-secret "></i> MEETINGS AND NOTES </h3>
                        </div>
                        <div class="panel-body">

                                        <table class="table table-responsive table-bordered ">

                                            <thead>
                                            <tr>
                                            <th> Meetings </th>
                                            <th> Notes</th>
                                                </tr>
                                            @foreach($meetings as $meeting)
                                                @foreach($notes as $note)
                                            </thead>

                                                    @if($meeting->id ==  $note->meet_id)
                                                        <tr>


                                            <td>    {{$meeting->meeting_description}}</td>
                                            <td>    {{$note->notes_description}}</td>
                                         @endif

                                            </tr>
                                                        @endforeach
                                                        @endforeach
                                        </table>

                                      </div>
                                   </div>


                             </div>
                           </div>
                          </div>
                          </div>


    @stop