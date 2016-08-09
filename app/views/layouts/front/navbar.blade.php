<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation" style="background-color:darkslategray;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hello {{Auth::user()->first_name}}</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Welcome</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>{{Auth::user()->first_name}}</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>{{Auth::user()->first_name}}</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->first_name}}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        @if((Auth::user()->isClient()))
                        <li>
                            <a href="{{('createProfile')}}"><i class="fa fa-fw fa-user"></i>Update Profile</a>
                        </li>
                            <li>
                            <a href="{{('updateProfile')}}"><i class="fa fa-fw fa-user"></i>Update Profile</a>
                        </li>
                        <li>
                            <a href="{{('profile/'.Auth::user()->id)}}"><i class="fa fa-fw fa-user"></i>View  Profile</a>
                        </li>
                        @endif
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{('Logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul  class="nav navbar-nav side-nav" >

                    <li class="active">
                        <a href="{{('admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    @if(Auth::check() && (Auth::user()->isclient()))
                    <li>
                        <a href="{{('request')}}" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-arrows-v"></i> Meeting Request <i class="fa fa-fw fa-caret-down"></i></a>

                    </li>
                    @endif

                                  @if(Auth::check() && (Auth::user()->isAdmin()))
                        <li>
                            <a href="#" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-arrows-v"></i> Meetings <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{('meetings')}}">Scheduled Meetings </a>
                                </li>
                                <li>
                                    <a href="{{('meetingDetails')}}"> Meeting  Details </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                        <a href="#" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Add Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                               <a href="{{'addBookk'}}"> Add  </a>
                            </li>
                            <li>
                               <a href="{{'invite'}}"> Invite </a>
                            </li>
                           
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> View Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="{{('viewC')}}"> Client</a>
                            </li>
                            <li>
                                <a href="{{('viewBC')}}"> BookKeeper</a>
                            </li>
                            <li>
                                <a href="{{('viewCRM')}}"> Client Relationship Manager</a>
                            </li>

                        </ul>
                    </li>
                    @elseif(Auth::check() && (Auth::user()->isBookkeeper()))
                        <li>
                            <a href="#" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-arrows-v"></i> Meetings <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{('meetings')}}"> Meetings </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> View Users <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{('viewC')}}"> Client</a>
                                </li>
                                <li>
                                    <a href="{{('viewBC')}}"> BookKeeper</a>
                                </li>
                                <li>
                                    <a href="{{('viewCRM')}}"> Client Relationship Manager</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                        <a href="{{('upload')}}" class="dropdown dropdown-toggle" data-toggle="dropdown"><i class="fa fa-upload" ></i> Upload  <i class="fa fa-fw fa-caret-down"></i></a>
                         <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="{{('retrieve')}}"> Upload Voucher</a>
                            </li>

                        </ul>
                    </li>
                    @endif
                                         
                </ul>
            </div>

        </nav>