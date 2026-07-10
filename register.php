<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="./assets/css/register.css">

<body>
<?php include 'includes/navbar.php'; ?>

    <h2><i class="fa-solid fa-water"></i>SINNARTY</h2>
    <hr>

    <div class="box">

        <h1>Create Account</h1>
        <p>Begin your journey to professional angling.</p>

        <form onsubmit="return checkForm(event);" action="auth/register.php" method="POST">

            <label>Full Name</label><br>
            <i class="fa-solid fa-user"></i>
            <input type="text" name="name" id="fullname" placeholder="Ahmed Mansour"><br>
            <span id="nameMsg" class="error"></span>

            <br><br>

            <label>Email Address</label><br>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="name@example.com"><br>
            <span id="emailMsg" class="error"></span>

            <br><br>

            <label>Phone Number</label><br>
            <i class="fa-solid fa-phone"></i>
            <input type="text" name="phone" id="phone" placeholder="+20 123 456 7890"><br>

            <br><br>

            <label>Password</label><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="********"><br>

            <br>

            <label>Confirm Password</label><br>
            <i class="fa-solid fa-shield-halved"></i>
            <input type="password" name="confirm_password" id="confirmPassword" placeholder="********"><br>
            <span id="passMsg" class="error"></span>

            <br><br>

            <input type="checkbox" id="terms">
            <label>I agree to the Terms of Service and Privacy Policy</label>

            <br><br>

            <!-- <input type="submit" value="Create Account"> -->
            <button type="submit" name="submit" class="btn">Create Account</button>

        </form>

        <p>Already have an account? <a href="login.php">Login</a></p>

    </div>

<?php include 'includes/footer.php'; ?>
    <script src="./assets/js/register.js"></script>
</body>

</html>