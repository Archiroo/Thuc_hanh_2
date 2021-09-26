<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage-order.css">
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
            <h2 class="heading">Manage Order</h2>
        </div>
        <table class="table align-middle">
            <thead class="align-middle">
                <tr>
                    <th class="col-sm-0.5" scope="col">S.N</th>
                    <th class="col-sm-1" scope="col">Food</th>
                    <th class="col-sm-1" scope="col">Price</th>
                    <th class="col-sm-0.5" scope="col">Qty</th>
                    <th class="col-sm-1" scope="col">Total</th>
                    <th class="col-sm-1" scope="col">Order Date</th>
                    <th class="col-sm-1" scope="col">Status</th>
                    <th class="col-sm-1" scope="col">Customer Name</th>
                    <th class="col-sm-1" scope="col">Contact</th>
                    <th class="col-sm-2" scope="col">Email</th>
                    <th class="col-sm-1" scope="col">Adress</th>
                    <th class="col-sm-1" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1.</th>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td><p class="delivered">Delivered</p></td>
                    <td>Jana Bush</td>
                    <td>+1 (562) 101-2028</td>
                    <td>tydujy@mailinator.com</td>
                    <td>Minima iure ducimus</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>

                <tr>
                    <th scope="row">2.</th>
                    <td>Best Burger</td>
                    <td>4.00</td>
                    <td>4</td>
                    <td>16.00</td>
                    <td>2020-11-30 03:52:43</td>
                    <td><p class="delivered">Delivered</p></td>
                    <td>Kelly Dillard</td>
                    <td>+1 (908) 914-3106</td>
                    <td>fexekihor@mailinator.com</td>
                    <td>Incidunt ipsumad d</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>

                <tr>
                    <th scope="row">3.</th>
                    <td>Sadeko Momo</td>
                    <td>6.00</td>
                    <td>3</td>
                    <td>18.00</td>
                    <td>2020-11-30 03:49:48</td>
                    <td><p class="cancelled">Cancelled</p></td>
                    <td>Bradley Farrell</td>
                    <td>+1 (576) 504-4657</td>
                    <td>zuhafiq@mailinator.com</td>
                    <td>Duis aliqua Quilor</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <span>2020 All rights reserved, Food House. Developed By - <a href="http://www.tlu.edu.vn/">CSE485</a></span>
    </div>
    <script src="../css/Boostrap/js/bootstrap.min.js"></script>
</body>

</html>