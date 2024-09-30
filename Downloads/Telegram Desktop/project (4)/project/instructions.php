<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instructions page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/instructions.css">
</head>

<body>
    <?php require "includes/header.php"; ?>
    <main class="instraction-page">
        <section class="img-container">
            <div class="fixed-img">
            </div>
            <h1>Ice Cream</h1>
        </section>
        <section class="instraction">
            <div class="centered">
                <h1>Ice Cream</h1>
                <div class="category-duration">
                    <h2>Dessert</h2>
                    <hr>
                    <p>
                        <i class="fa-regular fa-clock"></i>
                        50min
                    </p>
                </div>

            </div>
            <h2 class="no-flex-h2">Ingredients</h2>
            <div class="ingredient-checkbox-container">
                <input type="checkbox" name="ing1" id="ing1">
                <label for="ing1">Lorem ipsum dolor</label>
            </div>
            <div class="ingredient-checkbox-container">
                <input type="checkbox" name="ing2" id="ing2">
                <label for="ing2">Lorem ipsum dolor</label>
            </div>
            <div class="ingredient-checkbox-container">
                <input type="checkbox" name="ing3" id="ing3">
                <label for="ing3">Lorem ipsum dolor</label>
            </div>
            <div class="ingredient-checkbox-container">
                <input type="checkbox" name="ing4" id="ing4">
                <label for="ing4">Lorem ipsum dolor</label>
            </div>
            <div class="ingredient-checkbox-container">
                <input type="checkbox" name="ing5" id="ing5">
                <label for="ing5">Lorem ipsum dolo.</label>
            </div>
            <!-- <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            </ul> -->
            <h2 class="no-flex-h2">Cookware</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            </ul>
            <h2 class="no-flex-h2">Directions</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis at amet similique cumque ullam corporis sed nisi est commodi nihil?</li>
            </ul>
        </section>
    </main>



    <?php require "includes/footer.php"; ?>
</body>

</html>