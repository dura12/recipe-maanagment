<?php session_start();?>
<header>
    <nav>
        <ul class="li-container">
            <div class="logo">

                <li ><a href="index.php">Moya</a></li>
            </div>
            <div class="navs">

                <li><a class="normal"href="index.php">Home</a></li>
                <li><a class="normal"href="recipes.php">Recipes</a></li>
                <li><a class="normal"href="addRecipe.php">Add Recipe</a></li>
                <li><a class="normal"href="myrecipes.php">My Recipes</a></li>
                <!-- <li><a class="normal"href="instructions.php">About Us</a></li> -->
                <li><a class="normal"href="#footer">Contact</a></li>
                <?php if(isset($_SESSION["id"])): ?>
                <li><a class="normal" href="logic/logout.php">Logout</a></li>
                <?php else: ?>
                <li><a class="normal"href="login.php">Login</a></li>
                <li><a class="special"href="signUp.php">sign up</a></li>
                <?php endif;?>
                <!-- <li><a href="#">Favorites</a></li> -->
            </div>
            <div class="search">
                <li><input type="text" name="search" id="" placeholder="search recipes"></li>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </ul>
    </nav>
</header>