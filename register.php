<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style3.css">

  
</head>
<body>
  <div class="container">
    <div class="form-box active">
      <h1>Register</h1>
      <form id="registerForm">
        <input type="text" id="username" placeholder="Username" required>
        <input type="email" id="email" placeholder="Email" required>

        <div class="password-wrapper">
          <input id="reg-pass" type="password" placeholder="Password" required>
          <i class="fa-regular fa-eye toggle-password" onclick="togglePassword('reg-pass', this)"></i>
        </div>

        <select id="roleSelect" required>
          <option value="">--Select Role--</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>

        <div id="adminValidation" class="admin-validation">
          <input type="text" placeholder="Enter Validation ID" id="validationId">
        </div>

        <button type="submit">Submit</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </form>
    </div>
  </div>

  <script>
    // 👁 Toggle password visibility
    function togglePassword(inputId, icon) {
      const input = document.getElementById(inputId);
      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }

    // 📌 Show "Validation ID" when selecting Admin
    const roleSelect = document.getElementById('roleSelect');
    const adminValidation = document.getElementById('adminValidation');

    roleSelect.addEventListener('change', function () {
      if (this.value === 'admin') {
        adminValidation.style.display = 'block';
        adminValidation.querySelector('input').setAttribute('required', 'true');
      } else {
        adminValidation.style.display = 'none';
        adminValidation.querySelector('input').removeAttribute('required');
      }
    });

    // ✅ Validate form before redirecting to login
    const registerForm = document.getElementById('registerForm');
    registerForm.addEventListener('submit', function (event) {
      event.preventDefault(); // stop normal submission

      if (registerForm.checkValidity()) {
        window.location.href = 'login.php'; // direct redirect, no alert
      } else {
        registerForm.reportValidity(); // trigger validation messages
      }
    });
  </script>
</body>
</html>
