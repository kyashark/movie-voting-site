<?php

include "../config.php";

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input_username = htmlspecialchars(trim($_POST['username']));
    $input_password = trim($_POST['password']);

    $errors = [
        'username' => '',
        'password' => ''
    ];

    // Validate username
    if(empty($input_username)){
        $errors['username'] = "Username is required.";
    }

    // Validate email
    if(empty($input_password)){
        $errors['password'] = "Password is required.";
    }

    
    // field empty error check
    if(empty(array_filter($errors))){
        $stmt = $connection->prepare("SELECT * FROM users WHERE username=?");
        $stmt->bind_param("s",$input_username);
        $stmt->execute();
        $result=$stmt->get_result();

        if($result -> num_rows > 0){
            $user = $result->fetch_assoc();

            // Verify password
            if(password_verify($input_password,$user['password'])){
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_admin'] = $user['is_admin'];

                if($_SESSION['is_admin'] == 1){
                    echo "<script>window.location.href = '../admin/admin_dashboard.php';</script>";
                }
                else{
                    echo "<script>window.location.href = '../user/home.php';</script>";
                }
            }
            else{
                $error_message = "Invalid username or password.";
            }
        }
        else{
            $error_message = "Invalid username or password.";
        }
        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/auth.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" >
            <span class="error-msg">
                <?php echo $errors['username'] ?? ''; ?>
            </span>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <span class="error-msg">
                <?php echo $errors['password'] ?? ''; ?>
            </span>

            <p class="error-text">
                <?php echo $error_message ?? ''; ?>
            </p>

            <button type="submit">Login</button>
        </form>
        <p>You didn't have an account ? <a href="register.php">Register</a></p>
    </div>
</div>
</body>
</html>