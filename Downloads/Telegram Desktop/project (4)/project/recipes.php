<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/recipes.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <?php require "includes/header.php"; ?>
    <main class="recipes-main">
        <section class="explore-background">
            <h1>Explore Our Recipes</h1>
        </section>
        <section class="recipes-list">
            <div class="recipes-header">
                <a class="category-link category-active" href="#">All</a>
                <a class="category-link" href="#">Apptizers</a>
                <a class="category-link" href="#">Breakfast</a>
                <a class="category-link" href="#">Lunch</a>
                <a class="category-link" href="#">Dinner</a>
                <a class="category-link" href="#">Soup</a>
                <a class="category-link" href="#">Dessert</a>
                <a class="category-link" href="#">Drinks</a>
                <a class="category-link" href="#">Vegan</a>
                <a class="category-link" href="#">Snacks</a>
            </div>
            <div class="recipe-cards">
                <?php for ($i = 0; $i < 12; $i++) {
                    require "includes/cards.php";
                }
                ?>
            </div>
        </section>
    </main>
    <?php require "includes/footer.php"; ?>
    <script  src="assets/javascript/category_active.js"></script>
</body>
</html>