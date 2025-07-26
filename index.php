<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("./assets/images/BG.jpg") no-repeat center center/cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #000;
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 50px;
            opacity: 0.8;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #course {
            width: 420px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="radio"] {
            width: auto;
        }

        .btn {
            font-weight: 700;
            width: 50%;
            background: linear-gradient(-90deg, hsl(151, 58%, 46%) 0%, hsl(170, 75%, 41%) 100%);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
        }

        .btn:hover {
            background: #fff;
            color: #000;
        }

        label {
            color: hsl(151, 58%, 46%);
            opacity: 100%;
        }

        h2 {
            color: hsl(151, 58%, 46%);
            opacity: 100%;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="register.php" style="text-decoration: none; color: white; ">If You Are A New User,<span style="color: hsl(151, 58%, 46%);">Register!</span> </a>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "eduweb");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve and sanitize input
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        // Query to check if the user exists
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Redirect to the home page
                echo "<script>
                alert('Login successful!');
                window.location.href = 'home.php';
            </script>";
            } else {
                echo "<script>
                alert('Invalid password. Please try again.');
                window.location.href = 'index.php';
            </script>";
            }
        } else {
            echo "<script>
            alert('No user found with this email.');
            window.location.href = 'index.php';
        </script>";
        }

        $conn->close();
    }
    ?>

</body>

</html>