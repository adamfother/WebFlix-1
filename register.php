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
    font-size: 20px;
    color: #353c3f;
    border: 0 !important;
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
    background-image: url('images/Happy-Gilmore.jpg');
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
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */
 background-color: white !important;
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */

}
input[type=password], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */
background-color: white !important;
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */

}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input {
  color: white;
}
label {
  color: white;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
form {
  padding-top: 5%;
  opacity: 0.6;
  background-color: #353c3f;
  padding: 3%;

}
h3 {
  background-color: #353c3f;
  opacity: 0.7;
  padding: 2%;
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
      <div class="col-md-3 offset-md-4 text-center">
        <h3 class="" id="webflixreg">REGISTER</h3>
        <form action="action_page.php">


      <input type="text" id="fname" name="firstname" placeholder="Your name..">


      <input type="password" id="lname" name="lastname" placeholder="Your last name..">



      <input class="btn btn-primary btn register" type="button" value="Submit">
      <input class="btn btn-danger btn cancel" type="button" value="Cancel">

    </form>

      </div>


    </div>
  <img src="images/LogoNic.png" class="bmlogo" alt="">
  </div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
   integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
