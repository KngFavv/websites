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
    <link rel="stylesheet" href="style/main.css">
    <title>Recipe - Detail</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>Recipe detail</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor.</p>
            <a href="index.php">home</a><span>/ Recipe</span>
        </div>
    </div>
    <div class="line"></div>
    <!-----------------------about us------------------------>
    <section class="view_page">
        
        
        <?php 
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '
                        <div class="message">
                            <span>'.$message.'</span>
                            <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                        </div>
                    ';
                }
            }
        ?>
        
            <?php 
                if (isset($_GET['pid'])) {
                    $pid = $_GET['pid'];
                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$pid'") or die('query failed');
                    if (mysqli_num_rows($select_products)>0) {
                        while($fetch_products = mysqli_fetch_assoc($select_products)){

            ?>
            <form method="post">
                <img src="image/<?php echo $fetch_products['image']; ?>">
                <div class="detail">
                    <div class="name"><?php echo $fetch_products['name']; ?></div>
                    <div class="detail"><?php echo $fetch_products['product_detail']; ?></div>
                    <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                </div>
            </form>

            <?php 
                        }
                    }
                }
   
            ?>
        
    </section>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>