@extends('layouts.front.master')

@section('body')

    <div class="panel-body bio-graph-info">
        <div id="page-wrapper" style="padding-top:280px;">

        <div class="container-fluid" >
            <div class="col-md-12">



                <h1>PersonalProfile</h1>

                @if(iseet($user))
                    @foreach($user as $use)

                    <h3>ID: {{$use->id }}  </h3>

                    <h3>First Name:{{$use->first_name }} </h3>

                    <h3>Other Names:{{$user->other_names }} </h3>

                    <h3> email address: {{ $use->email }}</h3>
                    <?php $uses= User::all(); ?>
                     @foreach($uses as $use)
                        @foreach($clients as $client)
                            @if($client->user_id == $use->id )
                                <h3> Mobile Number: {{ $client->phoneNumber_1 }}</h3>

                                <h3> Office Number: {{ $client->phoneNumber_2 }}</h3>


                                @foreach($companies as $company)
                                    @if($company->client_id == $client->id )
                                        <h3> Company Name:  {{ $company->company_name }}</h3>

                                        <h3> Company Type: {{ $company->company_details }}</h3>

                                        <h3> Company Address: {{ $company->company_address }}</h3>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                     @endforeach
                    @endforeach
                @endif





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



                        <div class="col-lg-offset-2 col-lg-10">
                            &nbsp;&nbsp;&nbsp; {{Form::submit('Update',array('class'=>'btn btn-success'))}}
                        </div>

                    {{Form::close()}}

                    <!-- /.row -->
                        <div>
                            <h4>Thanks for being our customer</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@stop