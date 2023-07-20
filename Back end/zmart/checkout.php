<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-Mart | Checkout</title>
    <!-- bootstrap css link-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
    }
      
    section {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
      
    h1 {
        color: green;
        font-size: 32px;
        margin-bottom: 20px;
    }
      
    h2 {
        color: green;
        font-size: 24px;
        margin-bottom: 10px;
    }
      
    label {
        display: block;
        margin-bottom: 5px;
        color: #666666;
    }
      
    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }
      
    input[type="submit"] {
        background-color: green;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
      
    input[type="submit"]:hover {
        background-color: #228B22;
    }
      
</style>
  
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
  
    <section>
        <h1>Checkout</h1>
        <form action="thanks.php" method="post">
            <h2>Billing Information</h2>
            <label for="name">Name:</label>
            <input type="text" 
                   id="name"
                   name="name" required>
  
            <label for="email">Email:</label>
            <input type="email" 
                   id="email" 
                   name="email" required>
  
            <label for="address">Address:</label>
            <input type="text" 
                   id="address" 
                   name="address" required>
  
            <label for="city">City:</label>
            <input type="text" 
                   id="city" 
                   name="city" required>
  
            <label for="state">State:</label>
            <input type="text" 
                   id="state" 
                   name="state" required>
  
            <label for="zip">Zip Code:</label>
            <input type="text" 
                   id="zip"
                   name="zip" required>
  
            <input type="submit" 
                   value="Place Order">
        </form>
    </section>
  
    <!-- <div class="bg-warning p-3 text-center footer">
        <p>
            Grocery Store Web App || CSE311 || Developed by Moshiur Rahman
        </p>
    </div> -->
</body>
  
</html>