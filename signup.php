
<?php
include('connect.php')


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .input-field:focus {
            border-color: #4CAF50;
            outline: none;
        }
        .signup-button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-button:hover {
            background-color: #45a049;
        }
        .link-container {
            text-align: center;
            margin-top: 10px;
        }
        .link-container a {
            color: #007BFF;
            text-decoration: none;
        }
        .link-container a:hover {
            text-decoration: underline;
        }
    </style>  
</head>
<body>
<div class="signup-container">
        <h2>Sign Up</h2>
        <form action="connect.php" method="post">
            <input type="text" class="input-field" name="username"  placeholder="Userrname" required>
            <input type="password" class="input-field" name="password" placeholder="Password" required>
            <input type="cpassword" class="input-field" name="cpassword" placeholder="Confirm Password" required>
            <button type="submit" class="signup-button">Sign Up</button>
        </form>
        <div>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>

</body>
</html>
