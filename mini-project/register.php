<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center mb-3">
                    <a href="./register.php">
                        <button class="btn btn-success text-white" style="width:200px">Register</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./login.php">
                        <button class="btn btn-primary text-white" style="width:200px">Login</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./logout.php">
                        <button class="btn btn-warning text-white" style="width:200px">Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h4>Register</h4>
                        <form action="" method="POST">
                            <div class="mb-2">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" name="register" class="btn btn-dark text-white float-end">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    function checkStrongPassword($password) {
        return preg_match('/[A-Z]/', $password) && 
               preg_match('/[a-z]/', $password) &&
               preg_match('/[0-9]/', $password) &&
               preg_match('/[!@#$%*^]/', $password);
    }

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($name && $email && $password && $confirmPassword) {
            if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
                if ($password === $confirmPassword) {
                    if (checkStrongPassword($password)) {
                         session_start();
                        $_SESSION['name'] = $name;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                        echo "<div class='alert alert-success mt-3'>Register Success.</div>";
 
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Password is not strong enough.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger mt-3'>Passwords do not match.</div>";
                }
            } else {
                echo "<div class='alert alert-danger mt-3'>Password must be at least 6 characters long.</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-3'>Please fill in all fields.</div>";
        }
    }
    ?>
</body>
</html>
