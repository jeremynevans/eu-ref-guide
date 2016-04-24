<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<style class="cp-pen-styles">/*Doc setup*/
html,
body{
  position:relative;
  min-height:100vh;
  overflow-y:hidden;
}
body{
background:url(http://www.lirent.net/wp-content/uploads/2014/10/Android-Lollipop-wallpapers-5.jpg);
  background-size:cover;
}

/*component*/
.navbar.slide-tab{
  border:0;
  border-radius:0;
  border-bottom:2px solid #d62400;
  color:#fff;
  min-height:0!important;
  position:relative;
  z-index:2;
}
.navbar.navbar-default.slide-tab{
  background:none;
}
.navbar.slide-tab .navbar-nav{
  text-transform:uppercase;
  letter-spacing:.9px;
  font-weight:600;
  font-size:1.3rem;
  -webkit-transition:background-size .3s;
  background: -webkit-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: -moz-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: -o-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
  background-size:0;
  background-position:0 0;
  background-repeat:no-repeat;
}
.navbar.slide-tab .navbar-nav > li > a,
.navbar.slide-tab .navbar-nav > li > a:hover,
.navbar.slide-tab .navbar-nav > li > a:focus{
  background:none;
  color:inherit;
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;
}
@-webkit-keyframes upTab{
  0%{
    background-position:-50px;
    background-size:0;
   background-position:center 50px;
  }
  100%{
    background-position:0;
    background-size:200px;
    background-position:center center;
  }
}

.navbar.slide-tab .navbar-nav > li.active > a{
  color:#fff;
background: -webkit-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: -moz-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: -o-linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background: linear-gradient(rgba(214,36,0,1) 1%, rgba(214,36,0,1) 100%);
background-position:0 0;
  background-repeat:no-repeat;
  -webkit-animation:upTab .3s;
}
.navbar.slide-tab .navbar-nav > li a{
  padding:2rem 3rem;
}

.layer{
  background:rgba(0,0,0,0.8);
  height:100%;
}

.container-fluid.scroll{
  overflow-x:scroll;
}
.breakscroll{
  width:500vw; /*swapping to dynamic js*/
  margin:0!important;
}
.breakscroll li{
  display:inline-block!important;
  white-space:nowrap;
}
/*hide scrollbar*/
.invisibar::-webkit-scrollbar {
    height:0px;
}
.control{
  position:absolute;
  right:0;
  top:0;
  background:rgba(0,0,0,0.95);
  height:100%;
  margin:0;
  padding:0;
}
.control li{
  list-style:none;
  float:left;
  padding-top: 10px;
padding-bottom: 10px;
line-height: 28px;
  font-size:1.4em;
  padding-left:15px;
  padding-right:10px;
}
.control li span:not(.muted){
  color:#eee!important;
}
.muted{
  color:#666!important;
  opacity:0.6;
}
.hotspots .hotspot{
  width:50%;
  padding-bottom:50%;
  position:absolute;
  top:0;
  float:left;
  z-index:1;
}
.hotspots .hotspot > .hotspot{
  padding:0;
  height:100%;
  width:10%;
  position:absolute;
  border:0;
  outline:0;
}
.hotspots.verbose .hotspot[data="left"]{
  background:rgba(255, 0, 0, 0.15);
  left:0;
}
.hotspots.verbose .hotspot[data="right"]{
  background:rgba(0, 0, 255, 0.15);
  right:0;
}

/*this is where im tierd and will need to change it*/
.panes.breakscroll{
  width:9999vw!important;
}
.panes > .content{
  min-height:100vh;
  height:100%;
  width:calc(100vw);
  float:left;
}
.dash{
  width:100%;
  overflow:hidden;
  overflow-x:scroll;
  margin-top:-81.4px;
}

.hotspot{
  position:absolute;
  z-index:1;
  top:72px;
  left:0;
  width:100%;
  height:100%;
}
.hotspot > .half{
  width:50%;
  float:left;
  height:100%;
}
.click{
  width:5rem;
  height:100%;
  border:0;
  outline:0;
  opacity:0.0;
}
.half[data="left"] .click{
  float:left;
}
.half[data="right"] .click{
  float:right;
}

.inner{
  margin-top:80px;
}
.slot{
  list-style:none!important;
}
.icon{
  background:#333;
  color:#fff;
  margin:4.1%;
}
</style>


		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<link rel='stylesheet' id='html5blank-css1'  href='http://calm-woodland-73627.herokuapp.com/wp-content/themes/html5blank-stable/bootstrap.min.css' media='all' />

        <script src="http://calm-woodland-73627.herokuapp.com/wp-content/themes/html5blank-stable/js/bootstrap.min.js"></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
