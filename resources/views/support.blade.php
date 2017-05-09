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
                    <div class="pageheader" style="display: inline-block;"><h2> Support  </h2>
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                           

                        </div><!-- panel-body -->
                    </div><!-- panel -->
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->

        </section>

        @include('includes.footer')
        <script>
        jQuery(document).ready(function(){

          $('#support').addClass('active');
            
            "use strict";

          // Basic Wizard
          jQuery('#basicWizard').bootstrapWizard();
          
          // Progress Wizard
          $('#progressWizard').bootstrapWizard({
            'nextSelector': '.next',
            'previousSelector': '.previous',
            onNext: function(tab, navigation, index) {
              var $total = navigation.find('li').length;
              var $current = index+1;
              var $percent = ($current/$total) * 100;
              jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            },
            onPrevious: function(tab, navigation, index) {
              var $total = navigation.find('li').length;
              var $current = index+1;
              var $percent = ($current/$total) * 100;
              jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            },
            onTabShow: function(tab, navigation, index) {
              var $total = navigation.find('li').length;
              var $current = index+1;
              var $percent = ($current/$total) * 100;
              jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            }
          });
          
          // Disabled Tab Click Wizard
          jQuery('#disabledTabWizard').bootstrapWizard({
            tabClass: 'nav nav-pills nav-justified nav-disabled-click',
            onTabClick: function(tab, navigation, index) {
              return false;
            }
          });
          
          // With Form Validation Wizard
          var $validator = jQuery("#firstForm").validate({
            highlight: function(element) {
              jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
              jQuery(element).closest('.form-group').removeClass('has-error');
            }
          });
          
          jQuery('#validationWizard').bootstrapWizard({
            tabClass: 'nav nav-pills nav-justified nav-disabled-click',
            onTabClick: function(tab, navigation, index) {
              return false;
            },
            onNext: function(tab, navigation, index) {
              var $valid = jQuery('#firstForm').valid();
              if(!$valid) {
                
                $validator.focusInvalid();
                return false;
              }
            }
          });
          
          jQuery(".select2").select2({
            width: '100%',
            minimumResultsForSearch: -1
          });
          
          
        });
        </script>
        
         <script>
        jQuery(document).ready(function() {
          
          "use strict";
          
          jQuery('#table1').dataTable();
          
          jQuery('#table2').dataTable({
            "sPaginationType": "full_numbers"
          });
          
          // Select2
          jQuery('select').select2({
              minimumResultsForSearch: -1
          });
          
          jQuery('select').removeClass('form-control');
          
          // Delete row in a table
          jQuery('.delete-row').click(function(){
            var c = confirm("Continue delete?");
            if(c)
              jQuery(this).closest('tr').fadeOut(function(){
                jQuery(this).remove();
              });
              
              return false;
          });
          
          // Show aciton upon row hover
          jQuery('.table-hidaction tbody tr').hover(function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 1});
          },function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 0});
          });
        
        
        });
      </script>


    </body>
</html>
