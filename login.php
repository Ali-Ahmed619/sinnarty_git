<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Contrail+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=SN+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>


    <body>
<?php include 'includes/navbar.php'; ?>

        <h1>SINNARTY</h1>
        <h3>ANGLER EGYPT EDITION</h3>

        <div class="login-box">

            <h2>Welcome Back</h2>
            <br> <br>

            <form onsubmit="return checkForm(event);" action="auth/login.php" method="POST">

                <label><i class="fa-solid fa-envelope"></i>Email Address</label><br>
                <input type="email" id="email" placeholder="name@example.com"><br>
                <span id="emailMsg" style="color:red;"></span>

                <br>

                <label><i class="fa-solid fa-lock"></i>Password</label>


                <input type="password" id="password" placeholder="Enter your Password"><br>
                <span id="passMsg" style="color:red;"></span>
                <br>

                <button type="submit" class="login-btn">Login <i class="fa-solid fa-arrow-right"></i></button>

            </form>
            <br>

            <p class="signup-text">Don't have an account? <a href="register.php">Sign-Up</a></p>

        </div>

<?php include 'includes/footer.php'; ?>
    <script src="./assets/js/login.js"></script>
</body>

</html>
