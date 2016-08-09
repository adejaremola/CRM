@extends('layouts.front.master')

@section('body')



    <div id="page-wrapper" style="padding-top:50px;">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Update Personal Profile view</h3>
        </div>

        <div class="container-fluid" >
            <div class="col-md-12">

            <!-- Page Heading -->

                {{Form::open(array('route'=>'update','class'=>'form-vertical','role'=>'form'))}}
                    <div class="form-group">

                        <label for="PhoneNumber" class="col-lg-2 control-label">Mobile Phone :</label>
                        <div class="col-lg-10 form-group">
                            {{Form::text('phoneNumber_1','',array('class'=>'form-control'))}}
                        </div>
                    </div> <div class="form-group">

                    <div class="form-group">

                        <label for="PhoneNumber" class="col-lg-2 control-label">Office Phone :</label>
                        <div class="col-lg-10 form-group">
                            {{Form::text('phoneNumber_2','',array('class'=>'form-control'))}}
                        </div>
                    </div> <div class="form-group">
                        <div class="form-group">

                            <label for="Company Name" class="col-lg-2 control-label">Company Name:</label>
                            <div class="col-lg-10 form-group">
                                {{Form::text('company_name','',array('class'=>'form-control'))}}
                            </div>
                        </div> <div class="form-group">
                            <div class="form-group">

                                <label for="Company Address" class="col-lg-2 control-label">Company Address:</label>
                                <div class="col-lg-10 form-group">
                                    {{Form::textarea('company_address','',array('class'=>'form-control'))}}
                                </div>
                            </div> <div class="form-group">
                                <div class="form-group">

                                    <label for="Company Details" class="col-lg-2 control-label">Company Details:</label>
                                    <div class="col-lg-10 form-group">
                                        {{Form::textarea('company_details','',array('class'=>'form-control'))}}
                                    </div>
                                </div> <div class="form-group">

                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="col-lg-offset-2 col-lg-10">
                                &nbsp;&nbsp;&nbsp; {{Form::submit('Update',array('class'=>'btn btn-success'))}}
                            </div>

                {{Form::close()}}

            <!-- /.row -->
                                    <div class="col-md-6 col-md-6" style="font-family: 'Gentium Book Basic';">
                                        <h4>Thanks for being our customer</h4>
                                    </div>
            </div>
        </div>
                        <!-- /.row -->
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                       </div>
                    </div>
                  </div>




@stop