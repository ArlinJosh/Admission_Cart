<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "eduweb");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $course = $conn->real_escape_string($_POST['course']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_BCRYPT);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);


    if ($result->num_rows > 0) {
        echo "<script>
        alert('Email already registered!');
        window.location.href = 'register.php';
        </script>";
    } else {
        // Insert into database
        $sql = "INSERT INTO users (name, gender, course, email, phone, password) VALUES ('$name', '$gender', '$course', '$email', '$phone', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
