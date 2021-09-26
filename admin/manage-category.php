<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage-category.css">
    <title>Manage-category</title>
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
                            <a class="nav-link" href="manage-order.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--main-->
    <div class="main">
        <div class="container">
            <h2 class="heading">Manage Category</h2>
            <div class="btn-add">
                <a href="" class="btn-primary">Add New User</a>
            </div>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-2" scope="col">Title</th>
                        <th class="col-sm-2" scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Featured</th>
                        <th class="col-sm-1" scope="col">Active</th>
                        <th class="col-sm-4" scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1.</th>
                        <td>Pizza</td>
                        <td><img src="../image/pizza.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-success">Update category</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete category</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2.</th>
                        <td>Burger</td>
                        <td><img src="../image/burger.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-success">Update category</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete category</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3.</th>
                        <td>Momo</td>
                        <td><img src="../image/momo.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-success">Update category</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete category</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4.</th>
                        <td>Pizza</td>
                        <td><img src="../image/pizza.jpg" alt=""></td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-success">Update category</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete category</button>
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>






    </div>
    <div class="footer">
        <span>2020 All rights reserved, Food House. Developed By - <a href="http://www.tlu.edu.vn/">CSE485</a></span>
    </div>
    <script src="../css/Boostrap/js/bootstrap.min.js"></script>
</body>

</html>