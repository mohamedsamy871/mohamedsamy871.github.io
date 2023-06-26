<?php
    $title="Best Sellers";
    setcookie("shop_squre_number","less");
    require_once 'includes/header.php';
    require_once 'functions/db.php';
?>
<link rel="stylesheet" href="assets/css/best-sellers.css">

<div class="best-sellers-page-content">
    <?php
      include_once 'includes/title-bar.php'
    ?>
    <section class="best-sellers-section">
      <div class="container">
        <h2 class="heading-red">
          explore our bestseller items
        </h2>
        <p class="small-paragraph text-center">
          All our products are made in Italy with natural leather
        </p>
        <div class="best-seller-items">
          <div class="row">
            <?php
                $sql_default_value="SELECT * FROM products";
                if($_COOKIE['shop_squre_number']=="less"){
                  $sql="SELECT * FROM `products` WHERE `ProductType`='kids' limit 4";
                }
                else{
                  $sql="SELECT * FROM `products` WHERE `ProductType`='kids'";
                }
                  $result = mysqli_query($conn,$sql);
                  if($result){
                      while($info=$result->fetch_assoc())
                      {   
            ?>
                          <div class="col-lg-3 item col-md-6">
                              <div class="card">
                                  <div class="card-body">
                                      <button type="button" class="btn text-left" data-toggle="modal" data-target="#item-<?=$info['Id']?>">
                                          <img src="<?=$info['LargeImageUrl']?>" class="card-img-top rounded img-fluid" alt="...">
                                          <p class="card-text"><?=$info['Description']?></p>
                                          <h5 class="card-title"> <?=$info['Name']?></h5>
                                          <p class="card-text"><?=$info['Price']?> SAR</p>
                                      </button>
                                      <!-- Modal -->
                                      <div class="modal fade" id="item-<?=$info['Id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-body p-0">
                                                      <img src="<?=$info['LargeImageUrl']?>" class="img-fluid w-100" alt="...">
                                                  </div>
                                                  <div class="my-modal-footer py-3 px-4">
                                                      <div class="row w-100 m-0">
                                                          <div class="col">
                                                              <p class="footer-paragraph text-secondary">Price: <?=$info['Price']?></p>
                                                          </div>
                                                          <div class="col text-right">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                              <button type="button" class="btn btn-danger">Order Now</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
              <?php
                          }
                      }
                      else{
              ?>
            <div class="col-md-3 col-6">
              <div class="card">
                <a href="#">
                  <img src="assets/imgs/home/orange-shoe.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <a href="#" >
                    <p class="card-text">Categories</p>
                    <h5 class="card-title">Men Sandal</h5>
                    <p class="card-text">Categories</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card">
                <a href="#">
                  <img src="assets/imgs/home/Asset 31.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <a href="#" >
                    <p class="card-text">Categories</p>
                    <h5 class="card-title">Men Sandal</h5>
                    <p class="card-text">Categories</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card">
                <a href="#">
                  <img src="assets/imgs/home/orange-shoe.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <a href="#" >
                    <p class="card-text">Categories</p>
                    <h5 class="card-title">Men Sandal</h5>
                    <p class="card-text">Categories</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card">
                <a href="#">
                  <img src="assets/imgs/home/Asset 8.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <a href="#" >
                    <p class="card-text">Categories</p>
                    <h5 class="card-title">Men Sandal</h5>
                    <p class="card-text">Categories</p>
                  </a>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
          <?php
          if($_COOKIE['shop_squre_number']=="less"){
            ?>
            <a onclick="changeShopSquareNumber()" class="btn load-more">
                  Load More
                  <i class="fa-solid fa-chevron-down"></i>
              </a>
            <?php
          }
          ?>
        </div>
      </div>
    </section>
    <section class="visit-tamima">
      <div class="first-row-sm-screen row w-100 mx-0">
          <div class="col-12 p-0">
            <div class="check-this">
                <div class="row justify-content-center">
                  <div class="col-md-4 text-center align-self-center">
                    <h2>Don’t Miss </h2>
                    <h2>To Check This</h2>
                    <a href="new-arrivals.php">Explore</a>
                  </div>
                  <div class="col-md-4 my-4">
                      <img src="assets/imgs/best-sellers/shoe.png" class="img-fluid">
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-12 p-0">
            <?php
              include_once 'includes/find-us.php';
            ?>
          </div>
      </div>
      <div class="wrapper">
        <div class="first-row row w-100" style="margin-top: -293px;margin-bottom:50px">
            <div class="col-lg-4">
              <div class="check-this">
                <div class="row">
                  <div class="col-md-6 text-center">
                    <h2>Don’t Miss </h2>
                    <h2>To Check This</h2>
                    <a href="new-arrivals.php">Explore</a>
                  </div>
                  <div class="col-md-6">
                      <img src="assets/imgs/best-sellers/shoe.png" class="img-fluid">
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 offset-3">
              <div class="tamima-location">
                <div class="row">
                  <div class="col-md-4">
                    <img src="assets/imgs/best-sellers/location-symbol.png" class="img-fluid">              
                  </div>
                  <div class="col-md-8" style="display: flex;
                                            flex-direction: column;
                                            justify-content: space-evenly;
                                            align-items: start;
                                            text-align: left;">
                    <h2 class="heading-large">
                      visit tamima
                    </h2>
                    <a href="branches.php">
                      <p>
                        Click Here to find the Nearest Store to You
                      </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>





        <div class="container">
          <?php
            $iconSourceFile="assets/imgs/best-sellers/insta-icon.png";
            include_once 'includes/follow-us.php'
          ?>
        </div>

      </div>
    </section>
</div>


<?php
  require_once 'includes/subscribe.php';
  require_once 'includes/footer.php';
?>