<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            background-color: black;
            color: red;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid red;
            text-align: center;
        }
        h2 {
            color: red;
        }
        label {
            color: red;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;
            background: #333;
            color: red;
        }
        button {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            background: red;
            color: black;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: darkred;
        }
        p {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required><br>
            
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required><br>
            
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required><br>
            
            <button type="submit" name="signup">Signup</button>
        </form>
        <?php
        if (isset($_POST['signup'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $conn->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
            echo "<p>Signup successful!</p>";
        }
        ?>
    </div>
</body>
</html>
