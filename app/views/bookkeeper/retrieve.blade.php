@extends('layouts.front.master')

@section('body')






    <div id="page-wrapper" style="padding-top:180px; ">

        <div class="container-fluid" >

                    <div class="col-md-12">
            <div class="form-group">
                <h2>Key in client email</h2>

                {{Form::open(array('route'=>'fileUser','class'=>'form-vertical','role'=>'form'))}}

                <div class="form-group input-group">
                    <label for="name" class="sr-only">Email: </label>
                    <input type="text" name="email" class="form-control" placeholder="email ">
                </div>

                <div class="form-group input-group">
                    <button class="btn btn-large btn-primary" type="submit">search</button>
                </div>
                {{Form::close()}}

            </div>
             </div>
              </div>
                </div>

@stop