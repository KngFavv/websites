<?php
include 'connection.php'; // Include your database connection
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_GET['query'])) {
    $search_query = mysqli_real_escape_string($conn, $_GET['query']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Search Results</title>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>Search</h1>
            <a href="index.php">home</a><span>/ shop</span>
        </div>
    </div>
    <div class="line"></div>
    
    <section class="view_page">
        <h1>Search Results for "<?php echo htmlspecialchars($search_query); ?>"</h1>

        <?php
        // Prepare and execute the SQL query
        $sql = "SELECT * FROM products WHERE name LIKE '%$search_query%' OR product_detail LIKE '%$search_query%'";
        $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }

        // Check if any rows are returned
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <form method="post">
                <img src="image/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                <div class="detail">
                    <div class="price">$<?php echo htmlspecialchars($row['price']); ?>/-</div>
                    <div class="name"><?php echo htmlspecialchars($row['name']); ?></div>
                    <div class="detail"><?php echo htmlspecialchars($row['product_detail']); ?></div>
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($row['name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($row['price']); ?>">
                    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($row['image']); ?>">
                    <div class="icon">
                        <button type="submit" name="add_to_wishlist" class="bi bi-heart"></button>
                        <input type="number" name="product_quantity" value="1" min="1" class="quantity">
                        <button type="submit" name="add_to_cart" class="bi bi-cart"></button>
                    </div>
                </div>
            </form>
        <?php
            }
        } else {
            echo "<p>No results found for '$search_query'.</p>";
        }
        ?>

    </section>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="JS/header.js"></script>
</body>
</html>

<?php
} else {
    echo "Please enter a search query.";
}
?>