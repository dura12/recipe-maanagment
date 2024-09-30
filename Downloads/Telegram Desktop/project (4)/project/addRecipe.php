<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/addRecipe.css">
    <link rel="stylesheet" href="assets/css/footer.css">
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

    <main class="addRecipe">
        <section class="addRecipeContent">
            <h1>Share your recipe with the world</h1>
            <form action="logic/addRecipeLogic.php" method="post" enctype="multipart/form-data">
                <label for="foodName">Name of Recipe</label><br>
                <input type="text" name="foodName" id="name"><br>
                <label for="category">Category</label><br>
                <input type="text" name="category" id="category"><br>
                <label for="duration">Duration</label><br>
                <input type="text" name="duration" id="duration"><br>
                <label for="ingrediens">Ingredients</label><br>
                <textarea name="ingredients" id="ingredients" cols="30" rows="10" placeholder=" 1, Ingredient One.&#10 2, Ingredient Two.&#10 3, Ingredient Three."></textarea><br>
                <p>write each Ingredient on a new line.</p>
                <label for="cookware">Cookware</label><br>
                <textarea name="cookware" id="cookware" cols="30" rows="10" placeholder=" 1, Cookware One.&#10 2, Cookware Two.&#10 3, Cookware Three."></textarea><br>
                <p>write each Cookware on a new line.</p>
                <label for="directions">Directions</label><br>
                <textarea name="directions" id="directions" cols="30" rows="10" placeholder=" 1, Step One.&#10 2, Step Two.&#10 3, Step Three."></textarea><br>
                <p>write each Step on a new line.</p>
                <label for="userImage">Choose Image</label>
                <input class="img-upload" type="file" name="userImage" >
                <input class="submit" type="submit" name="submit" value="submit recipe"  ><br>
            </form>
        </section>
    </main>

    <?php require "includes/footer.php"; ?>
</body>

</html>