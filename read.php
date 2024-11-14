<?php
include ('config.php');


// SQL query to select data from the database
$sql = 'SELECT * FROM test';
$result = $connection->query($sql);

 // Output data of each row
if($result ->num_rows>0){
    echo '<table border ="1">';
    echo '<tr>
            <th>Id</th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
         </tr>';

    while($row = $result ->fetch_assoc()){
        echo '<tr>
                <td>'.($row['id']).'</td>
                <td>'.($row['username']).'</td>
                <td>'.($row['age']).'</td>
                <td>'.($row['gender']).'</td>
                <td>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="'.($row['id']).'">
                        <button type = "submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="update.php?id='.($row['id']).'">
                    <button type ="submit">Update</button>
                    </a>
                </td>
            </tr>';
    }
    echo "</table>";
}

else{
    echo "No records found";
}

$connection->close();

?>