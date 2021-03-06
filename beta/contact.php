<!DOCTYPE html>
<html>
<head>
  <title>Vink &amp; Beri LLC | Contact</title>
  <?php include'php/header.php'; ?>
</head>
<body class="fixed-header">
<div class="page-box">
<div class="page-box-content">

<?php include 'php/header-navs.php'; ?>

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
    <div class="row">             <div class="span6" style="background: whitesmoke;"> 
      <form method="post" action="contact-send.php" id="contactform" class="form-signin" role="form" style="padding: 30px;">
        <h2 class="form-signin-heading">Quick Contact</h2>
        <label>Name: <span class="required">*</span></label><input type="text" class="span5 form-control" id="name" name="name" required autofocus>
        <label>Email Address: <span class="required">*</span></label><input type="email" class="span5 form-control" id="email" name="email" required>
        <label>Telephone:</label><input type="text"  class="span5 form-control" id="phone" name="phone">
        <label>Subject:</label><input type="text" class="span5 form-control" id="subject" name="subject">
        <label>Comment:</label><textarea class="span5 form-control" id="comment" name="comment" ></textarea><br>
        <button name="submit" class="btn btn-default" type="submit">Submit</button>
      </form>
         </div>
      <div class="span6 contact-info">
      <div class="row">
        <address class="span6">
        <div class="title">Address</div>
        140 Domorah Dr Montgomeryville, PA 18936, USA
        </address>
        <address class="span3">
        <div class="title">Phones</div>
        <div>Support: +1-(215)-654-5252 </div>
        </address>
        <address class="span3">
        <div class="title">Email Addresses</div>
        <div>Support: <a href="mailto:support@vinkandberi.com">info@vinkandberi.com</a></div>
        </address>
      </div>
      <hr>
      </div>
      <div class="span12 map-box" style="margin-top: 1%;">      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3046.386408072668!2d-75.2255!3d40.22271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6a469f12b71c7%3A0x47e745cfdb29cab9!2s140+Domorah+Dr!5e0!3m2!1sen!2sin!4v1395740924493" height="270" frameborder="0" style="border:0"></iframe>     </div>
      

    </div>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->

<?php include 'php/footer.php'; ?>
<?php include 'php/footer-js.php'; ?>
</body>
</html>