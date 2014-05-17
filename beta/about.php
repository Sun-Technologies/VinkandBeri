<!DOCTYPE html>
<html>
<head>
  <title>About Us | Vink & Beri LLC</title>
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
      <li class="active">About Us</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<div id="slider" class="slider load">
  <div class="container1">
    <div class="row">
      <div class="sliders-box">
		<div class="slid span12">
		  <img class="slid-img" src="img/content/slide-1.jpg" height="100%" alt="">
		  <div class="span4 slid-content">
			<h1>Integration & Automation<br> technology to fit any<br> lifestyle</h1>
			<p class="descriptions">At the touch of a button, your drapes or blinds will open and close, your lights turn on and off, your IPod plays music throughout the home!</p>
		  </div>
		</div>
		
		<div class="slid span12">
		  <img class="slid-img" src="img/content/slide-2.jpg"  height="100%" alt="">
		  <div class="span4 slid-content">
			<h1>Integration & Automation<br> technology to fit any<br> lifestyle</h1>
			<p class="descriptions">At the touch of a button, your drapes or blinds will open and close, your lights turn on and off, your IPod plays music throughout the home!</p>
		  </div>
		</div>
		
		<div class="slid span12">
		  <img class="slid-img" src="img/content/slide-3.jpg"  height="100%" alt="">
		  <div class="span4 slid-content">
			<h1>Automation & Integration<br> technology to fit any<br> lifestyle</h1>
			<p class="descriptions">At the touch of a button, your drapes or blinds will open and close, your lights turn on and off, your IPod plays music throughout the home or business whatever suits your needs!</p>
		  </div>
		</div>
	  </div><!-- .sliders-box -->

      <div class="span4 slider-nav">
		<div class="nav-box">
		  <a class="next" href="#">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			  width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
			  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#838383" points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "/>
			</svg>
		  </a>
		  <a class="prev" href="#">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			  width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
			  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#838383" points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "/>
			</svg>
		  </a>
		  <div class="pagination switches"></div>	
		</div>
      </div>
    </div>
  </div>
</div><!-- #slider -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">About Us</h1>
    </div>	
  </header>
  <div class="container">
    <div class="row">
      <article class="content span12">
		<p>Vink and Beri LLC (V&B) is a company with strong will and aspirations to shape and define the future of food products. The trendy moves of the company’s rare natural food products had set new consumer trends in the industry.  V&B is US arm of TGI group, providing a wide range of natural nutritious food products. TGI group is a leading player in food products having operations in 11 countries in Europe, Asia and Middle East, Africa besides US. V&B is headquartered at Montgomeryville, PA. The company products provide an exotic taste with a blend of health, stamina and fun created from natural resources. Enduring its mission, V&B’s   decisions drive to sustain quality. As the company’s actions are chosen among several alternative possibilities of delicious food products with a top priority for quality nutrition, it makes people enjoy and rejoice whole day long. </p>
		<div class="row">
		  <div class="clearfix"></div>
		  <div class="span6 bottom-padding">
			<div class="title-box">
			  <h2 class="title">Who Is Vink & Beri</h2>
			</div>
			<div class="accordion" id="accordion2">
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					The Driving Strengths
				  </a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
				  <div class="accordion-inner">
					The driving motivational force behind V&B is the strong leadership team with total commitment, deep industry knowledge, capability, vision and values. The successful decision-making of the leadership team aided in yielding food products in at par with people preferences laying a strong foundation for the company. (Their focus in applying ideas had powered the company with exact formulations which people seek for. V&B’s continuous efforts for investments in R&D of products and packing has brought (them endurance and sustainability in the industry. V&B stands tall with the team work of the leadership (and employees succeeding continuously in reaching company’s objectives .The successful march towards the goal had strengthened is in line with the mission of the company. It has raised the bar for V&B towards safeguarding eco-friendly and social responsibility in adding joy to people’s lives with as an identity.
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					Our Company Mission
				  </a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
				  <div class="accordion-inner">
					Creatively made available natural, healthy desirable food products in an environmentally Sustainable and socially responsible way 
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					The Product Portfolio
				  </a>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
				  <div class="accordion-inner">
					The company’s portfolio has a range of products made for continued consumer satisfaction using natural resources.  The products cater the need of both domestic and global market, making it a fast-moving organization. The company’s ALOR products are showcase of natural foods in a modern way. ALOR has two variants- Aloe Vera Juice Drink with Aloe Vera Pieces and Aloe Vera Pieces in Syrup.  Aloe Vera contains over 200 active components including vitamins, amino acids, minerals, enzymes, polysaccharides and fatty acids. These benefits can be enjoyed in a fun way with the delicious and tasty ALOR Aloe Vera products. ALOR Coconut Water with and without Coconut Chunks is naturally enriched with potassium, electrolytes and minerals replenish hydration levels within the body. ALOR Orange Juice is made from Orange pulp from selected Brazilian oranges blended with real mandarin pieces from the famous Jeju Island of South Korea. The company is moving forward accomplishing its vision to make available the natural foods to the the consumers in a healthy way. 
				  </div>
				</div>
			  </div>
			  
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefour">
					Commitment 
				  </a>
				</div>
				<div id="collapsefour" class="accordion-body collapse">
				  <div class="accordion-inner">
					The company operates with an idea that, the food products should be linked harmoniously to the lifestyle to raise the spirits each and every day.   The commitment has resulted in natural food products that people nourish and enjoy making it a part of their lifestyle.  This rejoicing satisfaction of the people helps the company in making more enjoyable, healthy and balanced food products.
				  </div>
				</div>
			  </div>
			</div>	
		  </div>
		  <div class="span6 bottom-padding">
			<div class="title-box">
			  <h2 class="title">Meet Our Management</h2>
			</div>
			<!--<img src="img/content/whoweare.jpg" alt="">-->
			
			<div class="tabs">		  
			
				<ul class="nav nav-tabs">			
					<li class="active"><a data-toggle="tab" href="#services">Our Team</a></li>
					<li><a data-toggle="tab" href="#features">Meet CEO</a></li>			
					<li><a data-toggle="tab" href="#text">Meet Vice President</a></li>		 
				</ul>		 

			<div class="tab-content">			
						
						<div id="services" class="tab-pane active fade in">			 
						<div class="service">	<img alt="" src="img/content/whoweare.jpg" width="90%" align="left" hspace="20">	  </div>
						</div>						
						
						<div id="features" class="tab-pane fade in">	
						
						<div class="service">		<img alt="" src="img/content/team-1.jpg" width="160" align="left" hspace="20" vspace="10">			<h6 class="title"><a href="#">Mr. CEO, Vink and Beri</a></h6>					<div class="text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid. <br> <br> Perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque blanditiis ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque blanditiis ut.</div>			  </div> 

						</div>	
						
						<div id="text" class="tab-pane fade in">
						<div class="service">
						<img alt="" src="img/content/team-2.jpg" width="160" align="left" hspace="20" vspace="10">		
						<h6 class="title"><a href="#">Mr. Vice President, Vink and Beri</a></h6>					
						<div class="text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid. <br> <br> Perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque blanditiis ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos itaque sit qui atque? Deserunt ullam voluptatum ducimus tempore fugiat sint amet vero repellat omnis totam reiciendis nulla facilis quam cupiditate cum natus voluptates iure quidem esse ex blanditiis doloremque impedit aliquid perspiciatis eaque rem reprehenderit quia. Delectus non pariatur numquam nulla nostrum libero nesciunt explicabo officia similique eaque blanditiis ut.</div>				</div>		  </div> </div>		</div>
			
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