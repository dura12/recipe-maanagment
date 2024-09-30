<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sign.css">
</head>

<body>
    <?php require "includes/header.php"; ?>
    <main class="login-page">
        <section class="login">
            <div class="login-center">

                <h1>Wellcome</h1>
                <form action="logic/signUpLogic.php" method="post">
                    <input name="firstName" class="text-input" type="text" placeholder="First Name"><br>
                    <input name="lastName" class="text-input" type="text" placeholder="Last Name"><br>
                    <input name="email" class="text-input" type="text" placeholder="Email"><br>
                    <input name="password" class="text-input" type="password" name="" id="" placeholder="Password"><br>
                    <!-- <a  href="#">Sign Up</a><br> -->
                    <input class="login-button" type="submit" name="signUp" value="Sign Up">
                </form>
                <p>Allready have an account? <a class="signup" href="login.php">Login</a></p>
            </div>
        </section>
        <section class="side-image">

        </section>
    </main>
</body>

</html>