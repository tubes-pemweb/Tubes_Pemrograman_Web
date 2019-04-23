<!DOCTYPE html>
<html lang="en">
<head>

  <title>BBC Weather</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bbc_weather.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
    .barisabuabu {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
    .contactbbc {
      background-color: white;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="<?php echo base_url(); ?>index.php/c_news/"><img class="col-2" style="width:84 px; height:50px;" src="<?php echo base_url('images/weather/bbcicon/logo.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/c_news/">Home</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/c_news/news">News</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/c_news/sport">Sport</a></li>
        <li><a href="#">Weather</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Reel</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/c_news/travel">Travel</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <div class="row">
          <label class="col-sm-2 col-sm-9 control-label control-block" style="font-size : 30px;">WEATHER</label>
          <div class="col-sm-9 col-md-9">
            <input class="form-control" id="searchkota" type="text" value="">
          </div>
          <div class="col-sm-1 col-md-1">
            <button class="form-control" type="button"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</nav>

<div class="">
<img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/bbcweather/bbcweather.jpg" >
</div>

<div class="barisabuabu container-fluid text-center">
  <h3>North America Weather</h3><br>
  <iframe width="960" height="540" src="https://www.youtube.com/embed/iJy27saKxK8">
  </iframe>
</div> 



<footer class="contactbbc container-fluid text-center">
  <div class="row">
    <div style="color: black;" class="col-md-2">
     <h3>Features</h3>
    </div>
  </div>
  <div class="row">
    <div style="color: black;" class="col-md-2">
    <a href="https://www.bbc.com/weather/features/48014413">
     <p><img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/news/news1.jpg" ></p>
      <h4>Weather For The Week Ahead</h4><a>
     <p>It's been a warm and Sunny Easter weekend for most.But there's a big change on the horizon. Ben Rich has the details</p>
    </div>

    <div style="color: black;" class="col-md-2">
    <a href="https://www.bbc.com/news/uk-48013791">
     <p><img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/news/news2.jpg" ></p>
     <h4>UK records hottest Easter Monday</h4><a>
     <p>It has been the hottest Easter Monday on record in all four nations of the UK, the Met Office says.</p>
    </div>

    <div style="color: black;" class="col-md-2">
    <a href="https://www.bbc.com/news/world-latin-america-48008471">
     <p><img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/news/news3.jpg" ></p>
     <h4>Deadly landslide hits Colombian town</h4><a>
     <p>The disaster in the south-western region of Cauca follows days of torrential rain.</p>
    </div>

    <div style="color: black;" class="col-md-2">
    <a href="https://www.bbc.com/weather/features/44013020">
     <p><img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/news/news4.jpg" ></p>
     <h4>UV - how to stay sun savvy</h4><a>
     <p>It's the time of year when we really start to notice the strength of the the sun. Helen Willetts explains the factors that affect the strength of UV radiation and how to stay safe in the sun.</p>
    </div>

    <div style="color: black;" class="col-md-2">
    <a href="https://www.bbc.com/weather/features/47990422">
     <p><img style="display: inline-block" class="img-responsive img-block"src="<?php echo base_url(); ?>images/weather/news/news5.jpg" ></p>
     <h4>Weather World</h4><a>
     <p>Weather World features the wildest weather of the year so far and how climate change is affecting the environment around us</p>
    </div>
    
  </div>
</footer>
</body>
</html>
