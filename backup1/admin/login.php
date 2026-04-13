<?php
session_start();
require_once '../db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }
    // Password validation (minimum 6)
    elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters";
    } 
    else {

        $email = mysqli_real_escape_string($conn, $email);

        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {

            $user = mysqli_fetch_assoc($result);

            if ($user['status'] != 1) {
                $error = "Account inactive";
            }
            elseif ($password === $user['password']) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['full_name'];

                header("Location: dist/index.php");
                exit;

            } else {
                $error = "Password not match";
            }

        } else {
            $error = "Email not found";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <style>
      body {
        background: #f4f6f9;
      }
      .login-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .login-box {
        width: 360px;
      }
    </style>
  </head>
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg text-center">Sign in to start your session</p>

          <?php if (!empty($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?> <?php if (!empty($success)): ?>
          <div class="alert alert-success"><?php echo $success; ?></div>
          <?php endif; ?>

          <form action="" method="post">
            <div class="input-group mb-3">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email"
                value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"
              />
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>

            <div class="row">

              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" name="login_submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
            </div>
          </form>


        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
  </body>
</html>
