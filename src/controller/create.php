<?php
include ('../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Retrieve form data
    $id = $_POST['id'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];


    // Handle Insert query
    $sql = "INSERT INTO test (id,username,age,gender) VALUES ('$id','$username','$age','$gender')";

    $result = $connection-> query($sql);

    if($result == TRUE){
        echo 'Data added successfully';
    }
    else{
        echo 'Error adding data';
    }

    header("Location:read.php");
    exit();
}
$connection->close();
?>

<form method='POST' action="#">
    <label for="id">Enter Id </label>
    <input type="text" name="id" id="id" required><br><br>
    <label for="username">Enter Username</label>
    <input type="text" name="username" id="username" required><br><br>
    <label for="age">Enter Age </label>
    <input type="text" name="age" id="age" required><br><br>
    <label for="gender">Enter Gender </label>
    <input type="text" name="gender" id="gender" required><br><br>
    <button type = "submit">Add</button>
</form>

