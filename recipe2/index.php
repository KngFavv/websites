<?php 
    include 'connection.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    if (!isset($user_id)) {
        header('location:login.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!------------------------bootstrap css link------------------------------->
    <!------------------------slick slider link------------------------------->
    <link rel="stylesheet" type="text/css" href="style/slick.css" />
    <!------------------------default css link------------------------------->
    <link rel="stylesheet" href="style/main.css">
    <title>Recipe - home page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!------------------------hero img container------------------------------->

    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="img/slider.jpg" alt="...">
                <div class="slider-caption">
                    <span>Taste The Quality</span>
                    <h1>Organics Premium <br> Food</h1>
                    <p>Enjoy making your own food again with our easy to use recipe</p>
                    <a href="recipe.php" class="btn">start now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/slider2.png" alt="...">
                <div class="slider-caption">
                    <span>Taste The Quality</span>
                    <h1>Organics Premium <br> food</h1>
                    <p>Enjoy making your own food again with our easy to use recipe!</p>
                    <a href="recipe.php" class="btn">start now</a>
                </div>
            </div>
        </div>
        <div class="control">
            <i class="bi bi-chevron-left prev"></i>
            <i class="bi bi-chevron-right next"></i>
        </div>
    </div>
    <div class="line"></div>
    <div class="story">
    	<div class="row">
    		<div class="box">
    			<span>our story</span>
    			<h1>The coming of recipe website since 2024</h1>
    			<p>Interdum Et Malesuada Fames Ac Ante Ipsum Primis In Faucibus. Vestibulum Laoreet Est Orci, Eu
                    Placerat Est Posuere In.
                    Sed Malesuada Magna Vitae Pulvinar Varius. Orci Varius Nato Que Penatibus Et Magnis Dis Parturient
                    Montes, Ridiculus
                    Mus. Integer Vel Nisi Lorem. Donec Dignissim Commodo Rhon Cus. Nullam.</p>
                <a href="recipe.php" class="btn">start now</a>
    		</div>
    		<div class="box">
    			<img src="/img/logo1.png .png">
    		</div>
    	</div>
    </div>
    <div class="line3"></div>
    <!-- testimonial -->
    <div class="line4"></div>
    <div class="testimonial-fluid">
    	<h1 class="title">What Our Customers Say's</h1>
    	<div class="testimonial-slider">
    		<div class="testimonial-item">
    			<img src="img/3.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>

    			</div>
    		</div>
    		<div class="testimonial-item">
    			<img src="img/4.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div>
    		</div>
    		<div class="testimonial-item">
    			<img src="img/profile.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div>
    		</div>
    	</div>
    	 <div class="control">
            <i class="bi bi-chevron-left prev1"></i>
            <i class="bi bi-chevron-right next1"></i>
        </div>
    </div>
    <div class="line"></div>
    <!---discover section --->

    <?php include 'homeshop.php'; ?>
    <div class="line2"></div>
    <div class="newslatter">
    	<h1 class="title">Join Our To Newslatter</h1>
    	<p>Be the first to learn about special events, new arrivals and more.
        </p>
        <input type="text" name="" placeholder="your Email Address...">
        <button>subscribe now</button>
    </div>
    <div class="line3"></div>
    <?php include 'footer.php'; ?>
    <script src="jquary.js"></script>
    <script src="slick.js"></script>

    <script type="text/javascript">
        <?php include 'script2.js' ?>
    </script>
</body>

</html>