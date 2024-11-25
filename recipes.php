<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Recipes</h1>
    <div class="recipes-container">
        <!-- Recipe 1 -->
        <div class="recipe">
            <img src="spaghetti.jpg" alt="Spaghetti Bolognese">
            <h2>Spaghetti Bolognese</h2>
            <p><strong>Cook Time:</strong> 45 minutes</p>
            <p><strong>Calories:</strong> 400 kcal</p>
            <p><strong>Difficulty:</strong> Medium</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>200g spaghetti</li>
                <li>250g ground beef</li>
                <li>1 can of diced tomatoes</li>
                <li>1 onion (chopped)</li>
                <li>2 cloves of garlic (minced)</li>
                <li>Salt and pepper to taste</li>
                <li>Olive oil</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Cook the spaghetti according to package instructions.</li>
                <li>Heat olive oil in a pan and sauté onion and garlic until fragrant.</li>
                <li>Add ground beef and cook until browned.</li>
                <li>Pour in the diced tomatoes and simmer for 20 minutes. Season with salt and pepper.</li>
                <li>Mix the sauce with the cooked spaghetti and serve.</li>
            </ol>
        </div>

        <!-- Recipe 2 -->
        <div class="recipe">
            <img src="chickenstirfry.jpg" alt="Chicken Stir Fry">
            <h2>Chicken Stir Fry</h2>
            <p><strong>Cook Time:</strong> 30 minutes</p>
            <p><strong>Calories:</strong> 350 kcal</p>
            <p><strong>Difficulty:</strong> Easy</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>200g chicken breast (sliced)</li>
                <li>1 bell pepper (sliced)</li>
                <li>1 carrot (sliced)</li>
                <li>2 tablespoons soy sauce</li>
                <li>1 tablespoon sesame oil</li>
                <li>Salt and pepper to taste</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Heat sesame oil in a pan.</li>
                <li>Add chicken and cook until browned.</li>
                <li>Add vegetables and stir-fry for 5 minutes.</li>
                <li>Pour in soy sauce, season with salt and pepper, and cook for another 5 minutes.</li>
                <li>Serve with steamed rice.</li>
            </ol>
        </div>

        <!-- Recipe 3 -->
        <div class="recipe">
            <img src="tacos.jpg" alt="Vegetarian Tacos">
            <h2>Vegetarian Tacos</h2>
            <p><strong>Cook Time:</strong> 20 minutes</p>
            <p><strong>Calories:</strong> 200 kcal</p>
            <p><strong>Difficulty:</strong> Easy</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>6 taco shells</li>
                <li>1 can of black beans (drained)</li>
                <li>1 avocado (sliced)</li>
                <li>1 cup shredded lettuce</li>
                <li>1/2 cup salsa</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Warm taco shells in a pan or microwave.</li>
                <li>Fill each taco with black beans, avocado, lettuce, and salsa.</li>
                <li>Serve immediately.</li>
            </ol>
        </div>

        <!-- Recipe 4 -->
        <div class="recipe">
            <img src="salmon.jpg" alt="Grilled Salmon">
            <h2>Grilled Salmon</h2>
            <p><strong>Cook Time:</strong> 25 minutes</p>
            <p><strong>Calories:</strong> 300 kcal</p>
            <p><strong>Difficulty:</strong> Medium</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>2 salmon fillets</li>
                <li>1 lemon (sliced)</li>
                <li>2 tablespoons olive oil</li>
                <li>Salt and pepper to taste</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Preheat the grill to medium-high heat.</li>
                <li>Brush salmon fillets with olive oil and season with salt and pepper.</li>
                <li>Grill for 10-12 minutes, turning once.</li>
                <li>Garnish with lemon slices and serve.</li>
            </ol>
        </div>

        <!-- Recipe 5 -->
        <div class="recipe">
            <img src="pancakes.jpg" alt="Pancakes">
            <h2>Pancakes</h2>
            <p><strong>Cook Time:</strong> 20 minutes</p>
            <p><strong>Calories:</strong> 150 kcal</p>
            <p><strong>Difficulty:</strong> Easy</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>1 cup flour</li>
                <li>1 egg</li>
                <li>1 cup milk</li>
                <li>1 tablespoon sugar</li>
                <li>1 teaspoon baking powder</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Mix flour, sugar, and baking powder in a bowl.</li>
                <li>Whisk in egg and milk until smooth.</li>
                <li>Heat a non-stick pan and pour batter to form pancakes.</li>
                <li>Cook until bubbles form, flip, and cook the other side.</li>
                <li>Serve with syrup.</li>
            </ol>
        </div>

        <!-- Recipe 6 -->
        <div class="recipe">
            <img src="cesearsalad.jpg" alt="Caesar Salad">
            <h2>Caesar Salad</h2>
            <p><strong>Cook Time:</strong> 15 minutes</p>
            <p><strong>Calories:</strong> 180 kcal</p>
            <p><strong>Difficulty:</strong> Easy</p>
            <h3>Ingredients:</h3>
            <ul>
                <li>1 head of lettuce</li>
                <li>1/2 cup croutons</li>
                <li>1/2 cup grated Parmesan cheese</li>
                <li>1/4 cup Caesar dressing</li>
            </ul>
            <h3>Instructions:</h3>
            <ol>
                <li>Chop lettuce and place in a large bowl.</li>
                <li>Add croutons and Parmesan cheese.</li>
                <li>Drizzle with Caesar dressing and toss to combine.</li>
                <li>Serve immediately.</li>
            </ol>
        </div>
    </div>
    <a href="home.php">Back to Home</a>
</body>
</html>
