<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header', ['title' => 'Bill'])
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
                
                @include('navigation.top_nav', ['title' => 'Bill History'])

                <div class="contentpanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           <div id="progressWizard" class="basic-wizard">
                
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#ptab1" data-toggle="tab"><span>Invoice</span></a></li>
                  <li><a href="#ptab2" data-toggle="tab"><span>Payment</span></a></li>
                </ul>
                  
                <div class="tab-content">
                  
                  
                  <div class="tab-pane" id="ptab1">
                    <form class="form">
                      <div class="table-responsive">
                        <table class="table" id="table1">
                          <thead class="tab-th">
                             <tr>
                                <th>Invoice ID</th>
                                <th>City Name</th>
                                <th>Cust Name</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Billing Date</th>
                                <th>Amount</th>
                                <th>Balance</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr class="odd gradeA">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeC">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeC">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeU">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                          </tbody>
                       </table>
                      </div><!-- table-responsive -->
                      
                    </form>
                  </div>
                  <div class="tab-pane" id="ptab2">
                    <form class="form">
                      <div class="table-responsive">
                        <table class="table" id="table2">
                          <thead class="tab-th">
                             <tr>
                                <th>Invoice ID</th>
                                <th>City Name</th>
                                <th>Cust Name</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Billing Date</th>
                                <th>Amount</th>
                                <th>Balance</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr class="odd gradeA">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeX">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeC">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="even gradeC">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                             <tr class="odd gradeU">
                                <td>005v</td>
                                <td>Surabaya</td>
                                <td>Adi</td>
                                <td>Waiting for Payment</td>
                                <td>25/4/2017</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>100 M</td>
                             </tr>
                          </tbody>
                       </table>
                      </div><!-- table-responsive -->
                      
                    </form>
                  </div>
                  
                </div><!-- tab-content -->
                
                <ul class="pager wizard">
                    
                    <li><a href="#" class="btn btn-primary btn-primary-cityliving">Download CSV</a></li>
                    
                  </ul>
                
              </div><!-- #basicWizard --> 
                        </div><!-- panel-body -->
                    </div><!-- panel -->
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
          </div>

        </section>

        @include('includes.footer')
        <script>
        jQuery(document).ready(function(){
            
            $('#bill').addClass('active');

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
