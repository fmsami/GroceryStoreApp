<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-Mart | Admin Panel</title>
    <!-- bootstrap css link-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Z-MART</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php"><button type="button" class="btn btn-warning">Admin Panel</button></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><button type="button" class="btn btn-danger">Log Out</button></a>
                </li>
                
            </div>
        </div>
    </nav>
    </div>

    <div class="row">
        <div class="col-md-12 p-1 align-items-center">
            <div class="button text-center">
                <button type="button" class="btn btn-warning"><a href="" class="nav-link bg-warning my-1">Insert New Product</a></button>
                <button type="button" class="btn btn-warning"><a href="" class="nav-link bg-warning my-1">View Products</a></button>
                <button type="button" class="btn btn-warning"><a href="admin.php?insert_categories" class="nav-link bg-warning my-1">Insert New Category</a></button>
                <button type="button" class="btn btn-warning"><a href="" class="nav-link bg-warning my-1">View Categories</a></button>
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