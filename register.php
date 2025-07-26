<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        <h2>Registration Form</h2>
        <form id="registrationForm" method="POST" action="submit.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" id="male" name="gender" value="Male" required> Male
                <input type="radio" id="female" name="gender" value="Female" required> Female
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <select id="course" name="course" required>
                    <option value="">Select a course</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Electronics">Electronics</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" pattern="\d{10}" title="Enter a valid 10-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="6">
            </div>
            <a href="./index.php" style="text-decoration: none; color: white; ">If You Have An Account,<span style="color:hsl(151, 58%, 46%);">Login!</span> </a>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const phone = document.getElementById('phone').value;
            if (!/^\d{10}$/.test(phone)) {
                alert("Phone number must be 10 digits.");
                e.preventDefault();
            }
        });
    </script>



</body>

</html>