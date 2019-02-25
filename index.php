<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>WebFlix:Hub</title>
  <meta name="" content="">
  <meta name="" content="">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script>
            new WOW().init();
            </script>


  <link rel="stylesheet" href="/css/webflix.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
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
  .page-content {
    background-color: #353c3f;
  }
  .splash-left {
    width: 100%;
    height: auto%;
    min-width: 100%;
    min-height: 100%;
    position: relative;

  }
  .splash-left::before {
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
  .splash-left::after {
    background-image: url('images/spider-man-2.jpg');
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
.bmlogo {
  width: 17%;
  position: absolute;
  bottom: 0;
  right: 0;
  padding-right: 2%;
  padding-bottom: 2%;
}
  </style>

</head>

<body>
  <div class="container-fluid splash-left">
    <div class="row">
      <div class="col-md-6 bounceInUp">
        <div class="">
        <h1 class="" id="webflix">WEBFLIX</h1>

      </div>
    </div>
      <div class="col-md-6">
        <a class="btn btn-primary sign-in" href="#">Sign In</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 offset-md-2">
        <h1 id="splash-msg">Access the web's finest collection <br/>of movie RSS feeds
        , movie trailers <br/>and movie reviews. <br/>Immerse yourself.....</h1>
        <br/>
        <button type="button" class="btn btn-primary btn-lg register">Register Now For Free! ></button>
      </div>


    </div>
  <img src="images/LogoNic.png" class="bmlogo" alt="">
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
