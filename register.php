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
  <div class="container-fluid splash-left2">
    <div class="row" >
      <div class="col-md-6 bounceInUp">
        <div class="">
        <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s" id="webflix">WEBFLIX</h1>

      </div>
    </div>
      <div class="col-md-6">
        <a class="btn btn-primary sign-in wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s" href="#" >Sign In <i class="fas fa-sign-in-alt"></i></a>
      </div>
    </div>
    <div class="row" style="margin-top: 8em;">
      <div class="col-md-4 offset-md-1">
        <h1 class="splash-msg wow fadeIn" data-wow-duration="2s" data-wow-delay="1.2s">First let's create your account</h1>
      </div>
      <div class="col-md-3 text-center">

        <form action="welcome.php">


      <input class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2s" type="text" id="fname" name="firstname" placeholder="Your first name..">
        <input class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.2s" type="text" id="fname" name="firstname" placeholder="Your last name..">
          <input class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.4s" type="text" id="fname" name="firstname" placeholder="Your user name..">




      <select class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.6s" name="genres" style="margin-bottom: 15px;">
        <option>Choose your Favourite Genre</option>
         <option value="volvo">Horror</option>
         <option value="saab">Stoner Comedies</option>
         <option value="fiat">Rom Coms</option>
         <option value="audi">Comedy</option>
         <option value="audi"></option>
      </select>
      <select class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.8s" name="countries" style="margin-bottom: 15px;">
        <option>Choose your Country</option>
         <option value="uk">United Kindgdom</option>
         <option value="usa">United States</option>
         <option value="ire">Republic of Ireland</option>
         <option value="swe">Sweden</option>
         <option value="nl">Holland</option>
      </select>
      <input class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3s" type="password" id="lname" name="lastname" placeholder="Create a strong password..">
      <input class="btn btn-primary btn register wow fadeIn" data-wow-duration="2s" data-wow-delay="3.2s" type="button" value="Submit">
      <input class="btn btn-danger btn cancel wow fadeIn" data-wow-duration="2s" data-wow-delay="3.4s" type="button" value="Cancel">

    </form>

      </div>


    </div>
  <img src="images/LogoNic.png" class="bmlogo wow fadeIn" data-wow-duration="2" data-wow-delay="0.3s" alt="">
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
