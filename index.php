<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>WebFlix:Hub</title>
  <meta name="" content="">
  <meta name="" content="">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script>
            new WOW().init();
            </script>


  <link rel="stylesheet" href="css/webflix.css">
  <link rel="stylesheet" href="css/animate.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
   integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

<body>
  <?php include 'includes/login.php' ?>
  <div class="container-fluid splash-left bounce">
    <div class="row">
      <div class="col-md-6">
        <div class="">
        <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3.2s" id="webflix">WEBFLIX</h1>

      </div>
    </div>
      <div class="col-md-6">
        <a class="btn btn-primary wow fadeIn" id="sign-in"
        data-wow-duration="2s" data-wow-delay="3.2s" data-toggle="modal" data-target="#myModal">Sign In <i class="fas fa-sign-in-alt"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 offset-md-2">
        <h1 class="splash-msg wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" style="padding-top: 4em;">Access the web's finest collection</h1>
          <h1 class="splash-msg wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">of movie RSS feeds, movie trailers</h1>
          <h1 class="splash-msg wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">and movie reviews.</h1>
          <h1 class="splash-msg wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">Immerse yourself.....</h1>
        <br/>
        <a href="register.php" type="button" class="btn btn-primary btn-lg  wow fadeIn" id="register"
              data-wow-duration="2s" data-wow-delay="2.8s">
          Register Now For Free &nbsp;<i class="fas fa-arrow-alt-circle-right"></i></a>
      </div>


    </div>
  <img src="images/LogoNic.png" class="bmlogo wow fadeIn" data-wow-duration="2s" data-wow-delay="3.5s" alt="">
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
