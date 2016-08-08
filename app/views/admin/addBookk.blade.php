@extends('layouts.front.master')

@section('body')



    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-6 col-md-6">
                    <h1 class="page-header">
                        Add a User
                    </h1>


                            <form role="form" method="post" action="{{URL::route('storeBookk')}}">

                                @if(Session::has('success'))
                                    <div class="alert alert-success"> {{Session::get('success') }}</div>
                                @elseif(Session::has('fail'))
                                    <div class="alert alert-danger"> {{Session::get('fail') }}</div>
                                @endif

                                <div class="form-group {{ ($errors->has('first_name')) ? ' has-error'  : '' }}">
                                    <label>Enter First Name</label>
                                    <input type="text" name="first_name" placeholder="Firstname" class="form-control">
                                    @if($errors->has('first_name'))
                                        {{$errors->first('first_name')}}
                                    @endif
                                </div>

                                <div class="form-group {{ ($errors->has('other_names')) ? ' has-error'  : '' }}">
                                    <label>Enter Other Names</label>
                                    <input type="text" name="other_names" class="form-control" placeholder="Othernames">
                                    @if($errors->has('other_names'))
                                        {{$errors->first('other_names')}}
                                    @endif
                                </div>

                                <div class="form-group {{ ($errors->has('email')) ? ' has-error'  : '' }}">
                                    <label>Enter email</label>
                                    <input type="text" name="email" class="form-control" placeholder="email">
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>

                                <div class="form-group {{ ($errors->has('password')) ? ' has-error'  : '' }}">
                                    <label>Enter password</label>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                    @if($errors->has('password'))
                                        {{$errors->first('password')}}
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Admin Role</label>
                                    <select  class="form-control" name="roles_id">
                                        <option name="roles_id" value="1">Admin</option>
                                        <option name="roles_id" value="2">CRM</option>
                                        <option name="roles_id" value="3">Book keeper</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type='submit' class="btn btn-sm btn-success" value='Create'/>
                                </div>
                            </form>

                        </div>


            </div>

            <div class="col-md-12">
                <h4>Thanks for being our customer</h4>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->


    <!-- /#page-wrapper -->





@stop