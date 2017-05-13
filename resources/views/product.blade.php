<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header', ['title' => 'Product Catalog'])
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

                @include('navigation.top_nav', ['title' => 'Products & Services Pricing Plan'])

                <div class="contentpanel">
                    <div class="panel panel-default">
                           <div class="col-md-5 panel-body">
                            <div class="table-responsive">
                            <table class="table table-hidaction table-hover mb30" id="table_product">
                              <thead>
                                <tr>
                                  <th>Product & Service Category</th>
                                  <th>Type</th>
                                  <th> </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr >
                                  <td>Platform</td>
                                  <td>Recuring</td>
                                  <td class="table-action">
                                    <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="btn1">Select</button></a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Applications</td>
                                  <td>Recuring</td>
                                  <td class="table-action">
                                    <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="btn2">Select</button></a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Infrastructure</td>
                                  <td>One Time</td>
                                  <td class="table-action">
                                    <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="btn3">Select</button></a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>KOD Service</td>
                                  <td>One Time</td>
                                  <td class="table-action">
                                    <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="btn4">Select</button></a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>KOD Support</td>
                                  <td>Recuring</td>
                                  <td class="table-action">
                                   <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="btn5">Select</button></a>
                                  </td>
                                </tr>
                                <!--
                                <tr>
                                  <td>KOD Package</td>
                                  <td>Recuring</td>
                                  <td class="table-action-hide">
                                   <a><button class="btn btn-primary btn-primary-cityliving nav-toggle" id="#collapse6">Select</button></a>
                                  </td>
                                </tr>
                                -->
                              </tbody>
                            </table>
                          </div>
                            </div><!-- table-responsive -->
                            </div>

                             <div class="col-md-7">

                             <div id="collapse1">
                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check1" value="1" />
                                              <label for="check1"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">KOD Platform</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <a href="order" class="btn btn-primary btn-primary-product">Subscribe</a>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>
                            </div>
                        


                        <div id="collapse2">

                           <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check2" value="1" />
                                              <label for="check2"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">City Living</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check3" value="1" />
                                              <label for="check3"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Citizen Request</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check4" value="1" />
                                              <label for="check4"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Command Center</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check5" value="1" />
                                              <label for="check5"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                            </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Social Media</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                        </div>

                        <div id="collapse3">

                        <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check6" value="1" />
                                              <label for="check6"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Local Replica</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check7" value="1" />
                                              <label for="check7"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">CCTV</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check8" value="1" />
                                              <label for="check8"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Command Center</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check9" value="1" />
                                              <label for="check9"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">GPS</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                        </div>

                        <div id="collapse4">

                          <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check10" value="1" />
                                              <label for="check10"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Configuration</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check11" value="1" />
                                              <label for="check11"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Data Content Loading</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check12" value="1" />
                                              <label for="check12"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Traning</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check13" value="1" />
                                              <label for="check13"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Custom Development</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                        </div>

                        <div id="collapse5">

                           <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check14" value="1" />
                                              <label for="check14"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Help Desk</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check15" value="1" />
                                              <label for="check15"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Apps Lv 2 & 3 Support</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check16" value="1" />
                                              <label for="check16"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Data/Content Management</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>

                               <div class="col-sm-5">
                                  <div class="panel panel-prd panel-stat ">
                                    <div class="panel-heading">
                                      <div class="stat">
                                        <div class="row">
                                          <div class="thmb">
                                            <div class="ckbox ckbox-primary" align="center">
                                              <input type="checkbox" id="check17" value="1" />
                                              <label for="check17"></label>
                                                <div class="thmb-prev">
                                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                                </div>
                                             </div>
                                            <div align="center">
                                              <h4 class="city-name-h4">Infra Support & Maintanace</h4>
                                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                                              <button class="btn btn-primary btn-primary-product">Subscribe</button>
                                            </div>
                                          </div><!-- thmb -->
                                        </div><!-- row -->
                                      </div><!-- stat -->
                                    </div><!-- panel-heading -->
                                  </div><!-- panel -->
                              </div>
                        
                        </div>
<!--
                        <div id="collapse6" style="display:none">
                          <div class="col-xs-6 col-sm-4">
                          <div class="thmb">
                            <div class="ckbox ckbox-primary" align="center">
                              <input type="checkbox" id="check19" value="1" />
                              <label for="check19"></label>
                                <div class="thmb-prev">
                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                </div>
                            </div>
                            <div align="center">
                              <h4 class="city-name-h4">Base Package</h4>
                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                              <a href="order.html"><button class="btn btn-primary btn-primary-cityliving">Subscribe</button></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                          <div class="thmb">
                            <div class="ckbox ckbox-primary" align="center">
                              <input type="checkbox" id="check20" value="1" />
                              <label for="check20"></label>
                                <div class="thmb-prev">
                                  <button type="button" class="btn btn-primary btn-circle btn-xl">Status</button>
                                </div>
                            </div>
                            <div align="center">
                              <h4 class="city-name-h4">Full Package</h4>
                              <h5 class="city-name-h4">Based Price Usage Details</h5>
                              <a href="order.html"><button class="btn btn-primary btn-primary-cityliving">Subscribe</button></a>
                            </div>
                          </div>
                        </div>
                        </div> -->


                          </div><!-- col-md-6 -->
                    </div><!-- panel -->
                </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainpanel-container -->

        </section>

        @include('includes.footer')

        <script type="js/jquery-3.2.1.min.js"></script>
        
   <script>
  jQuery(document).ready(function() {
    $('#product').addClass('active');
    "use strict";
    
    jQuery('#table1').dataTable();

    jQuery('#table2').dataTable();
    
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

      <script>
      $(document).ready(function(){
        $("#collapse1").hide();
        $("#collapse2").hide();
        $("#collapse3").hide();
        $("#collapse4").hide();
        $("#collapse5").hide();

          $("#btn1").click(function(){
              $("#collapse1").toggle();
              $("#collapse2").hide();
              $("#collapse3").hide();
              $("#collapse4").hide();
              $("#collapse5").hide();
          });
          $("#btn2").click(function(){
              $("#collapse2").toggle();
              $("#collapse1").hide();
              $("#collapse3").hide();
              $("#collapse4").hide();
              $("#collapse5").hide();
          });
          $("#btn3").click(function(){
              $("#collapse3").toggle();
              $("#collapse1").hide();
              $("#collapse2").hide();
              $("#collapse4").hide();
              $("#collapse5").hide();
          });
          $("#btn4").click(function(){
              $("#collapse4").toggle();
              $("#collapse1").hide();
              $("#collapse2").hide();
              $("#collapse3").hide();
              $("#collapse5").hide();
          });
          $("#btn5").click(function(){
              $("#collapse5").toggle();
              $("#collapse1").hide();
              $("#collapse2").hide();
              $("#collapse3").hide();
              $("#collapse4").hide();
             
          });
      });
      </script>
    </body>
</html>