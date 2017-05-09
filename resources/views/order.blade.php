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
                    <form class="form-horizontal" action="product.html">
                      <div class="panel panel-default">

                        <div class="panel-heading" align="center" >
                        <!-- <div class="col-sm-1"> <a href="product" class="btn btn-primary btn-primary-cityliving "> Back</a></div>
                          <div class="col-sm-10 panel-title">
                          <h5 class="panel-title">Subscription Options</h5>
                          </div> -->
                          <a href="product" class="btn btn-white btn-sm pull-left"><span class="fa fa-chevron-left"></span> Back</a>
                          <h3 style="margin: 0; color: #d2d2d2;">Subscription Options</h3>

                        </div>
                        <div class="panel-body" style="background-color: #e4e7ea">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="panel panel-default2">
                                    <div class="form-group">
                                      <label for="appname" class="col-md-4 control-label">Application Name</label>
                                      <div class="col-md-8">
                                        <input type="text" name="appname" placeholder="Citizen Request" class="form-control" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="storage" class="col-md-4 control-label">Storage</label>
                                      <div class="col-md-8">
                                        <input type="text" name="storage" value="100 MB" class="form-control" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="subsplan" class="col-md-4 control-label">Subscription Plan</label>
                                      <div class="col-md-8">
                                        <select class="form-control">
                                          <option>Monthly</option>
                                          <option>Annually</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="autorenew" class="col-md-4 control-label">Auto Renewal</label>
                                      <div class="col-md-8">
                                        <select class="form-control">
                                          <option>Yes</option>
                                          <option>No</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="poperiod" class="col-md-4 control-label">PO Period</label>
                                      <div class="col-md-8">
                                        <select class="form-control">
                                          <option>Monthly</option>
                                          <option>Annually</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="effectivedate" class="col-md-4 control-label">Effective Date</label>
                                      <div class="col-md-8">
                                        <input type="text" name="effectivedate" value="26/4/2017" class="form-control" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="price" class="col-md-4 control-label">Based Price</label>
                                      <div class="col-md-8">
                                        <input type="text" name="price" value="50" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="notes" class="col-md-4 control-label">Notes</label>
                                      <div class="col-md-8">
                                        <textarea class="form-control" rows="5"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="panel panel-default2">
                                    <div class="form-group">
                                      <label for="payment" class="col-md-4 control-label">Payment Method</label>
                                      <div class="col-md-8">
                                        <input type="text" name="payment" placeholder="Transfer / Cash" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="bank" class="col-md-4 control-label">Name of Bank</label>
                                      <div class="col-md-8">
                                        <input type="text" name="bank" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="accno" class="col-md-4 control-label">Account Number</label>
                                      <div class="col-md-8">
                                        <input type="text" name="accno" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="address" class="col-md-4 control-label">Address</label>
                                      <div class="col-md-8">
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-4 control-label">Contact Name</label>
                                      <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="telp" class="col-md-4 control-label">Telephone Number</label>
                                      <div class="col-md-8">
                                        <input type="text" name="telp" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-8">
                                        <div class="checkbox block">
                                          <label><input type="checkbox" name="alert"> Do you wish to recieve email alert?</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <a class="btn btn-lightblue" href="">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
