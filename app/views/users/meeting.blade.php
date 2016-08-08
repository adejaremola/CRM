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

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="label label-success">meeting</span>
                                <textarea type="textarea" class="form-control" name="meeting_description" placeholder="details here" id="textarea" cols="70" rows="5"></textarea>
                            </div>
                            <div class="form-group input-group">
                                <button class="btn btn-large btn-primary" type="button">Request</button>
                            </div>
                        </form>

                        </div>
                        </div>
                            </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" style="width:800px">
                        <thead>
                        <tr>


                            <th>DATE</th>
                            <th>MEETING REQUESTS</th>
                            <th>ACCEPT</th>
                            <th>DECLINE</th>
                        </tr>
                        </thead>

                            <tbody>
                            <tr>

                                <td></td>
                                <td></td>
                                <td><button class="btn btn-group-sm btn-success">Accept</button> </td>
                                <td><button class="btn btn-group-sm btn-warning">Decline</button> </td>

                            </tr>

                            </tbody>


                    </table>
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