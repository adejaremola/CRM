@extends('layouts.front.master')

@section('body')



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-6 col-md-6">
                        <h1 class="page-header">
                            Meeting Notes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Notes
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Make Notes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Add a public Note</h2>
                        <div class="form-group">




                             <form action="{{URL::route('storeNote')}}" method="post" role="form" >
                            <div class="form-group input-group">
                                <label class="-align-left">Meeting ID</label>

                                <input  type="text" name="meet_id"  value="{{$meeting->id}}" class="form-control" disabled >

                            </div>


                            <div class="form-group input-group">
                                <label class="-align-left"> Notes here: </label>
                                <textarea type="textarea" name="meeting_description" class="form-control" id="textarea" cols="70" rows="5"></textarea>
                            </div>

                            <div class="form-group input-group">
                                <label class="-align-left">Created By:</label>
                                <input type="text" name="created_by" value="{{Auth::user()->first_name}}" class="form-control" placeholder="Created by: ">
                            </div>

                            <div class="form-group input-group">
                                <button class="btn btn-large btn-primary" type="submit">Drop Note</button>
                            </div>
                             </form>


                        </div>
                    </div>
                </div>


       </div>
    </div>

@stop