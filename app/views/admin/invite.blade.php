@extends('layouts.front.master')

@section('body')



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-6 col-md-6">
                    <h1 class="page-header">
                        Invite by Email
                    </h1>


                    <form role="form" method="post" action="{{URL::route('sendInvite')}}">

                        @if(Session::has('success'))
                            <div class="alert alert-success"> {{Session::get('success') }}</div>
                        @elseif(Session::has('fail'))
                            <div class="alert alert-danger"> {{Session::get('fail') }}</div>
                        @endif

                            <div class="form-group {{ ($errors->has('name')) ? ' has-error'  : '' }}">
                                <label>Enter Name </label>
                                <input type="text" name="name" placeholder="name" class="form-control">
                                @if($errors->has('name'))
                                    {{$errors->first('name')}}
                                @endif

                            </div>

                        <div class="form-group {{ ($errors->has('email')) ? ' has-error'  : '' }}">
                            <label>Enter Email </label>
                            <input type="text" name="email" placeholder="email" class="form-control">
                            @if($errors->has('email'))
                                {{$errors->first('email')}}
                            @endif

                        </div>
                        <div class="form-group">
                            <input type='submit' class="btn btn-sm btn-success" value='Create'/>
                        </div>
                    </form>
                    <div class="col-md-6 col-md-6" style="font-family: 'Gentium Book Basic';">
                        <h4>Thanks for being our customer</h4>
                    </div>
                    </div>
                    </div>

                </div>


            </div>


@stop