<?php
// Start session ONCE at the very top of the main page file
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Check for success/error messages from GET parameters
$message = '';
$message_type = ''; // e.g., 'success', 'error'

if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
    $message = 'Signup successful! Please log in.';
    $message_type = 'success';
} elseif (isset($_GET['error'])) {
    $message_type = 'error';
    // Add specific error messages if desired
    switch ($_GET['error']) {
        case 'emptyfields':
            $message = 'Please fill in all fields.';
            break;
        case 'invalidemail':
            $message = 'Invalid email format.';
            break;
        case 'usernametaken':
            $message = 'Username already taken.';
            break;
        case 'emailtaken':
            $message = 'Email already registered.';
            break;
        case 'wrongpwd':
            $message = 'Incorrect username or password.';
            break;
        case 'nouser':
            $message = 'Incorrect username or password.'; // Keep generic for security
            break;
        default:
            $message = 'An error occurred. Please try again.';
    }
}

?>
<!DOCTYPE html>
<html lang=" en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/loginin.css" />
  
  <!-- <link rel="stylesheet" href="universal.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <?php include 'header_sign.php'; ?>
  <div class="container">

  <?php
    // Display the message if one was set
    if (!empty($message)) {
        echo '<div class="status-message ' . htmlspecialchars($message_type) . '">' . htmlspecialchars($message) . '</div>';
    }
  ?>

    <div class="forms-container">
      <div class="signin-signup">
        <form action="login_process.php" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"/>
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="signup_process.php" method="POST" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"/>
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Sign up now and start your journey with TRIPNE!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
       
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Ready for your next adventure with TRIPNE.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>
</html>