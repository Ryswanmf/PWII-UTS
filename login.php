<?php
include 'function.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

  var_dump($user); // You should see user data if the credentials are correct

  if (!empty($user)) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username; // Store username in session if needed
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h2 class="text-center mt-5">Login</h2>
    <form action="login.php" method="POST" class="w-50 mx-auto mt-3">
      <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php endif; ?>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>

</html>