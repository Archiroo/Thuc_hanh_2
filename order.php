<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/order.css">
    <title>Order</title>
</head>
<body>
    <section class="header">
        <img src="image/logo.png"alt="">
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="categories.php">Categories</a>
            <a href="food.php">Foods</a>
            <a href="order.php">Order</a>
        </div>
    </section>

    <section class="food-search">
        <div class="container">
            <h2 class="heading">Fill this form to confirm your order.</h2>
            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu">
                        <img src="image/menu-burger.jpg" alt="" class="food-menu__img">
                    </div>
                    <div class="food-desc">
                        <h3>Food title</h3>
                        <p class="food-price">$2.3</p>
                        <p class="order-label">Quantity</p>
                        <input type="number" value=1 class="order-input">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delivery details</legend>
                    <h3>Full name</h3>
                    <input type="text" placeholder="Nguyễn Minh Đức" class="order-input">
                    <h3>Phone number</h3>
                    <input type="tel" placeholder="011 1111111" class="order-input">
                    <h3>Email</h3>
                    <input type="email" placeholder="abcd@gmail.com" class="order-input">
                    <h3>Address</h3>
                    <textarea name="address" rows="10" placeholder="Hoa Lu, Ninh Binh"></textarea>
                    <input type="submit" value="Confirm order" class="btn-order">
                </fieldset>
            </form>

        </div>
    </section>
    
    
    <div class="footer">
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
</body>
</html>