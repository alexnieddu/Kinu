<!DOCTYPE html>
<html lang="en">

<head>

	<?php
// Connecting MySQL-Db
$ip_m2b = "...";
$ip_m2b = "localhost";
$db_link = mysql_connect( ... );
$db_sel = mysql_select_db( ... )
	or die ("Database selection failed.");


$timestamp = time();

?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Web App that recommends you movies and tv series of like minded people.">
    <meta name="author" content="">
	<meta name="theme-color" content="#000000" />

    <title>Kinu App - Individual Movie and TV Series Recommendations</title>
	
	<!-- OGP -->
	<link rel="shortcut icon" href="./img/kinu-favicon.png" type="image/x-icon" >
	<meta property="og:title" content="Kinu - Individual Movie and TV Series Recommendations" >
	<meta property="og:url" content="https://kinu-app.com" >
	<meta property="og:image" content="./img/bg-sp.png" />
	<meta property="og:site_name" content="Kinu" >
	
	<!-- iOS WebApp -->
	<link rel="apple-touch-icon-precomposed" href="./img/kinu-icon-app.png"/>
	<link rel="apple-touch-icon" href="./img/kinu-icon-app.png">
	<link rel="apple-touch-startup-image" href="./img/bg.png" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="default" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" href="./styleIn.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	.padding
	{
		padding-top:10%;
	}
	.content-section-b img
	{
		margin:0 auto;
	}
	img.about-pic
	{
		border-radius:100%;
		border:solid 2px white;
		margin:0 0 20px 0;
	}
	.iFrame
	{
		position:fixed;
		bottom: 0;
		right: 0;
		width:100%;
		height:100%;
		background:black;
		opacity:.7;
		z-index: 999;
		display:none;
	}
	#iframeBtnDisplay
	{
		position:fixed;
		background:#252525;
		top: 20%;
		right: 30%;
		width:40%;
		height:60%;
		z-index: 999;
		border-radius: 20px;
		border: none;
		opacity:1;
		display:none;
	}
		
	@media(max-width:467px) {

		#iframeBtnDisplay
			{
				position:fixed;
				background:#252525;
				top: 20%;
				right: 10%;
				width:80%;
				height:60%;
				z-index: 999;
				border-radius: 20px;
				border: none;
				opacity:1;
				display:none;
			}
	}
	.banner {
		-webkit-animation: myslider 15s infinite; /* Chrome, Safari, Opera */
    	animation: myslider 15s infinite;
		background-position: top;
		//background-size: auto;
	}
	/* Chrome, Safari, Opera */
	@-webkit-keyframes myslider {
		50% {background-position: bottom;}
	}

	/* Standard syntax */
	@keyframes myslider {
		50% {background-position: bottom;}
	}
	</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="./"><img src="./img/kinu.png" width="50" alt="Kinu Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#features">Features</a>
                    </li>
                    <li>
                        <a href="#try">Try</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#signup">Get the App</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1><img class="kinu-icon" src="./img/kinu-icon.png" alt="Kinu Icon" width="100"><br>KINU</h1>
                        <h3>Individual Movie and TV Series Recommendations</h3>
                        <p style="height:10px;"></p>
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#try" class="btn btn-default btn-lg"><span class="network-name">Let's Try</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
	
	<div class="content-section-a" style="box-shadow: 0 0 50px black;">

        <div class="container">

            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-heading">Movies and TV Series You Should Watch</h2>
                    <p class="lead">Kinu <strong>[<em>'ki:nu</em>]</strong> is a web app<br>designed for mobile devices that recommends you <br>movies and tv series of people with same taste like you.</p>
                    <p class="lead">You will rate movies and tv series to determine your likes.<br>On this basis the app matches users with similar taste<br>and shows you their favorite movies and tv series<br>you haven't seen.</p>
					<a href="#features" class="btn btn-default btn-lg"><span class="network-name">How To</span></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
    
    
	<a  name="features"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 padding">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Rate About 10 Movies</h2>
                    <p class="lead">First of all we get to know your individual movie and tv series preferences.<br>
						So we are able to find users with similar taste as yours.</p>
					<p class="lead">In order to do so <strong>rate</strong> a bunch of random movies and tv series.</p>
					<p class="lead">Unknown movies or tv series can be skipped.</p>
					<a href="#howto1" class="btn btn-default btn-lg"><span class="network-name">Next</span></a>
				</div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/sp-rate.png" alt="Kinu App Rate View">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="howto1"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 padding">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Get Details</h2>
                    <p class="lead">Unsure about a specific movie or tv series? Tap on the poster.</p>
					<p class="lead ">We provide basic informations like trailer, genres, actors and directors.</p>
					<p class="lead ">Additionally you can add a movie to your watchlist to see it later.<br>Alternative you can choose to don't show this movie again.</p>
					<!--<p class="lead text-muted">Coming eventually: IMDb ratings</p>-->
					<a href="#howto2" class="btn btn-default btn-lg"><span class="network-name">Next</span></a>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/sp-detail.png" alt="Kinu App Movie Details View">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

	<a  name="howto2"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6 padding">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Your Movie and TV Series Recommendations</h2>
                    <p class="lead">Finished your ratings?</p>
					<p class="lead">Take a look at <strong>Kinu</strong> and watch your individual movie and tv series recommendations.<br>Tap on the poster for details.</p>
					<p class="lead">Enjoy!</p>
					<p class="lead">Then continue rating.</p>
					<a href="#try" class="btn btn-default btn-lg"><span class="network-name">Let's Try</span></a>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/sp-suggest.png" alt="Kinu App Movie Recommendations View">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
	

	<a  name="try"></a>
    <div class="content-section-a">
		
        <div class="container">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-center">Try It</h2>
				<p class="lead">Like or Dislike some movies or tv series and press the <strong>Refresh-Button</strong> to get your recommendations.</p>
				<p class="lead text-muted">Use the web app to save your ratings.</p>
				<a class="btn btn-default btn-lg"><span class="network-name refresh"><span class="glyphicon glyphicon-refresh"></span> Refresh</span></a>
				<br>
				<br>
				<div class="row cols">
				</div>
			</div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    
	<a  name="about"></a>
	<div class="content-section-b">

        <div class="container">

            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-heading">About</h2>
					<img class="about-pic" width="90" src="./img/me.JPG" alt="Founder and Developer of Kinu App">
                    <p class="lead">Hey, I'm Alex,<br>
						a passionate film lover and an independent developer.</p>
					<p class="lead">I think that friends and like minded people<br>can recommend the best movies and tv series to you.<br>
						So I created Kinu,<br> a non-commercial web app that recommends you movies and tv series<br> you haven't watched yet of people with same taste in movies.</p>
					<p class="lead">Feel free to send any comments or feedback to <a href="mailto:me@kinu-app.com" style="color:white; text-decoration:underline; font-weight:bold;">me</a>.</p>
					<a href="#signup" class="btn btn-default btn-lg"><span class="network-name">Get the App</span></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
    
    <a  name="signup"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 padding">
					<h3></h3>
                    <h2 class="section-heading">Interested?</h2>
					<p class="lead"></p>
					<p class="lead">Get the App for <strong>free</strong>.</p>
					<p class="lead">
						<a href="https://play.google.com/store/apps/details?id=com.themovieverse.kinu" target="_blank">
							<img class="img-responsive" src="https://kinu-app.com/img/playstore.png" alt="Google Play Store">
						</a>
					</p>
					<p class="lead">or</p>
					<p class="lead">
						<a href="./app" class="btn btn-default btn-lg"><span class="network-name">Sign Up for WebApp</span></a>
					</p>
					<p class="lead">
						<a href="./app/login1.php" style="color:white">Already have an account? <strong>Log In</strong>.</a>
					</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                    <img style="margin:0 auto;" class="img-responsive" src="img/sp-suggest1.png" alt="Kinu App Alternative Movie Recommendations View">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer style="background:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <ul class="list-inline">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#features">Features</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#try">Try</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#signup">Get the App</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Kinu App is powered by <a>themovieverse.com</a>.<br>Copyright &copy; Kinu App 2018. All Rights Reserved</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6" style="text-align:right">
                    <p class="copyright text-muted small"><a href="./imprint.html">Imprint</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- iFrame -->
    <div class="iFrame"></div><iframe src="detail.php" id="iframeBtnDisplay"></iframe>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Disappear -->
    <script>
    var film_likes = [];
    var film_dislikes = [];
    var film_arr = "";
    var film_arr_dis = "";
	let dur = 2;
    $(document).ready(function() {
    	reload(getCookie("filmID"), getCookie("disfilmID"));
    	
    	$(".refresh").click(function() {
			reload(getCookie("filmID"), getCookie("disfilmID"));
		});
    	
		$(".like").click(function() {
			$(this).parent().parent().parent().fadeTo(dur, 0.6);
			var id = $(this).parent().parent().parent().attr("id");
			film_likes.push(id);
			film_arr = film_likes.join("_");
			setCookie("filmID", film_arr);
			$(this).parent().addClass("btn-primary");
		});
		$(".dislike").click(function() {
			$(this).parent().parent().parent().fadeTo(dur, 0.6);
			var id = $(this).parent().parent().parent().attr("id");
			film_dislikes.push(id);
			film_arr_dis = film_dislikes.join("_");
			setCookie("disfilmID", film_arr_dis);
			$(this).parent().addClass("btn-primary");
		});
		
		
		// Iframe Click
		$(".btnDisp").click(function() {
			var id = $(this).parent().parent().attr("id");
			$("#iframeBtnDisplay").attr('src', "./detail.php?film_id=" + id);
			
			$(".iFrame").fadeIn();
			$("#iframeBtnDisplay").fadeIn();
		});
		
		$(".iFrame").click(function() {
			$(".iFrame").fadeOut();
			$("#iframeBtnDisplay").fadeOut();
		});
		
		
		$(".item").hover(
			function() {
				$(this).children(".rating").show();
			}, function() {
				$(this).children(".rating").hide();
		});
		
		
		function reload(ids, dis) {
			$.ajax({
			  method: "GET",
			  url: "./ajax_try.php",
			  dataType: "html",
			  data: { films: ids, diss: dis },
			  success: function(items) {
					var el = jQuery(items);
					$('.cols').html(el).hide().fadeIn(1000);
				}
			}).done( function() {
				$(".like").click(function() {
					$(this).parent().parent().parent().fadeTo(dur, 0.6);
					var id = $(this).parent().parent().parent().attr("id");
					film_likes.push(id);
					film_arr = film_likes.join("_");
					setCookie("filmID", film_arr);
					$(this).parent().addClass("btn-primary");
				});
				$(".dislike").click(function() {
					$(this).parent().parent().parent().fadeTo(dur, 0.6);
					var id = $(this).parent().parent().parent().attr("id");
					film_dislikes.push(id);
					film_arr_dis = film_dislikes.join("_");
					setCookie("disfilmID", film_arr_dis);
					$(this).parent().addClass("btn-primary");
				});
				
				
				// Iframe Click
				$(".btnDisp").click(function() {
					var id = $(this).parent().parent().attr("id");
					$("#iframeBtnDisplay").attr('src', "./detail.php?film_id=" + id);
			
					$(".iFrame").fadeIn();
					$("#iframeBtnDisplay").fadeIn();
				});
		
				$(".iFrame").click(function() {
					$(".iFrame").fadeOut();
					$("#iframeBtnDisplay").fadeOut();
				});
		
		
				$(".item").hover(
					function() {
						$(this).children(".rating").show();
					}, function() {
						$(this).children(".rating").hide();
				});
			});
		}
		
		
		function setCookie(cname, cvalue) {
			var d = new Date();
			d.setTime(d.getTime() + (7*24*60*60*1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
		
	});
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});
	});
	</script>

</body>

</html>
