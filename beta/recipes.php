<!DOCTYPE html>
<html>
<head>
  <title>Recipes | Vink & Beri LLC</title>
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="img/favicon.png" rel="shortcut icon">

  <link rel='stylesheet' href="css/docs.css">
  <link rel='stylesheet' href="css/buttons/social-icons.css">
  <link rel='stylesheet' href="css/buttons/animation.css">
  <link rel='stylesheet' href="css/font-awesome.min.css">
  <link rel='stylesheet' href="css/bootstrap.min.css">
  <link rel='stylesheet' href="css/jslider.css">
  <link rel='stylesheet' href="css/settings.css">
  <link rel='stylesheet' href="css/jquery.fancybox.css">
  <link rel='stylesheet' href="css/animate.css">
  <link rel='stylesheet' href="css/video-js.css">
  <link rel='stylesheet' href="css/morris.css">
  <link rel='stylesheet' href="css/style.css">
  <link rel='stylesheet' href="css/responsive.css">
  <link rel='stylesheet' href="css/pages.css">
    
  <style>
	#top-box,
	.carousel-box .next:hover,
	.carousel-box .prev:hover,
	.product .product-hover,
	#footer .up:hover,
    .btn,
    .btn:visited,
    .slider .slider-nav,
    .active .accordion-heading .accordion-toggle,
    .banner-set .pagination a:hover,
    .employee .employee-hover,
    .carousel-box .pagination a:hover,
    .sidebar .menu li.active > a,
    .pagination ul > li > a:hover,
    .sidebar .tags a:hover,
    .sidebar .banners .banner-text,
    #catalog .category-img .description,
    .county-days-wrapper,
    .county-hours-wrapper,
    .county-minutes-wrapper,
    .county-seconds-wrapper,
    .product-bottom .related-products header:before,
    #slider.rs-slider .tparrows:hover,
    .toolbar .sort-catalog .dropdown-toggle,
    .toolbar .grid-list .grid,
    .toolbar .grid-list .list,
    .toolbar .up-down,
    .toolbar .up-down.active,
    .toolbar .grid-list a.grid:hover,
    .toolbar .grid-list a.list:hover,
    .pagination ul > .active > a,
    .pagination ul > .active > span,
    .sidebar .tags a,
    .sidebar .menu li.parent > a .open-sub:before,
    .sidebar .menu li.parent > a .open-sub:after,
    .accordion-heading .accordion-toggle:before,
    .accordion-heading .accordion-toggle:after,
    .new-radio.checked span,
	.list .product .actions a:hover,
	.product-page .span7 .actions a:hover,
	.product-page .image-box .thumblist-box .prev:hover,
	.product-page .image-box .thumblist-box .next:hover,
    .btn.btn-inverse:hover,
    .btn.btn-inverse:focus,
    .btn.btn-inverse:active,
    .btn.btn-inverse.active,
    .btn.btn-inverse.disabled,
    .btn.btn-inverse[disabled],
	.accordion-tab > li > a .open-sub:before,
	.accordion-tab > li > a .open-sub:after,
	.products-tab .accordion-tab > li > a .open-sub:before,
	.products-tab .accordion-tab > li > a .open-sub:after {
	  background-color: #ef7f1a;
	}
    .slider .slider-nav {
      background-color: #008644;
    }
    .county-days-wrapper,
    .county-hours-wrapper,
    .county-minutes-wrapper,
    .county-seconds-wrappe,
	.product .product-hover,
	.rotation .employee-hover {
      background-color: rgba(0,152,202,.9);
    }
    .btn:hover,
    .btn:focus,
    .btn:active,
    .btn.active,
    .btn.disabled,
    .btn[disabled] {
      background-color: #ef7f1a;
      background-color: rgba(0,152,202,.8);
    }
    #catalog .category-img .description,
    .toolbar .sort-catalog .dropdown-toggle,
    .toolbar .grid-list .grid,
    .toolbar .grid-list .list,
    .toolbar .up-down,
    .toolbar .up-down.active,
    .pagination ul > .active > a,
    .pagination ul > .active > span,
    .sidebar .tags a {
      background-color: rgba(0,152,202,.7);
    }
    .sidebar .banners .banner-text {
      background-color: rgba(0,152,202,.65);
    }
    #slider.rs-slider .tparrows,
	.product-page .add-cart-form .number .regulator a:hover {
      background-color: rgba(0,152,202,.5);
    }
	.pricing .bottom-box {
	  background-color: rgba(0,152,202,.05);
	}
	.pricing {
	  background-color: rgba(0,152,202,.06);
	}
	.pricing .options li,
	.pricing .bottom-box {
	  border-color: rgba(0,152,202,.1);
	}
	.header .cart-header .dropdown-toggle,
	#footer .newsletter input:focus + .submit,
    .icon,
    .big-icon,
    .big-icon:visited,
    .service .icon,
    .close:hover,
    .close:focus,
    .img-thumbnail:hover .bg-images i:before,
    .box-404 h1,
    .gallery-images:hover .bg-images i:before,
    .features-block .header-box .icon-box,
    .features-block .header-box,
    .sidebar .newsletter input:focus + .submit,
	.sidebar .section .selected .close:hover,
    .package .title a,
    .package .price-box .price,
    .package .price-box .icon,
    .pricing .title a,
    .pricing .options li span,
	.pricing .options li.active {
	  color: #ef7f1a;
	}
	.pricing .bottom-box .more {
	  color: rgba(0,152,202,.7);
	}
	.pricing .options li {
	  color: rgba(0,152,202,.4);
	}
	.phone-header a svg path,
	.search-header a svg path,
	.product .actions a svg path,
    .product-remove:hover path,
    .sidebar .wishlist .add-cart:hover path,
    .header .cart-header .dropdown-toggle .icon svg path,
    .search-active .search-submit svg path,
    .new-checkbox svg polygon,
	.product-bottom .related-products li .button-box .wishlist:hover svg path,
	.jslider .jslider-pointer svg path,
	.rating-box .rating svg polygon {
	  fill: #ef7f1a;
	}
    .carousel-box .pagination a.selected,
    .banner-set .pagination a.selected {
      background: #ccc;
	  background: rgba(0,0,0,.3);
    }
	@media (max-width: 979px) {
	  .header .primary .navbar .nav > .parent.active > a,
	  .header .primary .navbar .nav > .parent.active:hover > a,
	  .header .primary .navbar .nav .open-sub span,
	  .header .primary .navbar .btn-navbar .icon-bar,
	  .header.header-two .primary .navbar .btn-navbar.collapsed .icon-bar,
	  .accordion-tab > .active > a,
	  .accordion-tab > .active:hover > a,
	  .products-tab .accordion-tab > .active > a,
	  .products-tab .accordion-tab > .active:hover > a {
		background-color: #ef7f1a;
	  }
	}
	.navbar-inverse .brand,
	.navbar-inverse .nav > li > a,
	.btn-group.btn-select .dropdown-toggle,
	.product .product-hover,
	.employee .employee-hover,
	.slider .slid-content{
	  color: #fff;
	}
	.product .product-hover ul li {
	  background-image: url("img/svg/check-icon-white.svg"), none;
	}
  </style>
  
  <!--[if IE]>
	<link rel='stylesheet' href="css/ie/ie.css">
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if IE 9 ]>
    <link rel='stylesheet' href="css/ie/ie9.css">
  <![endif]-->
</head>
<body>
<div class="page-box">
<div class="page-box-content">

<?php include 'header.php'; ?>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.html">Home</a> <span class="divider">/</span></li>
      <li class="active">Recipes</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->



<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Recipes</h1>
    </div>	
  </header>
  <div class="container">
    <div class="row">
      <article class="content span12">
		<div class="row">
		  <div class="clearfix"></div>
		  <div class="span6 bottom-padding">
			<div class="accordion" id="accordion2">
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					Recipe 1 : Lemony Aloe Vera 
				  </a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
				  <div class="accordion-inner">
					<h6>Ingredients</h6>
					<ul style="margin-left: 5%;">
					 <li>1 Cucumber</li>
					 <li>1 Apple</li>
					 <li>1 Lemon</li>
					 <li>2 Cans - ALOR Aloe Vera Juice (without pieces)</li>
					</ul>
					<h6>Method</h6>
					<ul style="margin-left: 5%;">
					 <li>Blend the apple and the cucumber together </li>
					 <li>Add in the lemon juice</li>
					 <li>Add this mixture in the Alor Aloe Vera Juice. </li>
					 <li>Add some ice cubes and enjoy chilled! </li>
					</ul>
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					Recipe 2: Healthy Aloe Vera 
				  </a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
				  <div class="accordion-inner">
					<h6>Ingredients</h6>
					<ul style="margin-left: 5%;">
					 <li>2 Carrots </li>
					 <li>2 Apples</li>
					 <li>1 Orange, peeled</li>
					 <li>2 Cans – ALOR Aloe Vera Juice</li>
					</ul>
					<h6>Method</h6>
					<ul style="margin-left: 5%;">
					 <li>Cut the apples, carrots and orange into small pieces</li>
					 <li>Blend them together into a juice</li>
					 <li>Then add this juice mixture into the ALOR Aloe Vera Juice</li>
					 <li>Enjoy your fruity, healthy drink chilled with loads of ice! </li>
					</ul>
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					Recipe 3: Coconut Magic
				  </a>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
				  <div class="accordion-inner">
					<h6>Ingredients</h6>
					<ul style="margin-left: 5%;">
					 <li>1 cup watermelon (154 gms / 5.4 oz approx) </li>
					 <li>1 Lemon </li>
					 <li>2 Cans - ALOR Coconut water with coconut chunks </li>
					</ul>
					<h6>Method</h6>
					<ul style="margin-left: 5%;">
					 <li>Slice the watermelon into small pieces</li>
					 <li>Add the watermelon pieces into the ALOR Coconut water with coconut chunks </li>
					 <li>Add a dash of lemon </li>
					 <li>Serve chilled and enjoy the exotic taste of coconuts on a hot summer day. </li>
					</ul>
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefour">
					Recipe 4: Coconut and Strawberries
				  </a>
				</div>
				<div id="collapsefour" class="accordion-body collapse">
				  <div class="accordion-inner">
					<h6>Ingredients</h6>
					<ul style="margin-left: 5%;">
					 <li>1 cup strawberries (154 gms / 5.4 oz approx) </li>
					 <li>2 Cans - ALOR Coconut water with coconut chunks </li>
					</ul>
					<h6>Method</h6>
					<ul style="margin-left: 5%;">
					 <li>Slice the strawberries into small pieces</li>
					 <li>Add it into the ALOR Coconut water with coconut chunks </li>
					 <li>Serve super chilled! </li>
					</ul>
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive">
					Recipe 5: Refreshing Orange Drink 
				  </a>
				</div>
				<div id="collapsefive" class="accordion-body collapse">
				  <div class="accordion-inner">
					<h6>Ingredients</h6>
					<ul style="margin-left: 5%;">
					 <li>1 cup strawberries (154 gms / 5.4 oz approx) </li>
					 <li>2 Cans - ALOR Orange Nectar with Mandarin pieces A dash of ginger </li>
					</ul>
					<h6>Method</h6>
					<ul style="margin-left: 5%;">
					 <li>Slice the strawberries into small pieces</li>
					 <li>Add it into the ALOR Orange Nectar with Mandarin pieces </li>
					 <li>Serve super chilled with just a dash of ginger!</li>
					</ul>  
				  </div>
				</div>
			  </div>
			</div>	
		  </div>
		  <div class="span6 bottom-padding">
			<img src="img/content/portfolio-4.jpg" alt="Recipes Image">
			
			
		  </div>
		<div class="clearfix"></div>
		</div>
      </article><!-- .content -->
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