<?php
include ("connection.php");
$c= 1;
$query = "SELECT * FROM cms.menu";
$data = mysqli_query($conn,$query);
//$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client.css">
    <title>Menu Page</title>
</head>
<body>
    <header class="head">
        <div class="top">
            <img id='logo' src="Frontend/logo3.svg" alt="PIZZA IAMGE">
        </div>
        <div class="top">
            <h2>7WONDERS</h2>
        </div>
    </header>
    <nav class="navigation">
        <ul>
            <li>
                <div class="dropdown">
                    Main Course
                    <div class="dropdown-content">
                        <a href="#">Shahee Paneer</a>
                        <a href="#">Kadai paneer</a>
                        <a href="#">mushrom</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    Dessert
                    <div class="dropdown-content">
                        <a href="#">chips</a>
                        <a href="#">french fries</a>
                        <a href="#">blahh</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    Drinks
                    <div class="dropdown-content">
                        <a href="#">Coca Cola</a>
                        <a href="#">Strawberry shake</a>
                        <a href="#">virgin mojito</a>
                    </div>
                </div>
            </li>
        </ul>
        <input type="text" id='search' placeholder="Search...">
        <div class="footer">
            <h3>You have placed these orders</h3>
            <button class="order-btn">PLACE THE ORDER</button>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="img-container">
                <img src="istockphoto-1083487948-612x612.jpg" alt="Here comes the image">
            </div>
            <h3>
			 <?php
	   $result = mysqli_fetch_assoc($data);
	   echo $result['dish_name'];
	   ?>
	   </h3>
            <div class="quantity">
			<?php
			 if($result['half']<>0)
			 {
				 echo "Half: ".$result['half']."<br>";
			 }
	   echo "Full:".$result['full'];
	   ?>
			</div>
            <button id='cart-btn'>ADD TO CART</button>
        </div>
        <div class="container">
            <div class="img-container">
                <img src="istockphoto-1083487948-612x612.jpg" alt="Here comes the image">
            </div>
            <h3>
			 <?php
	          $result = mysqli_fetch_assoc($data);
	          echo $result['dish_name'];
	          ?>
	   </h3>
            <div class="quantity">
			<?php
			 if($result['half']<>0)
			 {
				 echo "Half: ".$result['half']."<br>";
			 }
	   echo "Full:".$result['full'];
	   ?>
	   </div>
            <button id='cart-btn'>ADD TO CART</button>
        </div>
        <div class="container">
            <div class="img-container">
                <img src="istockphoto-1083487948-612x612.jpg" alt="Here comes the image">
            </div>
            <h3>
			<?php
			$result = mysqli_fetch_assoc($data);
			echo $result['dish_name'];
			?>
			</h3>
            <div class="quantity">
			<?php
			 if($result['half']<>0)
			 {
				 echo "Half: ".$result['half']."<br>";
			 }
	   echo "Full:".$result['full'];
	   ?>
			</div>
            <button id='cart-btn'>ADD TO CART</button>
        </div>
    </section>
</body>
</html> 