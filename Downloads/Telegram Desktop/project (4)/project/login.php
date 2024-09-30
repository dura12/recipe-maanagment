<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <?php require "includes/header.php"; ?>
    <main class="login-page">
        <section class="side-image">

        </section>
        <section class="login">
            <div class="login-center">

                <h1>Wellcome back</h1>
                <form action="logic/loginLogic.php" method="post">
                    <input name="email" type="text" placeholder="Email"><br>
                    <input name="password" type="text" placeholder="Password"><br>
                    <input class="login-button" type="submit" name="login" value="login">
                </form>
                <p>Don't have an account? <a class="signup" href="signUp.php">Sign Up</a></p>
            </div>
        </section>
    </main>
</body>

</html>