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

            <div class="mainpanel-container">
              <div class="mainpanel">
                <div class="headerbar">
                    <div class="pageheader" style="display: inline-block;"><h2>Order Form</h2>
                    </div>

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
                    <div class="col-md-12">
                    <form class="form-horizontal form-bordered" action="product.html">
                      <div class="panel panel-default">

                        <div class="panel-heading" align="center" >
                        <div class="col-sm-1"> <a href="product" class="btn btn-primary btn-primary-cityliving "> Back</a></div>
                          <div class="col-sm-10 panel-title">
                          <h5 class="panel-title">Subscription Options</h5>
                          </div>

                        </div>
                        <div class="panel-body panel-body-nopadding" align="center" >
                          <div class="row">
                            <div class="col-md-6">
                              
                            </div>
                            <div class="col-md-6">
                              
                            </div>
                          </div>
                            <!-- <div class="row">
                          <div class="col-md-5">
                            <div class="panel panel-default">
                              <div class="panel-body">
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Application Name</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Citizen Request" id="disabledinput" class="form-control" disabled="" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Storage</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="100 Mb" id="disabledinput" class="form-control" disabled="" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Subscription Plan</label>
                                    <div class="col-sm-6" >
                                       <select class="form-control mb15">
                                          <option>Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Subscription Plan</label>
                                    <div class="col-sm-6" >
                                       <select class="form-control mb15">
                                          <option>Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Subscription Plan</label>
                                    <div class="col-sm-6" >
                                       <select class="form-control mb15">
                                          <option>Option 1</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Effective Date</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="26/04/2017" id="disabledinput" class="form-control" disabled="" />
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label class="col-sm-3 control-label">Based Price</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="50" class="form-control" />
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label class="col-sm-3 control-label">Note</label>
                                    <div class="col-sm-6">
                                      <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="panel panel-default">
                              <div class="panel-body">
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Province</label>
                                        <div class="col-sm-6">
                                          <select class="form-control mb15" data-placeholder="Choose a Country...">
                                            <option value="">Transfer</option>
                                            <option value="">cash</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Name of Bank</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Default Input" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Account Number</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Default Input" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Default Input" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact Name</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Default Input" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Telp Name</label>
                                    <div class="col-sm-6">
                                       <input type="text" placeholder="Default Input" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8">
                                       <div class="ckbox ckbox-default">
                                        <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                        <label for="checkboxDefault">Do you wish to Recive email alert</label>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary btn-primary-cityliving">Subscribe</button>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </form>
                  </div>
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
          </div><!-- mainpanel-container -->

        </section>

        @include('includes.footer')
        
       <script>
          jQuery(document).ready(function(){
              
              "use strict";
            
            // Tags Input
            jQuery('#tags').tagsInput({width:'auto'});
            
            // Select2
            jQuery(".select2").select2({
              width: '100%'
            });
             
            // Textarea Autogrow
            jQuery('#autoResizeTA').autogrow();
            
            // Color Picker
            if(jQuery('#colorpicker').length > 0) {
             jQuery('#colorSelector').ColorPicker({
                onShow: function (colpkr) {
                  jQuery(colpkr).fadeIn(500);
                  return false;
                },
                onHide: function (colpkr) {
                  jQuery(colpkr).fadeOut(500);
                  return false;
                },
                onChange: function (hsb, hex, rgb) {
                  jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
                  jQuery('#colorpicker').val('#'+hex);
                }
             });
            }
            
            // Color Picker Flat Mode
            jQuery('#colorpickerholder').ColorPicker({
              flat: true,
              onChange: function (hsb, hex, rgb) {
                jQuery('#colorpicker3').val('#'+hex);
              }
            });
             
            // Date Picker
            jQuery('#datepicker').datepicker();
            
            jQuery('#datepicker-inline').datepicker();
            
            jQuery('#datepicker-multiple').datepicker({
              numberOfMonths: 3,
              showButtonPanel: true
            });
            
            // Spinner
            var spinner = jQuery('#spinner').spinner();
            spinner.spinner('value', 0);
            
            // Input Masks
            jQuery("#date").mask("99/99/9999");
            jQuery("#phone").mask("(999) 999-9999");
            jQuery("#ssn").mask("999-99-9999");
            
            // Time Picker
            jQuery('#timepicker').timepicker({defaultTIme: false});
            jQuery('#timepicker2').timepicker({showMeridian: false});
            jQuery('#timepicker3').timepicker({minuteStep: 15});

            
          });
        </script>

   


    </body>
</html>
