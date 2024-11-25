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
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="home-bg">
    <div class="home-container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>What would you like to do today?</p>

        <!-- Recipes Link -->
        <a href="recipes.php">Browse Recipes</a>
        <img src="recipes.jpg" alt="Recipes" class="home-img">

        <!-- Meal Plan Link -->
        <a href="mealplan.php">View Meal Plan</a>
        <img src="mealplan.jpg" alt="Meal Plan" class="home-img">
    </div>
</body>
</html>

