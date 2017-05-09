<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
    </head>

    <body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

        

        <section>

            @include('sidebar.sidebar')

            <div class="mainpanel">

                <div class="headerbar">
                    <div class="pageheader" style="display: inline-block;"><h2> Dashboard</h2></div>

                    <div class="header-right">
                        <ul class="headermenu">
                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle btn-height-70" data-toggle="dropdown">
                                        <img src="images/photos/loggeduser.png" alt="" />
                                        John Doe
                                        <span class="caret"></span>
                                    </button>
                                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                            <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i>My Profile</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-cog"></i>Account Settings</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>Help</a></li>
                                            <li><a href="login.html"><i class="glyphicon glyphicon-log-out"></i>Log Out</a></li>
                                        </ul>
                                </div>
                            </li>
                        </ul>
                    </div><!-- header-right -->
                </div><!-- headerbar -->

                <div class="contentpanel">
                    <div class="col-sm-12">
                          <div class="panel panel-info">
                              
                              <div class="col-xs-12" align="center">
                              <h1 class="fontcolor-city panel-heading"> <img src="images/img/bogor.png" style="height: 75px; padding-right: 5px; padding-left: 5px;"> BOGOR</h1>
                              </div>
                          </div><!-- panel -->
                        <div class="col-sm-6 col-md-3" >
                          <div class="panel panel-danger panel-stat" >
                            <div class="panel-heading" >
                              
                              <div class="stat" >
                                <div class="row">
                                  <div class="col-xs-4" style="color: #f2f2f2">
                                    <i class="fa fa-building fa-lg" style="font-size: 68px;"></i>
                                  </div>
                                  <div class="col-xs-8" align="center">
                                    <small class="stat-label"> City Type</small>
                                    <h1 class="fontcolor">Medium</h1>
                                  </div>
                                </div><!-- row -->
                                
                              </div><!-- stat -->
                              
                            </div><!-- panel-heading -->
                          </div><!-- panel -->
                        </div><!-- col-sm-6 -->
                        
                        <div class="col-sm-6 col-md-3">
                          <div class="panel panel-dark panel-stat">
                            <div class="panel-heading">
                              
                              <div class="stat">
                                <div class="row">
                                  <div class="col-xs-4" style="color: #f2f2f2">
                                    <i class="fa fa-cubes " style="font-size: 55px;"></i>
                                  </div>
                                  <div class="col-xs-8" align="center">
                                    <small class="stat-label"> Package</small>
                                    <h1 class="fontcolor">Based Package</h1>
                                  </div>
                                </div><!-- row -->
                                
                              </div><!-- stat -->
                              
                            </div><!-- panel-heading -->
                          </div><!-- panel -->
                        </div><!-- col-sm-6 -->

                       <div class="col-sm-6 col-md-3">
                          <div class="panel panel-success panel-stat">
                            <div class="panel-heading">
                              
                              <div class="stat">
                                <div class="row">
                                  <div class="col-xs-4" style="color: #f2f2f2">
                                    <i class="fa fa-user fa-lg" style="font-size: 72px;"></i>
                                  </div>
                                  <div class="col-xs-8" align="center">
                                    <small class="stat-label">Account Status</small>
                                    <h1 class="fontcolor">Active</h1>
                                  </div>
                                </div><!-- row -->
                                
                              </div><!-- stat -->
                              
                            </div><!-- panel-heading -->
                          </div><!-- panel -->
                        </div><!-- col-sm-6 -->
                        
                        <div class="col-sm-6 col-md-3">
                          <div class="panel panel-warning panel-stat">
                            <div class="panel-heading">
                              
                              <div class="stat">
                                <div class="row">
                                  <div class="col-xs-4" style="color: #f2f2f2;">
                                    <i class="fa fa-tachometer fa-lg" style="font-size: 72px; opacity: 0.7;"></i>
                                  </div>
                                  <div class="col-xs-8" align="center">
                                    <small class="stat-label">Usage</small>
                                    <h1 class="fontcolor">80%</h1>
                                  </div>
                                </div><!-- row -->
                                
                              </div><!-- stat -->
                              
                            </div><!-- panel-heading -->
                          </div><!-- panel -->
                        </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <p>&nbsp;</p>
                  <div class="row" style="border-top: 2px solid #c4c4c4; padding-top: 50px;">
                    <div class="col-sm-6 col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body" align="center">
                          <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                          <h4 class="city-name-h4">KOD Platform</h4>
                          <h5 class="city-name-h4">Status Remain Usage</h5>
                          <button class="btn btn-primary btn-primary-dashboard">Stop</button>
                        </div><!-- panel-body -->
                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body" align="center">
                          <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                          <h4 class="city-name-h4">City Living</h4>
                          <h5 class="city-name-h4">Status Remain Usage</h5>
                          <button class="btn btn-primary btn-primary-dashboard">Stop</button>
                        </div><!-- panel-body -->
                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-body" align="center">
                          <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                          <h4 class="city-name-h4">Command Center</h4>
                          <h5 class="city-name-h4">Status Remain Usage</h5>
                          <button class="btn btn-primary btn-primary-dashboard">Stop</button>
                        </div><!-- panel-body -->
                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 col-md-4 center" >
                      <div class="panel panel-default">
                        <div class="panel-body" align="center">
                          <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                          <h4 class="city-name-h4">Command Center</h4>
                          <h5 class="city-name-h4">Status Remain Usage</h5>
                          <button class="btn btn-primary btn-primary-dashboard">Stop</button>
                        </div><!-- panel-body -->
                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->
                  </div>
                </div><!-- contentpanel -->

            </div><!-- mainpanel -->

        </section>

        @include('includes.footer')

        <script type="text/javascript">
          $(document).ready(function() {
            $('#home').addClass('active');
          });
        </script>
    </body>
</html>
