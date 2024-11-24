<?php

include "../config.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Collect and sanitaize input
    $input_username = htmlspecialchars(trim($_POST['username']));
    $input_email = htmlspecialchars(trim($_POST['email']));
    $input_password = trim($_POST['password']);

    // Initialize an array to hold errors
    $errors = [
        'username' => '',
        'email' => '',
        'password' => ''
    ];

    // Validate username
    if(empty($input_username)){
        $errors['username'] = "Username is required.";
    }
    elseif(strlen($input_username)< 4){
        $errors['username'] = "Username must be at least 4 characters.";
    }

    // Validate Email
    if(empty($input_email)){
        $errors['email'] = "Email is required.";
    }
    elseif(!filter_var($input_email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Invalid email address.";
    }
    else{
        // Check if email already use
        $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s",$input_email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result -> num_rows>0){
            $errors['email'] = "This email is already use.";
        }
        $stmt->close();
    }


    // validate password
    if(empty($input_password)){
        $errors['password'] = "Password is required.";
    }
    elseif(strlen($input_password) < 4){
        $errors['password'] = "Password must be at least 6 characters long.";
    }
    elseif(!preg_match("/[A-Z]/",$input_password)){
        $errors['password'] = "Password must contain at least one uppercase letter.";
    }
    elseif(!preg_match("/[0-9]/",$input_password)){
        $errors['password'] = "Password must contain at least one number.";
    }

    // Chech for errors
    if(empty(array_filter($errors))){
    
        // hashed the password
        $hashed_password = password_hash($input_password, PASSWORD_DEFAULT);

        // Set admin or user
        $is_admin = 0;

        $stmt = $connection->prepare("INSERT INTO users (username,email,password,is_admin) VALUES (?,?,?,?)");
        $stmt->bind_param("sssi",$input_username,$input_email,$hashed_password,$is_admin);
        $result = $stmt->execute();
        

        if($result){
            // header("Location:login.php");
            // exit();
            echo "<script>alert('Registration successful');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
        $stmt->close();
    }

    else{
        $error_message = "An error occurred during registration. Please try again.";
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
        <h2>Register</h2>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $input_username ?? ''; ?>" required>
            <span class="error-msg">
            <?php echo $errors['username'] ?? ''; ?>
            </span>
          
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $input_email ?? ''; ?>" required>
            <span class="error-msg">
            <?php echo $errors['email'] ?? ''; ?>
            </span>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <span class="error-msg">
            <?php echo $errors['password'] ?? ''; ?>
            </span>
            
            <button type="submit">Register</button>
        </form>
        <p>You already have an account ? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>