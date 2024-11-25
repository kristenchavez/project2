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
    <title>Meal Plan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Weekly Meal Plan</h1>
    <div class="mealplan-container">
        <div class="meal">
            <h2>Monday</h2>
            <img src="salmon.jpg" alt="Grilled Salmon">
            <p><strong>Meal:</strong> Grilled Salmon</p>
            <p><strong>Grocery List:</strong> Salmon, broccoli, olive oil, salt, pepper</p>
        </div>
        <div class="meal">
            <h2>Tuesday</h2>
            <img src="chickenstirfry.jpg" alt="Chicken Stir Fry">
            <p><strong>Meal:</strong> Chicken Stir Fry</p>
            <p><strong>Grocery List:</strong> Chicken, bell peppers, soy sauce, rice</p>
        </div>
        <div class="meal">
            <h2>Wednesday</h2>
            <img src="tacos.jpg" alt="Vegetarian Tacos">
            <p><strong>Meal:</strong> Vegetarian Tacos</p>
            <p><strong>Grocery List:</strong> Tacos, beans, avocado, salsa</p>
        </div>
        <div class="meal">
            <h2>Thursday</h2>
            <img src="spaghetti.jpg" alt="Spaghetti Bolognese">
            <p><strong>Meal:</strong> Spaghetti Bolognese</p>
            <p><strong>Grocery List:</strong> Pasta, ground beef, tomatoes</p>
        </div>
        <div class="meal">
            <h2>Friday</h2>
            <img src="pancakes.jpg" alt="Pancakes">
            <p><strong>Meal:</strong> Pancakes</p>
            <p><strong>Grocery List:</strong> Flour, eggs, milk, syrup</p>
        </div>
        <div class="meal">
            <h2>Saturday</h2>
            <img src="cesearsalad.jpg" alt="Caesar Salad">
            <p><strong>Meal:</strong> Caesar Salad</p>
            <p><strong>Grocery List:</strong> Lettuce, croutons, chicken, Caesar dressing</p>
        </div>
        <div class="meal">
            <h2>Sunday</h2>
            <img src="salmon.jpg" alt="Grilled Salmon">
            <p><strong>Meal:</strong> Grilled Salmon</p>
            <p><strong>Grocery List:</strong> Salmon, zucchini, lemon</p>
        </div>
    </div>
    <a href="home.php">Back to Home</a>
</body>
</html>
