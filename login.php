<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
  <div class="container">
    <div class="form-box active">
      <h1>Login</h1>
      <form onsubmit="event.preventDefault(); window.location.href='index.php';">
        <input type="email" placeholder="Username" required>

        <!-- Forgot password placed on the right above password -->
       

        <!-- Password field with eye icon -->
        <div class="password-wrapper">
          <input id="pass" type="password" placeholder="Password" required>
          <i class="fa-solid fa-eye" id="togglePassword"></i>
        </div>
         <div style="text-align: right; margin-bottom: 5px;">
          <a href="forgotpass.php">Forgot password?</a>
        </div>


        <button type="submit">Login</button>
        <p>Don't have an account? <a href="register.php">Register</a></p>
       
        <p class="terms-link">
          By continuing, you agree to our <a href="termsandcondition.php" target="_blank">Terms and Conditions</a>.
        </p>
      </form>
    </div>
  </div>

  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#pass");

    togglePassword.addEventListener("click", () => {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      togglePassword.classList.toggle("fa-eye-slash");
    });
  </script>
  
</body>
</html>