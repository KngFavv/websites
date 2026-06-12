<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Favour Aigbokie">
    <meta name="description" content="MusicOnline.com is a new startup offering a marketplace for vinyl enthusiasts. Users can register, search for, and list vinyl records (albums, EPs, singles) for sale. Retailers pay for registration. Future versions will include advertisements">
    <meta name="keywords" content="recipe, cooking, ingredients, food">

	<!--box icon link-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<header class="header">
		<div class="flex">
		<a href="index.php" class="logo"><img src="img/logo6.png"></a>
			<nav class="navbar">
				<a href="index.php">home</a>
				<a href="shop.php">browse Vinyl</a>
				<a href="product.php">sell vinyl</a>
				<a href="login.php">Acounts</a>
				<a href="about.php">about us</a>
				<a href="admin_pannel.php">admin</a>
			</nav>
			<form class="search-bar" action="search.php" method="GET">
				<input type="text" name="query" placeholder="Search vinyls..." required>
				<button type="submit"><i class="bi bi-search"></i></button>
			</form>

			<div class="icons">
				<i class="bi bi-person" id="user-btn"></i>
				<?php 
					$select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id='$user_id'") or die ('query failed');
					$wishlist_num_rows = mysqli_num_rows($select_wishlist);
				?>
				<a href="wishlist.php"><i class="bi bi-heart"></i><sup><?php echo $wishlist_num_rows; ?></sup></a>
				<?php 
					$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id='$user_id'") or die ('query failed');
					$cart_num_rows = mysqli_num_rows($select_cart);
				?>
				<a href="cart.php"><i class="bi bi-cart"></i><sup><?php echo $cart_num_rows; ?></sup></a>
				<i class="bi bi-list" id="menu-btn"></i>
			</div>
			<div class="user-box">
				<p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
				<p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
				<form method="post">
					<button type="submit" name="logout" class="logout-btn">log out</button>
				</form>
			</div>
		</div>
	</header>
	
</body>
</html>