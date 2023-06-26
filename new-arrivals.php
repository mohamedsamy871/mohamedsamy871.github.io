<?php
    $title="New Arrivals";
    require_once 'includes/header.php';
    require_once 'functions/db.php';
?>
<link rel="stylesheet" href="assets/css/new-arrivals.css">

<div class="new-arrivals-page-content">
    <?=include_once 'includes/title-bar.php'?>
    <div class="selected-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-lg-7 align-self-end ">
                    <div class="text-part">
                        <h5 class="card-title"></h5>
                        <h6 class="card-title"></h6>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="carousel">
        <div class="container">
            <div class="carousel-part">
                <div id="owl-offers" class="owl-carousel owl-theme">
                    <?php
                        $sql ="SELECT * FROM products WHERE ProductType ='kids' limit 4";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            while($info=$result->fetch_assoc())
                            {   
                    ?>
                    <div class="item p-2">
                        <a class="js-item-anchor">

                            <div class="card">
                                <img src="<?=$info['LargeImageUrl']?>" class="card-img-top" alt="...">
                            </div>
                            <div class="text-part">
                                <h5 class="card-title"><?=$info['Name']?></h5>
                                <p class="card-text"><?=$info['Description']?></p>
                                <span class="d-none"><?=$info['Price']?></span>
                            </div>
                        </a>
                    </div>
                    <?php
                         }
                    }
                    else{
                    ?>
                        <div class="item p-2">
                            <div class="card">
                                <a href="shop.php">
                                    <img src="assets/imgs/latest-offer/18.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <a href="shop.php" class="text-part">
                                <h5 class="card-title">Men Sandal</h5>
                                <p class="card-text">Categories</p>
                            </a>
                        </div>
                        <div class="item p-2">
                            <div class="card">
                                <a href="shop.php">
                                    <img src="assets/imgs/latest-offer/18.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <a href="shop.php" class="text-part">
                                <h5 class="card-title">Men Sandal</h5>
                                <p class="card-text">Categories</p>
                            </a>
                        </div>
                        <div class="item p-2">
                            <div class="card">
                                <a href="shop.php">
                                    <img src="assets/imgs/latest-offer/20.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <a href="shop.php" class="text-part">
                                <h5 class="card-title">Men Sandal</h5>
                                <p class="card-text">Categories</p>
                            </a>
                        </div>
                        <div class="item p-2">
                            <div class="card">
                                <a href="shop.php">
                                    <img src="assets/imgs/latest-offer/20.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <a href="shop.php" class="text-part">
                                <h5 class="card-title">Men Sandal</h5>
                                <p class="card-text">Categories</p>
                            </a>
                        </div>
                    <?php   
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
        $bigSaleButtonText="VIEW THE<span> LATEST MODEL </span>BY TAMIMA";
    ?>
        
    <div class="discover">
        <div class="container">
            <h2 class="heading-red">
                Discover More!
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="wrapper">
                            <img src="assets/imgs/latest-offer/43.jpg" class="img-fluid">
                        <div class="text-container">
                            <h2 class="heading-medium">
                                Get 20% off on our new sandals
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">
                        <img src="assets/imgs/latest-offer/123.jpg" class="img-fluid">
                        <div class="text-container">
                            <h2 class="heading-medium">
                                Get 20% off on our new sandals
                            </h2>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">
                        <img src="assets/imgs/latest-offer/42.jpg" class="img-fluid">
                        <div class="text-container">
                            <h2 class="heading-medium">
                                Get 20% off on our new sandals
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="latest-offer.php" class="btn load-more">
                Know More
                <i class="fa-solid fa-chevron-down"></i>
            </a>
        </div>
    </div>
</div>

<?php
    require_once 'includes/find-us.php';
    require_once 'includes/subscribe.php';
    require_once 'includes/footer.php'
?>