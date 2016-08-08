@extends('layouts.front.master')

@section('body')

    <div id="#form" class="tab-pane fade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <form class="form-horizontal" role="form">
                        <div class="form-title-row">
                            <h1>Update Profile</h1>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-lg-2" for="email">Phone Number</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="phoneno">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-lg-2" for="email">Mobile</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="mobile">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-lg-2" for="email">Company Name</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="company_name">
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-lg-2" for="email">Company Address</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="company_address"></textarea>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-lg-2" for="email">Company Details</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="company_details"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-4">
                                <button type="button" class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Already have an account? <a href="#">Login here &rarr;</a></h4>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

@stop