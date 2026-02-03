<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php include('header.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">
        function validateForm() {
            var a = document.forms["login"]["username"].value.trim();
            var b = document.forms["login"]["password"].value;

            if (a === "" && b === "") {
                alert("Both fields are required.");
                return false;
            }
            if (a === "") {
                alert("Username must be filled out.");
                return false;
            }
            if (b === "") {
                alert("Password must be filled out.");
                return false;
            }
            if (b.length < 5) {
                alert("Password should be at least 5 characters.");
                return false;
            }
            if (!b.match(/^[a-z0-9][\w-]*$/i)) {
                alert("Password cannot contain special characters or spaces except '_' or '-'.");
                return false;
            }
            return true;
        }
    </script>

    <style>
        body {
            background: url('PROJECT_IMAGE/I4.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .login-card {
            margin-top: 20vh;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 60px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        h1 {
            color: #CC3366;
            font-family: 'Times New Roman', serif;
            font-size: 40px;
        }
        label {
            font-family: 'Times New Roman', serif;
            color: #CC3366;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-card">
                    <h1 class="text-center mb-4"><u>LOGIN</u></h1>

                    <form action="checklogin.php" method="post" name="login" onsubmit="return validateForm();">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username...">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password...">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p>Don't have an account?,For create a new account</p>
                        <a href="registration.php" class="btn btn-outline-success">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <?php include("footer.php"); ?>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>