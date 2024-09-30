<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/myrecipes.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo "<script type='text/javascript'>
            alert('you have to log in to get access');
            window.location.href = 'login.php';
        </script>";
    } ?>
    <?php require "includes/header.php"; ?>

    <main class="user-recipe">
        <section class="card">
            <a class="menu" href="instructions.php">
                <p class="name">Name</p>
                <p class="date">Upload Date</p>
                <p class="name">status</p>
            </a>
            <a href="instructions.php">
                <p class="name">doro wet</p>
                <p class="date">wed, 26 june</p>
                <p class="status">pending</p>
            </a>
            <a href="instructions.php">
                <p class="name">doro wet</p>
                <p class="date">wed, 26 june</p>
                <p class="status">pending</p>
            </a>
        </section>
        <!-- <p>shiro</p>
        <p>pending</p> -->
    </main>
</body>

</html>