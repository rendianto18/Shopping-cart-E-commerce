<!DOCTYPE html>
<html lang="en">

<head>
  <title>Beranda</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?php echo base_url() ?>assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/custom.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/carousel.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/jquery/jquery-ui.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/demo.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/footer-distributed-with-address-and-phones.css"  rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!-- Custom JS and jquery for these template -->
  <script src="<?php echo base_url() ?>assets/asie/js/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/holder.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- Fixed navbar -->
   <div class="navbar-wrapper">
      <!-- <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url() ?>">AyoVaksin</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="<?php echo base_url() ?>Home/about">Map</a></li>
                <li><a href="<?php echo base_url() ?>Home/index">About</a></li>
                <!- <li class="dropdown">
                  <a href="<?php echo base_url() ?>Home/index" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>Home/index">Action</a></li>
                    <li><a href="<?php echo base_url() ?>Home/index">Another action</a></li>
                    <li><a href="<?php echo base_url() ?>Home/index">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="<?php echo base_url() ?>Home/index">Separated link</a></li>
                    <li><a href="<?php echo base_url() ?>Home/index">One more separated link</a></li>
                  </ul>
                </li> 
              </ul>
            </div>
          </div>
        </div>

      </div> -->
    </div>


      <!-- Carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo base_url() ?>assets/images/banner1.jpeg" alt="First Slide">
            <div class="carousel-caption">
            <h1>Yuk Vaksin!</h1>
              <p>Sukseskan program pemerintah dengan melakukan vaksinisasi, 
                vaksin dilakukan di puskesmas kecamatan masing-masing dan gratis
                segera daftarkan diri anda.
              </p>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>assets/images/banner2.jfif" alt="Second Slide">
            <div class="carousel-caption">
            <h1>Apakah Vaksin Aman?</h1>
              <p>Tentu saja vaksin aman, tetapi ada efek samping
                setelah melakukan vaksin namun itu lebih baik dari pada
                tertular covid-19.
              </p>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url() ?>assets/images/banner3.jpg" alt="Third Slide">
            <div class="carousel-caption">
            <h1>Kenapa Harus Vaksin?</h1>
              <p>Dengan vaksin anda dapat mencegah tertular covid-19,
                tidak hanya itu anda dapet menyelamatkan banyak orang
                karena tidak tertular covid-19.
              </p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</body>