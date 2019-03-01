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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
   integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
   integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <style media="screen">
  * {
    margin: 0;
    padding: 0;
  }
  html, body {
  width: 100%;
height: 100%;


}
  #webflix {
    font-weight: bold;
    color: #ff8d3f;
    padding: 3%;
    padding-left: 4%;
  }
  #webflixreg {
    font-weight: bold;
    color: #ff8d3f;
    margin-top: 20%;

  }
  .sign-in {
    float: right;
    margin-top: 3%;
    margin-right: 7%;
    border: 0 !important;
    font-family: 'Lato', sans-serif;
    font-size: 25px;
    color: #353c3f;
    font-weight: 500;
    background-color: #ff8d3f;
  }
  .register {
    background-color: #ff8d3f;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    font-size: 30px;
    color: #353c3f;
    border: 0 !important;
  }
  .register:hover {
    transition: 0.7s;
  }
  .cancel {
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    font-size: 20px;
    border: 0 !important;
  }
  .page-content {
    background-color: #353c3f;
  }
  .splash-left4 {
    width: 100%;
    height: auto%;
    min-width: 100%;
    min-height: 100%;
    position: relative;

  }
  .splash-left4::before {
    background-color: #353c3f ;
    background-size: cover;
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
  }
  .splash-left4::after {
    background-image: url('images/The-Jungle-Book.jpg');
   background-size: cover;
  content: "";
  display: block;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.1;
}
#splash-msg {
  font-family: 'Lato', sans-serif;
  color: #d5d6d2;
  font-weight: 400;
  font-size: 45px;
  padding-top: 4em;
}
.accent {
  color: #ff8d3f;
  font-weight: bold;
}


  </style>

</head>

<body>
  <div class="container-fluid splash-left4">

    <div class="row">
      <div class="col-md-6 webflixdiv">
        <div class="">
        <h1  class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s" id="webflix">WEBFLIX</h1>

      </div>
    </div>
      <div class="col-md-6 wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.3s">

       <?php include 'includes/nav.php' ?>

      </div>
    </div>
      <h1 class="splash-msg wow fadeIn"  data-wow-duration="2s" data-wow-delay="1.2s"
       style="margin-top: 6%; margin-left: 5%;">Movie RSS feeds
       <span class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">for your indulgence..</span>
     </h1>
    <div class="row" style="margin-top: 6em; height: 30em;">
      <div class="col-md-3 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2.6s" id="feed1">
      <img src="images/moviePilot.png" style="width: 60%; opacity: 0.5;" alt=""><br>
      <button type="button" class="btn btn-primary register" name="button"
      style="width: 40%; margin-top:6%; opacity: 0.6; font-weight: bold;">
      Subscribe
    </button>
      </div>
      <div class="col-md-3 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2.8s" id="feed2">

      <img src="images/cinema-blend.jpeg" style="width: 60%; opacity: 0.5;" alt="">
      <button type="button" class="btn btn-primary register" name="button"
      style="width: 40%; margin-top:6%; opacity: 0.6; font-weight: bold;">
      Subscribe
    </button>
      </div>
      <div class="col-md-3 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="3s" id="feed3">
      <img src="images/movieweb.png" style="width: 80%; opacity: 0.5;" alt="">
      <button type="button" class="btn btn-primary register" name="button"
      style="width: 40%; margin-top:6%; opacity: 0.6; font-weight: bold;">
      Subscribe
    </button>

      </div>
      <div class="col-md-3 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="3.2s" id="feed4">
        <img src="images/screenrant.jpg" style="width: 60%; opacity: 0.5;" alt="">
        <button type="button" class="btn btn-primary register" name="button"
        style="width: 40%; margin-top:6%; opacity: 0.6; font-weight: bold;">
        Subscribe
      </button>

      </div>


    </div>
  <img src="images/LogoNic.png" class="bmlogo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s"  alt="" />
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
