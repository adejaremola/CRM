@extends('layouts.front.master')

@section('body')
                <div id="page-wrapper" style="padding-top:180px;">

                  <div class="container-fluid" >

                    <div class="col-md-12">


                                <h2>Add an Attachment</h2>
                        <div class="form-group">


                            {{Form::open(array('route'=>'uploadFile','class'=>'form-vertical','role'=>'form', 'enctype' => 'multipart/form-data'))}}
                            @foreach($errors->all() as $error)
                                <div class="col-md-12">
                                    <div class="alert alert-dismissible alert-danger col-md-12" role="alert" style="display:inline-block">
                                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                        {{ $error }}
                                    </div>
                                </div>
                            @endforeach

                            <input type="hidden" name="client_id" value="{{$client->id}}">
                            <div class="form-group input-group">
                                <label for="name" class="sr-only">Client Name</label>
                                <input type="text" value="{{$client->user->first_name}}" class="form-control" disabled>
                            </div>
                            <div class="form-group input-group">
                                <label for="name" class="sr-only">File Name</label>
                                <input type="text" name="attachment_type" class="form-control" value="{{ Input::old('attachment_type') }}" placeholder="File Type">
                            </div>
                            	<div class="form-group input-group">
		                        <label for="name" class="">Please locate your file: </label>
		                        <input name="attach" type="file">
                            </div>
                            <div class="form-group input-group">
                                <label for="name" class="sr-only">Uploaded by: </label>
                                <input type="text" class="form-control" name="uploaded_by" value= "{{ Input::old('first_name') }}" placeholder="Uploaded by">
                            </div>
                            <div class="form-group input-group">
                                <button class="btn btn-large btn-primary" type="submit">Upload</button>
                            </div>
                            {{Form::close()}}

                              </div>
                             </div>
                            </div>
                        </div>


@stop