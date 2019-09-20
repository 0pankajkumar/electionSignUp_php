
<?php 

require_once("config.php");


if (isset($_POST['voternumber'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['voternumber'];
    //Search query.
       $Query = "SELECT * FROM electiontable WHERE voternumber = '%$Name%'";
    //Query execution
       $ExecQuery = MySQLi_query($conn, $Query);
    //Creating unordered list to display result.
      
    $respo = array();

       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
       
        $respo[] = $Result;
       
      
    }

    // echo "Fetched";
    echo json_encode($respo);
}
else{
   echo "Nothing synthesized";
}



// echo "Received " + $_POST['voternumber'];







// echo "Received contents";
// echo $_POST["searchKey"]; 

?>