<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <script defer src="assets/javascript/scroll.js"></script>
</head>

<body>
    <?php session_start(); ?>
    <?php require "includes/header.php"; ?>
    <main>
        <section class="landing">
            <div class="landing-container">
                <div class="landing-texts">
                    <h1>The <span class="recipe">best</span> online recipes</h1>
                    <!-- <h1>Learn, Cook, Share</h1> -->
                    <!-- <h1>Cook like a chef</h1> -->
                    <p>Start a delicious journey, where tasty discoveries and flavorful creations await your every craving</p>
                    <?php if (!isset($_SESSION['id'])) : ?>
                        <div class="login-sign">
                            <a class="login" href="login.php">Login</a>
                            <p class="sign">Don't have an account? <a href="signUp.php">Sign Up</a> </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="landing-images">
                    <!-- <div class="one"> -->

                    <img class="one" src="assets/img/burger.jpg">
                    <img class="two" src="assets/img/ingredients.jpg">
                    <!-- </div> -->
                    <!-- <div class="two"> -->
                    <img class="three" src="assets/img/desert.jpg" alt="">
                    <img class="four" src="assets/img/drink.jpg" alt="">
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <section class="categories">
            <h2>Categories</h2>
            <div class="categorie-wrap">
                <!-- <i class="fa-solid fa-circle-chevron-left"></i> -->
                <i class="fa-solid fa-chevron-left" id="backBtn"></i>
                <div class="categorie-container" id="categorie-container">
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/breakfast.jpg" alt="">
                            <label for="">Breakfast</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/apptizers.jpg" alt="">
                            <label for="">Apptizers</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/lunch.webp" alt="">
                            <label for="">Lunch</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/snacks.jpg" alt="">
                            <label for="">Snacks</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/vegan.jpg" alt="">
                            <label for="">Vegan</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/soup.jpg" alt="">
                            <label for="">Soup</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/dinner.webp" alt="">
                            <label for="">Dinner</label>
                        </div>
                    </a>

                    <a href="recipes.php">
                        <div class="categorie-item">

                            <img src="assets/img/dessert.jpg" alt="">
                            <label for="">Dessert</label>
                        </div>
                    </a>
                    <a href="recipes.php">
                        <div class="categorie-item">
                            <img src="assets/img/drink-4188629_640.jpg" alt="">
                            <label for="">Drinks</label>
                        </div>
                    </a>
                </div>
                <!-- <i class="fa-solid fa-circle-chevron-right"></i> -->
                <i class="fa-solid fa-chevron-right" id="nextBtn"></i>
            </div>
        </section>
        <!-- recent recipes section -->
        <section class="recent">
            <h2 class="center">What is new on our table</h2>
            <div class="card-container">
                <?php for ($i = 0; $i < 12; $i++) :?>
                <?php include("includes/cards.php"); ?>
                <?php endfor; ?>
            </div>
        </section>
        <section class="testimonials">
            <h2>Testimonials</h2>
            <div class="test-card-container">
                <div class="test-card">
                    <div class="quote-icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nesciunt? Quis at vitae non, mollitia consequuntur cum. Blanditiis itaque fugit provident.</p>
                    <div class="test-customer">
                        <img src="assets/img/customer.jpg" alt="">
                        <h4>John Doe</h4>
                    </div>
                </div>
                <div class="test-card">
                    <div class="quote-icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nesciunt? Quis at vitae non, mollitia consequuntur cum. Blanditiis itaque fugit provident.</p>
                    <div class="test-customer">
                        <img src="assets/img/customer.jpg" alt="">
                        <h4>John Doe</h4>
                    </div>
                </div>
                <div class="test-card">
                    <div class="quote-icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nesciunt? Quis at vitae non, mollitia consequuntur cum. Blanditiis itaque fugit provident.</p>
                    <div class="test-customer">
                        <img src="assets/img/customer.jpg" alt="">
                        <h4>John Doe</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="footer">
        <?php require "includes/footer.php"; ?>
    </div>
</body>

</html>