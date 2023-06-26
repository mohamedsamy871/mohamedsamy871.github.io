<?php
    $title="Sales";
    require_once 'includes/header.php';
    require_once 'functions/db.php';

?>
<link rel="stylesheet" href="assets/css/latest-offer.css">
<div class="offer-page-content">
    <?php
        include_once 'includes/title-bar.php';
        require_once 'includes/hot-offer.php';
    ?>
    
    <div class="selected-item-container">
        <div class="selected-item">
            <div class="row">
                <img src="" class="img-fluid w-100">
            </div>
            <div class="row mx-0 my-3">
            <div class="col-lg-9">
                    <div class="text-part">
                        <h5 class="card-title"></h5>
                        <h6 class="card-title"></h6>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="col-3 text-right align-self-center"> 
                    <button class="btn btn-danger" onclick="closeCustomModal()">
                        close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="offer-container container">
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
                  ?>
            </div>
        </div>
    </div>
    <div class="right-shoe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center mb-5">
                    <h2 class="heading-red">
                        The Right Shoes Can Make Everything
                    </h2>
                    <img src="assets/imgs/latest-offer/different.png" class="img-fluid">
                </div>
                <div class="col-lg-4 text-center">
                    <img src="assets/imgs/latest-offer/shoe.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'includes/subscribe.php';
    require_once 'includes/footer.php';
?>