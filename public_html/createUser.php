<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>


    <!-- Navigational -->
    <!--  -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Voter Council</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Download ID</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>











<!-- The Form -->
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("votersxx.jpg");

  min-height: 580px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
/* .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
} */
</style>
</head>
<body>

<h2>Get your Election card</h2>
<div class="bg-img">

    <div style="width:50%";>
    <form method="post" action="insertUser.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <!-- <label for="name">Name</label> -->
              <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
            </div>
            <div class="form-group col-md-6">
              <!-- <label for="inputPassword4">Password</label> -->
              <input type="text" class="form-control" id="fathersname" name="fathersname" placeholder="Father's name">
            </div>
          </div>

          <fieldset class="form-group">
            <div class="row">
              <!-- <legend class="col-form-label col-sm-2 pt-0">Gender</legend> -->
              <div >
                <div class="form-check">
                  <!-- <input class="form-check-input" type="radio" name="gridRadios" id="male" value="Male" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Male
                  </label>

                  <input class="form-check-input" type="radio" name="gridRadios" id="female" value="Female">
                  <label class="form-check-label" for="gridRadios2">
                    Female
                  </label>

                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Other" disabled>
                  <label class="form-check-label" for="gridRadios3">
                    Other
                  </label> -->

                  <input type="radio" name="gender" value="male"> Male
                  <input type="radio" name="gender" value="female"> Female
                  <input type="radio" name="gender" value="other"> Other 

                </div>
                <div class="form-check">
                  
                </div>
                <div class="form-check">
                  
                </div>
              </div>
            </div>
          </fieldset>

          <div class="form-group">
            Date of Birth: <input type="date" class="form-control" name="dob" id="dob" placeholder="DoB">
          </div>

          <div class="form-group">
            <!-- <label for="inputAddress">Address</label> -->
            <input type="text" class="form-control" id="address" name="address" placeholder="Full Address">
          </div>

          <div class="form-group">
            Passport size photo: <input type="file" class="form-control" name="file" id="file" placeholder="photo">
          </div>
          
         
          
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>  

    



</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>