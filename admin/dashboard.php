<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage-dashboard.css">
    <title>Admin dashboash</title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-food.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="container">
            <h2 class="heading">Dashboard</h2>
            <div class="row">
                <div class="col">
                    <h2>4</h2>
                    <h4>Categories</h4>
                </div>
                <div class="col">
                    <h2>6</h2>
                    <h4>Foods</h4>
                </div>
                <div class="col">
                    <h2>3</h2>
                    <h4>Total Orders</h4>
                </div>
                <div class="col">
                    <h2>$36.00</h2>
                    <h4>Revenue Generated</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <span>2020 All rights reserved, Food House. Developed By - <a href="http://www.tlu.edu.vn/">CSE485</a></span>
    </div>
    <script src="../css/Boostrap/js/bootstrap.min.js"></script>
</body>

</html>