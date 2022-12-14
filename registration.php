<!-- @include 'config.php';
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($_conn,$_POST['name']);
    $email=mysqli_real_escape_string($_conn,$_POST['email']);
    $password1=md5($_POST['password1']);
    $password2=md5($_POST['password2']);
} -->
<?php
?>


<!-- <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styleRegistration.css">
    
</head>
<body>

    <div class="global-container h-100 ">
        <div class="card login-form bg-black">
            <div class="card-body w-100">
                <h1 class="card-title text-center ">Registration</h1>
                <div class="card-text">
                    <form class="p-5 " id="formRegistration">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label" id="username">Username</label>
                            <input type="text" class="form-control form-control-sm rounded-pill"  name="username" id="username" aria-describedby="emailHelp">
                            <div class="error"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control rounded-pill" id="email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-check-label" for="exampleCheck1">Password</label> 
                            <input type="password" class="form-control rounded-pill" id="password1">
                            <div class="error"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-check-label" for="exampleCheck1">Password again</label> 
                            <input type="password" class="form-control rounded-pill" id="password2">
                            <div class="error"></div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn mb-3 rounded-pill text-black">Sign In</button>
                            <div class="signup ">
                                Don't have an account? <a href="#" class="link-secondary">Create One</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <a href="http://" style="float: right;font: size 12px;">Forget password</a> 
    
<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleRegistration.css">
    <script defer src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="/">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password">
                <div class="error"></div>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>