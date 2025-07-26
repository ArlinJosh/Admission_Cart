<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admission Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(-90deg, hsl(151, 58%, 46%) 0%, hsl(170, 75%, 41%) 100%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: url("./assets/images/BG.jpg") no-repeat center center/cover;

      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      max-width: 600px;
      width: 90%;
    }

    h2 {
      text-align: center;
      color: hsl(151, 58%, 46%);
      margin-bottom: 25px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      background: #f9f9f9;
    }

    .form-group i {
      padding: 12px;
      color: hsl(170, 75%, 41%);
      min-width: 45px;
      text-align: center;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      flex: 1;
      padding: 12px;
      border: none;
      outline: none;
      font-size: 14px;
      background: transparent;
    }

    textarea {
      resize: none;
    }

    button {
      background: linear-gradient(-90deg, hsl(151, 58%, 46%) 0%, hsl(170, 75%, 41%) 100%);
      color: white;
      border: none;
      padding: 15px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
      margin-top: 10px;
    }

    button:hover {
      background: linear-gradient(to right, #0056b3, #008cba);
    }

    @media (max-width: 500px) {
      .form-group {
        flex-direction: column;
        align-items: stretch;
      }

      .form-group i {
        border-radius: 8px 8px 0 0;
        padding: 10px;
      }

      .form-group input,
      .form-group select,
      .form-group textarea {
        border-top: 1px solid #ccc;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Admission Form</h2>
    <form action="./send_mail.php" method="POST">
      <div class="form-group">
        <i class="fas fa-user"></i>
        <input type="text" name="first_name" placeholder="First Name" required pattern="[A-Za-z\s]+" title="Only alphabets allowed">
      </div>

      <div class="form-group">
        <i class="fas fa-user"></i>
        <input type="text" name="second_name" placeholder="Second Name" required pattern="[A-Za-z\s]+" title="Only alphabets allowed">
      </div>

      <div class="form-group">
        <i class="fas fa-venus-mars"></i>
        <select name="gender" required>
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <i class="fas fa-calendar-alt"></i>
        <input type="date" name="dob" required>
      </div>

      <div class="form-group">
        <i class="fas fa-map-marker-alt"></i>
        <textarea name="address" placeholder="Address" required></textarea>
      </div>

      <div class="form-group">
        <i class="fas fa-map-pin"></i>
        <input type="text" name="pincode" placeholder="Pincode" required pattern="\d{6}" title="Enter a valid 6-digit pincode">
      </div>

      <div class="form-group">
        <i class="fas fa-phone"></i>
        <input type="text" name="phone" placeholder="Phone Number" required pattern="\d{10}" title="Enter a valid 10-digit phone number">
      </div>

      <div class="form-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <i class="fas fa-graduation-cap"></i>
        <input type="text" name="qualification" placeholder="Highest Qualification" required>
      </div>

      <div class="form-group">
        <i class="fas fa-calendar-check"></i>
        <input type="text" name="year_of_passing" placeholder="Year of Passing" required pattern="\d{4}" title="Enter a valid year">
      </div>

      <div class="form-group">
        <i class="fas fa-star"></i>
        <input type="text" name="grade" placeholder="Grade/Percentage" required pattern="[0-9.]+%" title="Enter valid percentage like 85%">
      </div>

      <div class="form-group">
        <i class="fas fa-school"></i>
        <input type="text" name="school_college" placeholder="School/College Name" required>
      </div>

      <div class="form-group">
        <i class="fas fa-university"></i>
        <input type="text" name="board_university" placeholder="Board/University" required>
      </div>

      <!-- New Field: What do you want to pursue -->
      <div class="form-group">
        <i class="fas fa-bullseye"></i>
        <input type="text" name="pursue" placeholder="What do you want to pursue?" required>
      </div>

      <!-- New Field: Aim in life -->
      <div class="form-group">
        <i class="fas fa-lightbulb"></i>
        <textarea name="aim" placeholder="Aim in life" required></textarea>
      </div>

      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>

</html>