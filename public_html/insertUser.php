<html>
<body>

Received contents
<?php echo $_POST["name"]; ?>

</body>
</html> 

<?php
//insertUser.php

require_once("config.php");

//Checking it is coming from a form
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
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                $insert = $db->query("INSERT INTO electiontable (name, fathersname, photo, dob, sex, address) VALUES ('".$name."','".$fathersname."', '".$fileName."', '".$dob."', '".$sex."', '".$address."')");
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
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