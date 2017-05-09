<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.header')
</head>

<body>
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
    	<div class="panel panel-default">
          <form class="form-horizontal form-bordered" action="signup.html">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title" align="center">LOCUS</h4>
              </div>
              <div class="panel-body panel-body-nopadding" align="center" >
                <div class="form-group" >
                  <label class="col-sm-5 control-label">Contract Number:</label>
                  <div class="col-sm-3">
                    <input type="text" name="name" class="form-control" placeholder="Contract Number" />
                  </div>
                </div>
                <button class="btn btn-primary btn-primary-cityliving">Submit</button>
              </div>
            </div>
            <p>&nbsp; </p>
          </form>
    	</div>
    </div>
</section>


@include('includes.footer')
<script>
    jQuery(document).ready(function(){
        
        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>

</body>
</html>
