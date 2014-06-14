<!DOCTYPE html>
<html>
<head>
  <title>Vink &amp; Beri LLC | Contact</title>
  <?php include'header.php'; ?>
</head>
<body class="fixed-header">
<div class="page-box">
<div class="page-box-content">

<?php include 'header-navs.php'; ?>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a> <span class="divider">/</span></li>
      <li class="active">Contact</li>
    </ul> 
  </div>
</div><!-- .breadcrumb-box -->
     
<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Contact Us</h1>
    </div>  
  </header>
  <div class="container">
    <div class="row">    
      <div class="content span12">
    <div class="row">             <div class="span6"> 
        <form id="contactform" class="register-form contact-form" method="POST" action="email-submit.php">
            <h3 class="title">Quick Contact</h3>
                    <div id="success"></div>
                            <label>Name: <span class="required">*</span></label>
                                    <input class="input-block-level" type="text" name="name">
                            <label>Email Address: <span class="required">*</span></label>
                                    <input class="input-block-level" type="email" name="email">
                            <label>Telephone:</label>
                                    <input class="input-block-level" type="text" name="phone">
                            <label>Subject:</label>
                                    <input class="input-block-level" type="text" name="message">                            
                            <label>Comment:</label>
                                    <textarea class="input-block-level" name="comment" maxlength="200"></textarea>
                                            <div class="clearfix"></div> 
                                                   <div class="buttons-box clearfix">
                                                           <button name="submit" class="btn pull-left" data-toggle="modal" data-target="#myModal">Submit</button>       <span class="required"><b>*</b> Required Field</span>  
         
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h6 style="text-align: center; padding: 50px;">Your Data Successfully Submitted!</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
         </div><!-- .buttons-box -->     </form>     </div>
      <div class="span6 contact-info">
      <div class="row">
        <address class="span6">
        <div class="title">Address</div>
        140 Domorah Dr Montgomeryville, PA 18936, USA
        </address>
        <address class="span3">
        <div class="title">Phones</div>
        <div>Support: +1-(215)-614-5252 </div>
        </address>
        <address class="span3">
        <div class="title">Email Addresses</div>
        <div>Support: <a href="mailto:support@vinkandberi.com">info@vinkandberi.com</a></div>
        </address>
      </div>
      <hr>
      </div>

      <div class="span12 map-box">      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3046.386408072668!2d-75.2255!3d40.22271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6a469f12b71c7%3A0x47e745cfdb29cab9!2s140+Domorah+Dr!5e0!3m2!1sen!2sin!4v1395740924493" height="270" frameborder="0" style="border:0"></iframe>     </div>
      

    </div>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->

<?php include 'footer.php'; ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="js/price-regulator/tmpl.js"></script>
<script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="js/price-regulator/draggable-0.1.js"></script>
<script src="js/price-regulator/jquery.slider.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.elevateZoom-2.5.5.min.js"></script>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/country.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/raphael.min.js"></script>
<script src="js/video.js"></script>
<script src="js/selectBox.js"></script>
<script src="js/blur.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>