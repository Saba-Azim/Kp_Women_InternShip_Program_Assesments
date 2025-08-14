<?php
// include database connection
include 'include/db.php';

// start a secure session
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // sanitize and validate input
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email || empty($password)) {
        $error = "Please enter a valid email and password.";
    } else {
        // check if user exists
        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        if (!$stmt) {
            $error = "Database error. Try again later.";
        } else {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 1) {
                $stmt->bind_result($user_id, $name, $hashed_password);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header("Location: admin/index.php");
                    exit();
                } else {
                    $error = "Incorrect password.";
                }
            } else {
                $error = "No user found with this email.";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Tenagon Command</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background:
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://source.unsplash.com/random/1920x1080/?nature,water,city,space') no-repeat center center fixed;
            height: 100vh;
            display: flex;
            align-items: center;
        }


        .card {
            border-radius: 1rem;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
        }

        .login-box {
            max-width: 500px;
            width: 100%;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 10px 0;
            font-weight: 500;
        }

        .form-control {
            padding: 12px 15px;
        }

        h3 {
            color: #333;
            font-weight: 600;
        }

        .alert {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="login-box mx-auto">
            <div class="card shadow p-4">
                <h3 class="text-center mb-3">Login to Tenagon</h3>

                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <p class="mt-3 text-center">Don't have an account? <a href="register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>