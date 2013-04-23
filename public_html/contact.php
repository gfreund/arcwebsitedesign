<!DOCTYPE HTML>  
<html>  
<head> 
    <meta charset="utf-8">
    <title>Custom Business Websites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
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
    </style>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
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
				<li class="active"><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
	
      <div class="hero-unit">
	  
        <h1 style="font-size:55px;">Contact Us</h2>
        <p class="lead">For a free quote or any questions contact us with the form below</p>
        <!-- <a class="btn btn-large btn-success" href="contact.php">Get started today</a> -->
      </div>
	 

      <hr />

      <!-- row of info -->
      <div class="row-fluid">
        <div class="span5">
          <h2>Our Contact Information</h2>
          <p>Office: <span class="muted">678.327.6066</span></p>
		  <p>Email:  <span class="muted">&nbsp;geoff@arcwebsitedesign.com</span></p>
		  <p>Mail:   <span class="muted">&nbsp;&nbsp;&nbsp;295 Theodore Cox Circle<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Canton, GA 30114</span></p>
		  <br />
        </div>
		<div class="span6 offst1">
		<form method="POST" action="contact-form-submission.php" class="form-horizontal">  
            <div class="control-group">  
                <label class="control-label" for="input1">Name</label>  
                <div class="controls">  
                    <input type="text" name="contact_name" id="input1" placeholder="Your name">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input2">Email Address</label>  
                <div class="controls">  
                    <input type="text" name="contact_email" id="input2" placeholder="Your email address">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input3">Message</label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="8" class="span12" placeholder="Give us a brief description of what you would like us to do."></textarea>  
                </div>  
            </div>  
            <div class="form-actions">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Send</button>  
            </div>  
        </form>
		
          </div> 
		</div>  
   <hr />
      <div class="row-fluid">
          <div class="footer">
        <p>&copy; Arc Website Design 2013</p>
      </div>
          </div>
      
    </div>	
          
</body>  
</html>  