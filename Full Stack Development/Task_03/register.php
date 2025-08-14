<?php
include 'include/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            $success = "Registration successful. <a href='login.php'>Login here</a>.";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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

<body class="bg-light">
    <div class="container mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow p-4">
                <h3 class="text-center">Register</h3>

                <?php if (!empty($success)): ?>
                    <div class="alert alert-success"><?= $success ?></div>
                <?php endif; ?>

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                    <p class="mt-2 text-center">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>