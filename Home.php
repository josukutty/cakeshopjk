<?php
    include 'header.php';
    
?>
<?php
session_start();
session_regenerate_id(true);


if( !isset($_SESSION['UserLoginId']))
{
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide shadow-sm    " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active mando">
                        <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousel2.jpg" class="d-block w-100 mando" alt="...">
                    </div>
                    <div class="carousel-item mando">
                        <img src="images/carousel3.jpg " class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card bg-dark" style="width: 20rem;">
                    <img src="images/cake1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-light bg-dark">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Check out the latest deals and offers</p>
                        <a href="products.php" class="btn btn-primary">Products</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card bg-dark" style="width: 20rem;">
                    <img src="images/Cheesecake-Factory.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-light bg-dark">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Check out the latest deals and offers</p>
                        <a href="About.php" class="btn btn-primary">About us</a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="card bg-dark" style="width: 20rem;">
                    <img src="images/cart.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-light bg-dark">
                        <h5 class="card-title">My Cart</h5>
                        <p class="card-text">Check out the latest deals and offers</p>
                        <a href="mycart.php" class="btn btn-primary">Go to Cart</a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <section>
        
    </section>


</body>
</html>