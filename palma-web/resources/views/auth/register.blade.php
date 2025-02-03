<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../../../register-form/style2.css">
  <!-- Add Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Register</h2>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-user"></i>
        <input type="text" required>
        <label>Enter your full name</label>
      </div>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-envelope"></i>
        <input type="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-lock"></i>
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-lock"></i>
        <input type="password" required>
        <label>Confirm your password</label>
      </div>
      <button type="submit">Register</button>
      <div class="login">
        <p>Already have an account? <a href="{{ route( 'login' ) }}">Log In</a></p>
      </div>
    </form>
  </div>
</body>
</html>
