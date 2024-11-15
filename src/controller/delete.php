<?php
include('../config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];

    // Prepare DELETE SQL statement
    $sql = "DELETE FROM test WHERE id='$id'";

    $result = $connection ->query($sql);

    if($result === TRUE){
        echo "Record deleted successfully.";
    }
    else{
        echo "Error deleting record: " . $connection->error;
    }
    
    // Redirect back to the main page 
    header("Location:read.php");
    exit();
}

$connection->close();
?>