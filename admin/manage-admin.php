<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage-admin.css">
    <title>Manage admin</title>
</head>

<body>
    <div class="header">
        <div class="container">
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
    </div>
    <div class="main">
        <div class="container">
            <h2 class="title_manage">Manage Users</h2>
            <div class="btn-add">
                <a href="" class="btn-primary">Add New User</a>
            </div>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th class="col-md-1" scope="col">S.N</th>
                        <th class="col-md-2.5" scope="col">Full Name</th>
                        <th class="col-md-2.5" scope="col">Username</th>
                        <th class="col-md-6" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Arsenio Leach</td>
                        <td>toduwaxobi</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-primary">Change password</button>
                            <button type="button" class="btn btn-sua btn-success">Update admin</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete admin</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-primary">Change password</button>
                            <button type="button" class="btn btn-sua btn-success">Update admin</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete admin</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-primary">Change password</button>
                            <button type="button" class="btn btn-sua btn-success">Update admin</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete admin</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td>
                            <button type="button" class="btn btn-sua btn-primary">Change password</button>
                            <button type="button" class="btn btn-sua btn-success">Update admin</button>
                            <button type="button" class="btn btn-sua btn-danger">Delete admin</button>
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