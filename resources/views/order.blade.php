<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header', ['title' => 'Order Form'])
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>

        

        <section>

            @include('navigation.sidebar')

            <div class="mainpanel-container">
              <div class="mainpanel">
                
                @include('navigation.top_nav', ['title' => 'Order Form'])

                <div class="contentpanel">
                    <div class="col-md-12">
                    <form class="form-horizontal" action="doOrder" method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                        <input type="text" name="appname" value="Citizen Request" class="form-control" readonly>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="storage" class="col-md-4 control-label">Storage</label>
                                      <div class="col-md-8">
                                        <input type="text" name="storage" value="100 MB" class="form-control" readonly>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="subsplan" class="col-md-4 control-label">Subscription Plan</label>
                                      <div class="col-md-8">
                                        <select name="subsplan" class="form-control">
                                          <option value="Monthly">Monthly</option>
                                          <option value="Annually">Annually</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="autorenew" class="col-md-4 control-label">Auto Renewal</label>
                                      <div class="col-md-8">
                                        <select name="autorenew" class="form-control">
                                          <option value="true">Yes</option>
                                          <option value="false">No</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="poperiod" class="col-md-4 control-label">PO Period</label>
                                      <div class="col-md-8">
                                        <select name="poperiod" class="form-control">
                                          <option value="Monthly">Monthly</option>
                                          <option value="Annually">Annually</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="effectivedate" class="col-md-4 control-label">Effective Date</label>
                                      <div class="col-md-8">
                                        <input type="text" name="effectivedate" value="{{ $date }}" class="form-control" readonly>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="price" class="col-md-4 control-label">Based Price</label>
                                      <div class="col-md-8">
                                        <div class="input-group">
                                          <span class="input-group-addon">$</span>
                                          <input type="text" name="price" value="50" class="form-control">
                                          <span class="input-group-addon">.00</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="notes" class="col-md-4 control-label">Notes</label>
                                      <div class="col-md-8">
                                        <textarea name="notes" class="form-control" rows="5"></textarea>
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
                                        <textarea name="contact_address" class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-4 control-label">Contact Name</label>
                                      <div class="col-md-8">
                                        <input type="text" name="contact_name" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="telp" class="col-md-4 control-label">Telephone Number</label>
                                      <div class="col-md-8">
                                        <input type="text" name="contact_telp" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-8">
                                        <div class="ckbox ckbox-default">
                                          <input type="checkbox" name="alert" id="checkboxDefault">
                                          <label for="checkboxDefault">Do you wish to recieve email alert?</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group text-center">
                                    <button type="submit" class="btn btn-lightblue btn-lg" href="">Subscribe</button>
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
