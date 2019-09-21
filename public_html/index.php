<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/createUserStyle.css"> 





   


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
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Register</a>
      </li>
     
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchText">
      <button id="sendForTable">Search Name</button>
</div>
  </div>
</nav>















<div class="bg-img" id="signUpForm" style="display:block">
  
    <div style="width:50%; background:whitesmoke; margin:auto";>
    <h2>Get your Election card</h2>
    <form method="post" action="insertUser.php" enctype="multipart/form-data">
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
            Passport size photo: <input type="file" class="form-control" name="photo" id="photo" placeholder="photo">
          </div>
          
         
          
          <button style="margin:auto; display:block;" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>  

    



</div>





<div id="searchResults">
</div>



<div id="tableDiv" style="display:none">
</div>  





    





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/createUserScript.js"></script>


  </body>
</html>