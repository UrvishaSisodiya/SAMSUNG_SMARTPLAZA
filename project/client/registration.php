<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <?php include('header.php'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function validateForm() {
            var form = document.forms["regi"];
            var requiredFields = ["nm", "address", "city", "pincode", "state", "country", "username", "password", "gender", "mno", "email", "dob"];
            
            for (var i = 0; i < requiredFields.length; i++) {
                var field = form[requiredFields[i]].value.trim();
                if (!field) {
                    alert(requiredFields[i] + " must be filled out");
                    return false;
                }
            }

            var pincode = form["pincode"].value;
            if (pincode.length < 6 || !pincode.match(/^[a-z0-9][\w-]*$/i)) {
                alert("Invalid pincode");
                return false;
            }

            var password = form["password"].value;
            if (password.length < 5 || !password.match(/^[a-z0-9][\w-]*$/i)) {
                alert("Password must be at least 5 characters and contain no special characters except _ or -");
                return false;
            }

            var mno = form["mno"].value;
            if (!mno.match(/^\d{10}$/)) {
                alert("Invalid mobile number");
                return false;
            }

            var email = form["email"].value;
            if (!email.match(/^[\w]+([._-][\w]+)*@[\w-]+\.[a-z]{2,4}$/i)) {
                alert("Invalid email");
                return false;
            }

            return true;
        }
    </script>

    <style>
        body {
            background: url('project_image/I4.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .form-container {
            background: rgba(255,255,255,0.95);
            border-radius: 15px;
            padding: 60px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            margin-top: 20vh;
        }
        h2.title {
            color: #000000;
            font-family: 'Times New Roman', serif;
            font-size: 40px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-container">
                <h2 class="text-center title mb-4"><u><b>REGISTRATION</b></u></h2>
                <form name="regi" action="registrationsave.php" method="POST" onsubmit="return validateForm();">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nm" class="form-label"><b>Name</b></label>
                            <input type="text" class="form-control" name="nm" id="nm">
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label"><b>City</b></label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label"><b>Address</b></label>
                        <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pincode" class="form-label"><b>Pincode</b></label>
                            <input type="text" class="form-control" name="pincode" id="pincode">
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label"><b>State</b></label>
                            <input type="text" class="form-control" name="state" id="state">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label"><b>Country</b></label>
                        <input type="text" class="form-control" name="country" id="country">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="username" class="form-label"><b>Username</b></label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label"><b>Password</b></label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block"><b>Gender</b></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mno" class="form-label"><b>Mobile No</b></label>
                            <input type="text" class="form-control" name="mno" id="mno">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="dob" class="form-label"><b>Date of Birth</b></label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>

                   <div class="d-flex justify-content-between">
                       <button type="submit" name="submit" class="btn" style="width:350px; background-color: #007bff; color: white; border: none;">Register</button>
                       <button type="reset" name="reset" class="btn" style="width:350px; background-color: gray; color: white; border: none;">Cancel</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include("footer.php"); ?>
</body>
</html>