<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Website Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of recent creations by Arc Website Design">
    <meta name="author" content="Geoff Freund">

    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
        background-image:url('img/textured_paper.png');
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
     /* Wrapper */
.animate-wrap {
  position: relative;
 
  padding: 15px 0; 
  background: -moz-radial-gradient(50% 50%, #aa1e14, #fff); 
  background: -webkit-radial-gradient(50% 50%, #aa1e14, #fff); 
  background: -o-radial-gradient(50% 50%, #aa1e14, #fff); 
  background: -ms-radial-gradient(50% 50%, #aa1e14, #fff); 
  background: radial-gradient(50% 50%, #aa1e14, #fff); 
  -webkit-perspective: 1000;
     -moz-perspective: 1000;
          perspective: 1000;
}
 
/* Inputs */
.animate-wrap input {
  display: none;
}
.animate-wrap [type="radio"]:checked + .animate {
  -webkit-transform: rotateY(180deg);
     -moz-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
 
/* Image-Wrapper */
.animate {
  -webkit-transform-style: preserve-3d;
     -moz-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transition: all 0.5s ease-out;
     -moz-transition: all 0.5s ease-out;
          transition: all 0.5s ease-out;
}
 
/* Labels */
label {
  position: absolute; top: 0; left: 0; z-index: 2;
  -webkit-backface-visibility: hidden;
     -moz-backface-visibility: hidden;
          backface-visibility: hidden;
}
 
.back {
  -webkit-transform: rotateY(180deg);
     -moz-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.front {
  z-index: 1;
} 
     
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://twitter.github.com/bootstrap/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Arc Website Design</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="business-websites.php">Business Websites</a></li>
                    <li><a href="search-engine-optimization.php">Search Engine Optimization</a></li>
                    <!-- <li><a href="online-resume-cv.php">Online Resumes/CVs</a></li> -->
                    </ul>
                </li>
                <li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="about-us.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
	  
      <div class="hero-unit">
	  
        <h1 style="font-size:55px;">Portfolio</h2>
        <p class="lead">A few examples of our recent website design projects for a variety of businesses</p>
        <a class="btn btn-large btn-success" href="contact.php">Get started today</a>
      </div>
	  

      <hr />

      <!-- Row of columns 1 -->
      <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
			  			  
			  <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-11" name="animation" checked="true">
  <input type="radio" id="ani-12" name="animation">
 
  <div class="animate">
    <label for="ani-12" class="front">
      <img src="img/employto.png" alt="EmployTo" width="265" class="img-rounded">
    </label>
 
    <label for="ani-11" class="back">
      <p>EmployTo:</p>
	  <p>Job searching and professional networking exclusively for college students and recent graduates with a .EDU email address</p>
    </label>
  </div>
</div></div> 
			   
                
                  <div class="caption">
                    <h4>EmployTo</h4>
                    <p>This is a job search and professional networking site I collaborated on that is specifically for college students and recent graduates with a .EDU email address to get their career started.</p>
                    <p><a href="http://www.employto.com" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div>
                
             
              </li>
			  <li class="span4">
			  <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-20" name="animation" checked="true">
  <input type="radio" id="ani-21" name="animation">
 
  <div class="animate">
    <label for="ani-21" class="front">
      <img src="img/soverse.png" alt="SoVerse" width="265" class="img-rounded">
    </label>
 
    <label for="ani-20" class="back">
      <p>SoVerse:</p>
	  <p>The fastest and easiest way to build your own professional business website</p>
    </label>
  </div>
</div></div> 
			   
                
                  <div class="caption">
                    <h4>Soverse</h4>
                    <p>This site was a collaborative effort where I performed a majority of the copy-writing and participated in the design, layout and structuring .</p> <br />
                    <p><a href="http://www.soverse.com" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div></li>
			  
			  <li class="span4">
               <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-17" name="animation" checked="true">
  <input type="radio" id="ani-18" name="animation">
 
  <div class="animate">
    <label for="ani-18" class="front">
      <img src="img/cottages.png" alt="Cottages of Woodstock" width="265" class="img-rounded">
    </label>
 
    <label for="ani-17" class="back">
      <p>Cottages of Woodstock:</p>
	  <p>Woodstocks Premier 50 and up active living community</p>
    </label>
  </div>
</div></div> 
			   
                
                  <div class="caption">
                    <h4>Cottages of Woodstock</h4>
                    <p>The Cottagesof Woodstock is a 55+ senior living community near the heart of historic Woodstock, GA.  This site was built for the two resident agents for the community.</p>
                    <p><a href="http://www.cottagesofwoodstock.com" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div>
			   			   
			   
              </li>
		</div>
      <hr />
<!-- Row of columns 2 -->
	  <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
			   
			   <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-3" name="animation" checked="true">
  <input type="radio" id="ani-4" name="animation">
 
  <div class="animate">
    <label for="ani-4" class="front">
      <img src="img/priority.png" alt="Priority Painting" width="265" class="img-rounded">
    </label>
 
    <label for="ani-3" class="back">
      <p>Priority Painting:</p>
	  <p>Metro Atlanta's most experienced and reliable painting company</p>
    </label>
  </div>
</div></div>
			   
               
                  <div class="caption">
                    <h4>Priority Painting</h4>
                    <p>Priority Painting is a local painting contractor based out of Canton, GA.  They perform commercial and residential work and service the Metro Atlanta area.</p>
                 <br />
                    <p><a href="http://www.prioritypainting.net" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div>
              </li>
			  <li class="span4">
		<!-- end priority painting -->
		
			    <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-5" name="animation" checked="true">
  <input type="radio" id="ani-6" name="animation">
 
  <div class="animate">
    <label for="ani-6" class="front">
      <img src="img/karaoke.png" alt="Karaoke Atlanta" width="265" class="img-rounded">
    </label>
 
    <label for="ani-5" class="back">
      <p>Karaoke Atlanta:</p>
	  <p>Best Place to find Karaoke in the Metro Atlanta area</p>
    </label>
  </div>
</div></div>
			  
               
                  <div class="caption">
                    <h4>Karaoke Atlanta</h4>
                    <p>Karaoke Atlanta is a directory Metro Atlanta karaoke nights and events.  The site also provides a Karaoke DJ referral service for private events and businesses which want to begin karaoke nights.</p>
      
              <p><a href="http://www.karaokeatlanta.net" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div></li>
				
		<!-- end karaoke atlanta -->
              
			  <li class="span4">
               <div class="well" style="min-height:425px;">
			   
			    <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-7" name="animation" checked="true">
  <input type="radio" id="ani-8" name="animation">
 
  <div class="animate">
    <label for="ani-8" class="front">
      <img src="img/bbq.png" alt="BBQ Grill Dr" width="265" class="img-rounded">
    </label>
 
    <label for="ani-7" class="back">
      <p>BBQ Grill Dr:</p>
	  <p>Woodstocks Premier BBQ grill cleaning, repair and sales experts</p>
    </label>
  </div>
</div></div> 
			   
                
                  <div class="caption">
                    <h4>BBQ Grill Dr</h4>
                    <p>This was a site update and restructuring for a local grill sales, repair and cleaning service. This site is used to provide info about grills for sale and other services to potential customers in Metro Atlanta</p><br />
                    <p><a href="http://www.bbqgrilldr.com" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div>
              </li>
		</div>
		<hr />

<!-- flippin pics  -->



<!-- end flippin pics  -->

		<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
               <div class="well" style="min-height:425px;">  
                <div class="thumbnail" style="min-height:200px;">
          
    <div class="animate-wrap">
  <input type="radio" id="ani-9" name="animation" checked="true">
  <input type="radio" id="ani-0" name="animation">
 
  <div class="animate">
    <label for="ani-0" class="front">
      <img src="img/pumpkin.png" alt="Rockin Pumpkins" width="265" class="img-rounded">
    </label>
 
    <label for="ani-9" class="back">
      <img src="img/pumpkin2.png" alt="1 Dollar pumpkin pattern stencils" width="265" class="img-rounded">
    </label>
  </div>
</div></div>
                  
              <div class="caption">
                    <h4>Rockin Pumpkins</h4>
                    <p>This site focuses on Halloween pumpkin carving with popular carving patterns for sale, a how-to page with walkthrough video, and a gallery of recent creations submitted by customers and fans.</p>
                    <p><a href="http://www.pumpkinpatternstencils.com" target="_blank" class="btn btn-primary">Visit Site</a></p>
                  </div>
                </div></div>
              </li></ul></div>
	  
	  <hr />
      <div class="footer">
        <p>&copy; Arc Website Design 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>