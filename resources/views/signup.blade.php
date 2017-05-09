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
    <div align="center">
          <div>
            <h1><img src="images/img/bogor.png" style="height: 40px; padding-right: 15px; padding-left: 5px;"></span>Locus
            </h1>
         </div>
    </div>
  <div class="contentpanel">
         <form class="form-horizontal form-bordered" action="login.html">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">Sing Up City</h4>
              </div>
              <div class="panel-body panel-body-nopadding" align="center" >
                  <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-default">
                  <h4 class="panel-title">Account Info</h4>
                    <div class="panel-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Contract Number</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Contract Number" id="disabledinput" class="form-control" disabled="" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Login Name</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Login Name" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-6">
                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Re-Enter Password</label>
                          <div class="col-sm-6">
                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Re-Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Admin First Name</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="First Name" class="form-control" />
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Admin Last Name</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Last Name" class="form-control" />
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="panel panel-default">
                  <h4 class="panel-title">City Profile</h4>
                    <div class="panel-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Province</label>
                              <div class="col-sm-6">
                                <select class="select2" data-placeholder="Choose a Country...">
                                  <option value=""></option>
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">City Name</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Default Input" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">City Major</label>
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
                          <label class="col-sm-3 control-label">Postal Code</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Default Input" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Phone</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Default Input" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-6">
                             <input type="text" placeholder="Default Input" class="form-control" />
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-primary-cityliving">Submit</button>
            </div>
              <p>&nbsp; </p>
              <p>&nbsp; </p>
          </form> 
      </div>
  </div>
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
