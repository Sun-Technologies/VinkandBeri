<!DOCTYPE html>
<html>
<head>
  <title>Blog \ Progressive — Responsive Multipurpose HTML Template</title>
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="img/favicon.ico" rel="shortcut icon">

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
	  background-color: #0098ca;
	}
    .slider .slider-nav {
      background-color: rgba(0,152,202,.97);
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
      background-color: #0098ca;
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
	  color: #0098ca;
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
	  fill: #0098ca;
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
		background-color: #0098ca;
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
<body class="fixed-header">
<div class="page-box">
<div class="page-box-content">
<?php include 'header.php'; ?>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.html">Home</a> <span class="divider">/</span></li>
      <li class="active">Our Blog</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Our Blog</h1>
    </div>	
  </header>
  <div class="container">
    <div class="row">
      <div class="content blog span9">
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Excepteur sint occaecat cupidatat</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Phasellus Vitae Vestibulum</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Excepteur sint occaecat cupidatat</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Phasellus Vitae Vestibulum</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Excepteur sint occaecat cupidatat</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Phasellus Vitae Vestibulum</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Excepteur sint occaecat cupidatat</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Phasellus Vitae Vestibulum</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Excepteur sint occaecat cupidatat</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<article class="post">
		  <h2 class="entry-title"><a href="blog-view.html">Phasellus Vitae Vestibulum</a></h2>
		  <div class="entry-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		  </div>
		  <footer class="entry-meta">
			<span class="autor-name">Mike Example</span>,
			<span class="time">03.11.2012</span>
			<span class="separator">|</span>
			<span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#">3 comment(s)</a>
			</span>
		  </footer>
		</article><!-- .post -->
		
		<div class="pagination pagination-small margin-top">
		  <ul>
			<li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
			<li class="active"><span>1</span></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><span>...</span></li>
			<li><a href="#">9</a></li>
			<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
		  </ul>
		  <i class="pagination-text">Displaying 1 to 10 (of 100 posts)</i>
		</div><!-- .pagination -->
      </div><!-- .content -->
	  
      <div id="sidebar" class="sidebar span3">
		<aside class="list">
		  <header>
			<h3>Blog Categories</h3>
		  </header>
		  <ul>
			<li><a href="#">Entertainment</a></li>
			<li><a href="#">Fashion</a></li>
			<li><a href="#">Sports</a></li>
			<li><a href="#">Vacation</a></li>
			<li><a href="#">Movies</a></li>
			<li><a href="#">Food</a></li>
		  </ul>
		</aside><!-- .list -->
		
		<aside class="list">
		  <header>
			<h3>Archives</h3>
		  </header>
		  <ul>
			<li><a href="#">August 2012</a></li>
			<li><a href="#">September 2012</a></li>
			<li><a href="#">October 2012</a></li>
			<li><a href="#">November 2012</a></li>
			<li><a href="#">December 2012</a></li>
		  </ul>
		</aside><!-- .list -->
		
		<aside class="tags">
		  <header>
			<h3>Tags</h3>
		  </header>
		  <ul class="clearfix">
			<li><a href="#">california</a></li>
			<li><a href="#">canada</a></li>
			<li><a href="#">canon</a></li>
			<li><a href="#">cat</a></li>
			<li><a href="#">chicago</a></li>
			<li><a href="#">christmas</a></li>
			<li><a href="#">mars</a></li>
			<li><a href="#">church</a></li>
			<li><a href="#">city</a></li>
			<li><a href="#">clouds</a></li>
			<li><a href="#">color</a></li>
			<li><a href="#">concert</a></li>
			<li><a href="#">dance</a></li>
			<li><a href="#">day</a></li>
			<li><a href="#">dog</a></li>
			<li><a href="#">travels</a></li>
		  </ul>
		</aside><!-- .tags -->
	  </div><!-- .sidebar -->
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->

<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="span3 social">
          <h3>Follow Us</h3>
          <p>Follow us in social media</p>
          <a class="sbtnf sbtnf-rounded color color-hover icon-facebook" href="#"></a>
          <a class="sbtnf sbtnf-rounded color color-hover icon-twitter" href="#"></a>
          <a class="sbtnf sbtnf-rounded color color-hover icon-gplus" href="#"></a>
          <a class="sbtnf sbtnf-rounded color color-hover icon-linkedin" href="#"></a>
        </div>
        <div class="span3 newsletter">
          <h3>Newsletter</h3>
          <p>Sign up for newsletter</p>
          <form>
            <input class="input-block-level" type="email">
            <button class="submit"><i class="fa fa-arrow-circle-o-right"></i></button>
          </form>
        </div>
        <div class="span3 nav-box">
          <h3>Information</h3>
		  <nav>
			<ul>
			  <li><a href="#">About us</a></li>
			  <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Terms & Condotions</a></li>
			  <li><a href="#">Secure payment</a></li>
			</ul>
		  </nav>
        </div>
        <div class="span3 nav-box">
          <h3>My account</h3>
		  <nav>
			<ul>
			  <li><a href="#">My account</a></li>
			  <li><a href="#">Order History</a></li>
			  <li><a href="#">Wish List</a></li>
			  <li><a href="#">Newsletter</a></li>
			</ul>
		  </nav>
        </div>
      </div>
    </div>
  </div><!-- .footer-top -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="span3 copyright">Copyright &copy; ItemBridge Inc., 2013</div>
        <div class="span3 phone">
          <div class="footer-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
			   c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
				M11.001,12H5V2h6V12z"/>
			</svg>
		  </div>
          <strong class="title">Call Us:</strong> +1 (877) 123-45-67 <br>
          <strong>or</strong> +1 (777) 123-45-67
        </div>
        <div class="span3 address">
          <div class="footer-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <g>
				<g>
				  <path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
					c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
					c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"/>
				</g>
				<g>
				  <circle fill="#c6c6c6" cx="8.001" cy="6" r="2"/>
				</g>
			  </g>
			</svg>
		  </div>
          49 Archdale, 2B Charleston 5655, Excel Tower<br> OPG Rpad, 4538FH
        </div>
        <div class="span3">
          <a href="#" class="up pull-right"><i class="icon-arrow-up icon-white"></i></a>
        </div>
      </div>
    </div>
  </div><!-- .footer-bottom -->
</footer>
<?php include 'footer-js.php'; ?>
</body>
</html>