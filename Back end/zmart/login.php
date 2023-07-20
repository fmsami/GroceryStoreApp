<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-Mart | User Registration</title>
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

    <div class="container-fluid">
        <h2 class="text-center my-3">
            User Login
        </h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multitype/form-data">
                    <div class="form-outline mb-4">
                        <label for="user_phn" class="form-label">Phone Number</label>
                        <input type="text" id="user_phn" class="form-control" placeholder="Enter your phone number" required="required" name="user_phn">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_pass" class="form-label">Password</label>
                        <input type="text" id="user_pass" class="form-control" placeholder="Enter your password" required="required" name="user_pass">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Login" class="bg-success text-light py-2 px-3 border-0 name="login">
                    </div>
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </form>
            </div>
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