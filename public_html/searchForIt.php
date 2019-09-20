
<?php 

require_once("config.php");


if (isset($_POST['searchKey'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['searchKey'];
    //Search query.
       $Query = "SELECT * FROM electiontable WHERE name LIKE '%$Name%'";
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









// echo "Received contents";
// echo $_POST["searchKey"]; 

?>