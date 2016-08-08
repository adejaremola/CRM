@extends('layouts.front.master')

@section('body')

     <div class="container">
                       <div class="row">
                           <div class="col-md-12">

         <div class="col-lg-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Book Keepers</h3>
                 </div>
                 <div class="panel-body">
                     <div class="table-responsive">
                         <table class="table table-bordered table-hover table-striped" style="width:1000px">
                             <thead>
                             <tr>

                                 <th>FIRSTNAME</th>
                                 <th>OTHERNAMES</th>
                                 <th>Email</th>
                                 @if((Auth::user()->isAdmin()))
                                 <th>DELETE</th>
                                 @endif
                             </tr>
                             </thead>
                             @foreach ($users as $user)
                                  <tbody>
                             <tr>

                                 <td>{{ $user->first_name }}</td>
                                 <td>{{ $user->other_names }}</td>
                                 <td>{{ $user->email }}</td>
                                 @if((Auth::user()->isAdmin()))
                                  <td><a href="{{('deleteBookk/'.$user->id)}}" class="btn btn-sm  btn-danger">Delete</a></td>
                                 @endif
                             </tr>

                             </tbody>

                             @endforeach
                         </table>
                                         <div class="col-md-6 col-md-6" style="font-family: 'Gentium Book Basic';">
                                             <h4>Thanks for being our customer</h4>
                                         </div>
                     </div>
                 </div>
             </div>
         </div>

                           </div>
                       </div>
                   </div>


    @stop