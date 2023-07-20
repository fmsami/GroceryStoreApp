<?php
include("includes/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-Mart</title>
    <!-- bootstrap css link-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Z-MART</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><button type="button" class="btn btn-warning">Home</button></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#"><button type="button" class="btn btn-warning">Products</button></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="login.php"><button type="button" class="btn btn-success">Login</button></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="register.php"><button type="button" class="btn btn-info">Register</button></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="cart.php"><button type="button" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i></button></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="text-center">
        <h1>Welcome to Z-Mart!</h1>
        <h3>Shop all your groceries with us</h3>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="row px-3">
                <!-- diplay product on home page -->
                
            </div>
        </div>
        <div>
        <?php
                    $select_cat = "select * from `product`";
                    $result_cat = mysqli_query($con, $select_cat);
                    while ($row_data = mysqli_fetch_assoc($result_cat)) {
                        $cat_name = $row_data['name'];
                        echo "
                        <li class='nav-item'>
                        <a href='index.php?category=$cat_name'>$cat_name</a>
                        </li>
                        ";
                    }
                    ?>
        </div>
        <div class="col-md-2">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-warning">
                    <a href="#" class="nav-link text-light"><button type="button" class="btn btn-warning">Categories</button></a>
                    <?php
                    $select_cat = "select * from `category`";
                    $result_cat = mysqli_query($con, $select_cat);
                    while ($row_data = mysqli_fetch_assoc($result_cat)) {
                        $cat_name = $row_data['name'];
                        echo "
                        <li class='nav-item'>
                        <a href='index.php?category=$cat_name'>$cat_name</a>
                        </li>
                        ";
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="bg-warning p-3 text-center footer">
        <p>
            Grocery Store Web App || CSE311 || Developed by Moshiur Rahman
        </p>
    </div> -->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>