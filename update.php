<?php
include("config.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sqlupdate = "SELECT * FROM test WHERE id='$id'";

    $resultupdate = $connection->query($sqlupdate);

    if($resultupdate -> num_rows>0){
        $row = $resultupdate->fetch_assoc();
    }
    else{
        echo "Record not found";
        exit();
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "UPDATE test SET username='$username', age='$age', gender='$gender' WHERE id=$id";

    $result = $connection->query($sql);

    if($result === TRUE){
        echo "Record updated successfully";
    }
    else{
        echo "Error updating record: " . $connection->error;
    }

    header("Location: read.php");
    exit();
}

$connection->close();

?>

<form method='POST' action="">
    <label for="id">Enter Id </label>
    <input type="text" name="id" id="id" required value="<?php  echo ($row['id']); ?>"><br><br>
    <label for="username">Enter Username</label>
    <input type="text" name="username" id="username" required value="<?php echo($row['username']); ?>"><br><br>
    <label for="age">Enter Age </label>
    <input type="text" name="age" id="age" required value="<?php echo($row['age']); ?>"><br><br>
    <label for="gender">Enter Gender </label>
    <input type="text" name="gender" id="gender" required value="<?php echo($row['gender']); ?>"><br><br>
    <button type = "submit">Update</button>
</form>
