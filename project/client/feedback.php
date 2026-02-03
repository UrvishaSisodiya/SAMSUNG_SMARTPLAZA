<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samsung SmartPlaza</title>
    <?php include('header.php'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-7 col-lg-6">
            <div class="form-container">
                <h2 class="text-center title mb-4"><u><b>Feedback</b></u></h2>
                <form name="regi" action="registrationsave.php" method="POST" onsubmit="return validateForm();">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nm" class="form-label"><b>Name</b></label>
                            <input type="text" class="form-control" name="nm" id="nm"style="width:500px;"placeholder="Enter name...">
                        
                            <label for="city" class="form-label"><b>City</b></label>
                            <input type="text" class="form-control" name="city" id="city"style="width:500px;"placeholder="Enter City...">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mno" class="form-label"><b>Mobile No</b></label>
                            <input type="text" class="form-control" name="mno" id="mno"style="width:500px;"placeholder="Enter Mobile_no...">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email"style="width:500px;"placeholder="Enter E-mail...">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label"><b>Feedback</b></label>
                        <textarea class="form-control" name="feedback" id="feedback" rows="2"placeholder="Write your feedback or message here...."></textarea>
                    </div>
                   <div class="d-flex justify-content-between">
                       <button type="submit" name="submit" class="btn" style="width:300px; background-color: #007bff; color: white; border: none;">Send</button>
                       <button type="reset" name="reset" class="btn" style="width:300px; background-color: gray; color: white; border: none;">Cancel</button>
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
   
    