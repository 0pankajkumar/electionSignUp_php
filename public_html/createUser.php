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
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/createUser.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Download ID</a>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchText">
      <button id="sendForTable">Search</button>
</div>
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


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>


<div class="bg-img" id="signUpForm" style="display:block">
  <h2>Get your Election card</h2>
    <div style="width:50%";>
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
          
         
          
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>  

    



</div>





<div id="searchResults">
</div>



<div id="tableDiv" >
</div>  


<script>

function createPDF() 
{
  let sTable = document.getElementById("tableDiv").innerHTML;

  let win = window.open("", "", "height=700,width=700");

  win.document.write(sTable); 

  win.document.close(); // CLOSE THE CURRENT WINDOW.

  win.print(); // PRINT THE CONTENTS.
}



// Great help in parsing table values https://stackoverflow.com/questions/53965880/click-a-button-and-get-values-of-cells-in-same-row-with-javascript-or-jquery
function printingFun(x)
{
 
  let td = x.parentNode;
  let voternumber = td.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling;
  let name = td.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling;
  let fathersname = td.previousSibling.previousSibling.previousSibling.previousSibling;
  let gender = td.previousSibling.previousSibling.previousSibling;
  let dob = td.previousSibling.previousSibling;
  let address = td.previousSibling;
  let photo = td.nextSibling;


  let voternumber_value = voternumber.innerHTML;
  let name_value = name.innerHTML;
  let fathersname_value = fathersname.innerHTML;
  let gender_value = gender.innerHTML;
  let dob_value = dob.innerHTML;
  let address_value = address.innerHTML;
  let photo_value = photo.innerHTML;
  // console.log(interpret_value);

  console.log(photo_value);

  let voterCard = '<!DOCTYPE html><html><body><style>body{width:100%;height:auto}.img_circle{width:150px;border-radius:100px}.my_id{margin:0 auto;padding-top:5px;width:300px;height:auto;border:3px solid black;border-radius:10px;background:url(images/bgg-id.jpg);background-size:cover}table{font-size:14px}.address{width:100%;height:auto;background-color:#1c80a2;color:white}tr p{height:2px}</style><div class="my_id"><center><h3 >Voters Council</h3></center><center> <img class="img_circle" src="';
  voterCard += photo_value; 
  voterCard += '"></center> <br><table width="100%"><tr><th><p align="right">Voter number:</p></th><td><p>';
  voterCard += voternumber_value; 
  voterCard += '</p></td></tr><tr><th><p align="right">Name:</p></th><td><p>'; 
  voterCard += name_value; 
  voterCard += '</p></td></tr><tr><th><p align="right">Fathers Name:</p></th><td><p>'; 
  voterCard += fathersname_value; 
  voterCard += '</p></td></tr><tr><th><p align="right">Gender</p></th><td><p>'; 
  voterCard += gender_value;
  voterCard += '</p></td></tr><tr><th><p align="right">Date of Birth:</p></th><td><p>'; 
  voterCard += dob_value;
  voterCard += '</p></td></tr></table><center><div class="address"><b>Address:</b><p>'; 
  voterCard += address_value; 
  voterCard += '</p></div></center></div>';
  
  $("#tableDiv").html(voterCard);
  
  createPDF();
  
}





function makeThatTable(jsonData)
{
  let htmlRes = "<table style='width:100%'>";
  htmlRes += "<tr><th>Voter Number</th><th>Name</th><th>Father's Name</th><th>Gender</th><th>Date of Birth</th><th>Address</th></tr>";

  for(js of jsonData)
  {
    let temRow = "<tr>" + "<th>" + js.voternumber + "</th>" + "<th>" + js.name + "</th>" + "<th>" + js.fathersname + "</th>" + "<th>" + js.sex + "</th>" + "<th>" + js.dob + "</th>" + "<th>" + js.address + "</th>" + "<td><button class='tableRow' onclick='printingFun(this)'>Print</button></td>" + "<td style='display:none'> https://electionsignup.000webhostapp.com/uploads/" + js.photo + "</td>" + "</tr>" ;
    htmlRes += temRow;
  }
  htmlRes += "</table>";

  return htmlRes;
}


// When you hit search
$('#sendForTable').on('click', function(e) {

  console.log("Go clicked");
  document.getElementById('signUpForm').style.display = 'none';
  // e.preventDefault();


  $.ajax({
  type: "POST",
  cache: true,
  url: "/searchForIt.php",
  data: {"searchKey": document.getElementById('searchText').value}, //ajax parameters
  success: function(result) {
    console.log(result);
    let jsonData = JSON.parse(result);
    $("#searchResults").html(makeThatTable(jsonData));
    
    
    // document.getElementById('ddl2').style.display = 'inline';
    // document.getElementById('ddl3').style.display = 'inline';
    // document.getElementById('postingArchiveStatus').style.display = 'inline';
    // document.getElementById('age').style.display = 'inline';
  },
});

});


</script>




    







  </body>
</html>