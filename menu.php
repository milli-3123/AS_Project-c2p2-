<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Menu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: white;
        }
        .menu-container {
            text-align: center;
        }
        .pizza-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .pizza-item {
            text-align: center;
            margin: 10px;
            width: 300px;
        }
        .pizza-item img {
            width: 100%;
            height: 250px; /* Adjust the height as needed */
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="menu-container">
        <h2>Pizza Menu</h2>
        
        <div class="pizza-grid">
            <div class="pizza-item">
                <img src="pizza1.jpg" alt="Pizza 1">
                <h3>Pizza Margherita</h3>
                <p>$10.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza2.jpg" alt="Pizza 2">
                <h3>Pepperoni Pizza</h3>
                <p>$12.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza3.jpg" alt="Pizza 3">
                <h3>Vegetarian Pizza</h3>
                <p>$11.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza4.jpg" alt="Pizza 4">
                <h3>Hawaiian Pizza</h3>
                <p>$13.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza5.jpg" alt="Pizza 5">
                <h3>Meat Lover's Pizza</h3>
                <p>$14.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza6.jpg" alt="Pizza 6">
                <h3>BBQ Chicken Pizza</h3>
                <p>$12.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza7.jpg" alt="Pizza 7">
                <h3>Supreme Pizza</h3>
                <p>$15.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza8.jpg" alt="Pizza 8">
                <h3>Four Cheese Pizza</h3>
                <p>$13.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza9.jpg" alt="Pizza 9">
                <h3>Buffalo Chicken Pizza</h3>
                <p>$12.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza10.jpg" alt="Pizza 10">
                <h3>Mushroom Pizza</h3>
                <p>$11.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza11.jpg" alt="Pizza 11">
                <h3>Spinach and Feta Pizza</h3>
                <p>$12.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza12.jpg" alt="Pizza 12">
                <h3>Artichoke Pizza</h3>
                <p>$12.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza13.jpg" alt="Pizza 13">
                <h3>Barbecue Bacon Pizza</h3>
                <p>$13.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza14.jpg" alt="Pizza 14">
                <h3>Chicken Alfredo Pizza</h3>
                <p>$14.99</p>
            </div>
            <div class="pizza-item">
                <img src="pizza15.jpg" alt="Pizza 15">
                <h3>Shrimp Scampi Pizza</h3>
                <p>$15.99</p>
            </div>
        </div>
    </div>

</body>
</html>
