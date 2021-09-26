<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="container">
            <div class="container-logo">
                <img src="image/logo.png" class="img-thumbnail">
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.php">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="food.php">Foods</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="order.php">Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!--food-search-->
    <nav class="navbar navbar-light food-search">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2 txt-input" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-sua" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!---->
    <!--food-image-->
    <div class="food-image heading">
        <div class="container">
            <div class="heading-food">
                <h2>Explore food</h2>
            </div>
            <div class="row">
                <div class="col">
                    <img src="image/pizza.jpg" alt="">
                    <h3>Pizza</h3>
                </div>
                <div class="col">
                    <img src="image/burger.jpg" alt="">
                    <h3>Burger</h3>
                </div>
                <div class="col">
                    <img src="image/momo.jpg" alt="">
                    <h3>Momo</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="image/pizza.jpg" alt="">
                    <h3>Pizza</h3>
                </div>
                <div class="col">
                    <img src="image/burger.jpg" alt="">
                    <h3>Burger</h3>
                </div>
                <div class="col">
                    <img src="image/momo.jpg" alt="">
                    <h3>Momo</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="image/pizza.jpg" alt="">
                    <h3>Pizza</h3>
                </div>
                <div class="col">
                    <img src="image/burger.jpg" alt="">
                    <h3>Burger</h3>
                </div>
                <div class="col">
                    <img src="image/momo.jpg" alt="">
                    <h3>Momo</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="link-icon">
                <a href="#">
                    <i class="footer-item__icon fab fa-facebook"></i>
                </a>
                <a href="">
                    <i class="footer-item__icon fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="footer-item__icon fab fa-twitter"></i>
                </a>
            </div>
            <h3>All rights reserverd. Design by <a href="http://www.tlu.edu.vn/" target="_blank">CSE.TLU</a></h3>
        </div>
    </div>

    <script src="css/Boostrap/js/bootstrap.min.js"></script>
</body>

</html>