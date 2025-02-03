<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log-In</title>
  <link rel="stylesheet" href="../../../login-form/style.css">
  <!-- Add Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Login</h2>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-envelope"></i>
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <!-- Icon added here -->
        <i class="fas fa-lock"></i>
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="{{ route( 'register' ) }}">Register</a></p>
        <p>Want to go back? <a href="{{ route( 'welcome' ) }}">Go Back</a></p>
      </div>
    </form>
  </div>
</body>
</html>
