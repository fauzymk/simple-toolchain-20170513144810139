<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header', ['title' => 'Order History'])
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
                
                @include('navigation.top_nav', ['title' => 'Order History'])

                <div class="contentpanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           <div id="progressWizard" class="basic-wizard">
                
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#ptab1" data-toggle="tab"><span>Current Order</span></a></li>
                  <li><a href="#ptab2" data-toggle="tab"><span>Completed</span></a></li>
                </ul>
                  
                <div class="tab-content">
                  
                  
                  <div class="tab-pane" id="ptab1">
                    <form class="form">
                      <div class="table-responsive">
                        <table class="table" id="table1">
                          <thead class="tab-th">
                             <tr>
                                <th>Order ID</th>
                                <th>City Name</th>
                                <th>Cust Name</th>
                                <th>Item Name</th>
                                <th>Date Created</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Status</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr class="gradeA">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeC">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>ujang</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeC">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>rudi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeU">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             
                          </tbody>
                       </table>
                      </div><!-- table-responsive -->
                      
                    </form>
                  </div>
                  <div class="tab-pane" id="ptab2">
                       <div class="table-responsive">
                        <table class="table" id="table2">
                          <thead class="tab-th">
                             <tr>
                                <th>Order ID</th>
                                <th>City Name</th>
                                <th>Cust Name</th>
                                <th>Item Name</th>
                                <th>Date Created</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Status</th>
                             </tr>
                          </thead>
                          <tbody>
                             <tr class="gradeA">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeX">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeC">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeC">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                             <tr class="gradeU">
                                <td>001sub</td>
                                <td>Bandung</td>
                                <td>Budi</td>
                                <td>City Living</td>
                                <td>25/4/2017</td>
                                <td>100 Jt</td>
                                <td>Recurring</td>
                                <td>Processing</td>
                             </tr>
                          </tbody>
                       </table>
                      </div><!-- table-responsive -->
                      
                    </form>
                  </div>
                  
                </div><!-- tab-content -->
                
                <ul class="pager wizard">
                    <li class="previous"><a href="javascript:void(0)">Previous</a></li>
                    <li><a href="#">Download CSV</a></li>
                    <li class="next"><a href="javascript:void(0)">Next</a></li>
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

          $('#order_history').addClass('active');
            
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
