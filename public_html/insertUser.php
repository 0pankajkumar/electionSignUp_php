<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/styles/createUserStyle.css"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sign Up
    </title>
  </head>
  <body>
    <!-- Navigational -->
    <!--  -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="#">Voter Council
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home 
              <span class="sr-only">(current)
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/index.php">Register
            </a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchText">
          <button id="sendForTable">Search
          </button>
        </div>
      </div>
    </nav> -->

  <!-- Navigational 2 -->
  <nav class="topnav">
  <a class="active" href="/index.php">Home</a>
  <a href="/index.php">Register</a>
  <div class="search-container">
    
    	
        <input type="text" placeholder="Search" aria-label="Search" id="searchText">
      <button id="sendForTable">Search Name</button>
        
        
      
   
  </div>
</nav>










    <div id="searchResults">
    </div>
    <div id="tableDiv" style="display:none">
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="scripts/createUserScript.js">
    </script>
  </body>
</html> 

<?php
//insertUser.php

require_once("config.php");

//Checking it whether is coming from a form
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = $conn->real_escape_string($_POST["name"]); //set PHP variables like this so we can use them anywhere in code below
    $fathersname = $conn->real_escape_string($_POST["fathersname"]);
    // $photo = $conn->real_escape_string($_POST["photo"]);
    $gender = $conn->real_escape_string($_POST["gender"]);
    $dob = $conn->real_escape_string($_POST["dob"]);
    $sex = $conn->real_escape_string($_POST["gender"]);
    $address = $conn->real_escape_string($_POST["address"]);
    
    
    $statusMsg = '';
    // File upload path
    $targetDir = "uploads/";

    $date = date('m/d/Y h:i:s a', time());
    $dat = str_replace('/','',$date);
    $dat = str_replace(' ','',$dat);
    $dat = str_replace(':','',$dat);
    // Getting time stamp to save photo with unique name
    $saveNamed = $dat;
    $fileName = basename($_FILES['photo']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $saveName = $saveNamed . '.' . $fileType;
    $savePath = $targetDir . $saveName;

    if(!empty($_FILES["photo"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $savePath)){
                // Insert image file name into database
                // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                $insert = $conn->query("INSERT INTO electiontable (name, fathersname, photo, dob, sex, address) VALUES ('".$name."','".$fathersname."', '".$saveName."', '".$dob."', '".$sex."', '".$address."')");
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully. All records inserted. You are now a member";
                }else{
                    $statusMsg = "Photo upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a proper passport size photo to upload.';
    }


    echo $statusMsg;










    // $sql="INSERT INTO electiontable (name, fathersname, photo, dob, sex, address) VALUES ('".$name."','".$fathersname."', '".$photo."', '".$dob."', '".$sex."', '".$address."')";

    // if(!$result = $conn->query($sql)){
    //     die('There was an error running the query [' . $conn->error . ']');
    //     }
    //     else
    //     {
    //     echo "Thank you! We will contact you soon";
    //     }
        

	// //print output text
	// $ret = "Hello " . $name . "!, we have received your message and email ". $address;
    // return "success";
    // echo "succes echo";
    // print "success print"
}
?>