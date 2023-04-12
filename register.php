<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Password confirmation does not match.";
        exit;
    }

    $db = connectDB();

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $db->query($query);

    if ($result) {
        $_SESSION['username'] = $username;
        header('Location: login.php');
        exit;
    } else {
        echo "Error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter email" name="username" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <br>
      <label for="pwd"> Confirm Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter again the password" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-primary pull-center">Submit</button>
    <a href = "login.php" class = "btn btn-danger pull-right">Cancel</a>
  </form>
</div>

</body>
</html>