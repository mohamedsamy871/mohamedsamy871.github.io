<?php
    global $message;
    if(isset($_GET['messagesuccessmessage'])){
      $message = $_GET['messagesuccessmessage'];
    }
    $title="Home";
    require_once 'includes/header.php';
    require_once 'functions/db.php';
    if(!empty($message)){
?>
    <div class="message-sent-container">
        <div class="message-sent">
            <?=$message?>
        </div>
    </div>
<?php
    }
?>
<link rel="stylesheet" href="assets/css/home.css">
<div class="page-content">
  <section class="intro">
      <figure class="figure">
        <img src="assets/imgs/home/banner.jpg" class="figure-img img-fluid" alt="">
    </figure>
  </section>
  <section class="carousel">
    <div class="row mx-0">
      <div class="col-lg-6 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php 
            $sql = "SELECT FirstWidget FROM homepagephotos where FirstWidget is NOT NULL limit 2";
            $result = mysqli_query($conn,$GLOBALS['sql']);
            if($result){
              while($info=$result->fetch_assoc())
              {   
            ?>
            <div class="carousel-item active">
              <img src="<?=$info['FirstWidget']?>" class="d-block w-100" >
            </div>
            <?php
              } 
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-0 owl-part">
        <div class="w-100"  style="max-height: 530px;overflow: hidden;">
          <div id="owl-carousel-imgs" class="owl-carousel owl-theme">
          <?php 
            $sql = "SELECT SecondWidget FROM homepagephotos where SecondWidget is NOT NULL limit 2";
            $result = mysqli_query($conn,$GLOBALS['sql']);
            if($result){
              while($info=$result->fetch_assoc())
              {   
            ?>
            <div class="item">
              <img src="<?=$info['SecondWidget']?>" class="img-fluid">
            </div>
            <?php
              } 
            }
            ?>
            <!--
            <div class="item">
              <img src="assets/imgs/home/world-cup.jpg" class="img-fluid">
            </div>
          -->
          </div>
        </div>
        <div class="w-100">
        <?php 
            $sql = "SELECT ThirdWidget FROM homepagephotos where ThirdWidget is NOT NULL limit 1";
            $result = mysqli_query($conn,$GLOBALS['sql']);
            if($result){
              while($info=$result->fetch_assoc())
              {   
            ?>
              <img src="<?=$info['ThirdWidget']?>" class="img-fluid w-100">
          <?php
              } 
            }
            ?>
        </div>
      </div>
    </div>
  </section>
  <section class="best-sellers">
    <div class="container">
      <div class="head-paragraph">
        <h2 class="heading-red">
          Explore our Bestsellers
        </h2>
        <p class="small-paragraph text-center mb-0">
          All our products are made in Italy with natural leather.
        </p>
        <p class="small-paragraph text-center mt-1">
          Catch up your Item Now from our Stores!
        </p>
      </div>
      <div class="carousel-part">
        <div id="owl-categories" class="owl-carousel owl-theme">
          <div class="item p-2">
            <div class="card">
              <a href="shop.php">
                <img src="assets/imgs/home/carousel01.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="shop.php" >
                  <p class="card-text">Tp 10067</p>
                  <h5 class="card-title">Men Sandal</h5>
                  <p class="card-text">34 QR</p>
                </a>
              </div>
            </div>
          </div>
          <div class="item p-2">
            <div class="card">
              <a href="shop.php">
                <img src="assets/imgs/home/carousel02.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="shop.php" >
                <p class="card-text">Tp 10067</p>
                  <h5 class="card-title">Men Sandal</h5>
                  <p class="card-text">34 QR</p>
                </a>
              </div>
            </div>
          </div>
          <div class="item p-2">
            <div class="card">
              <a href="shop.php">
                <img src="assets/imgs/home/carousel03.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="shop.php" >
                <p class="card-text">Tp 10067</p>
                  <h5 class="card-title">Men Sandal</h5>
                  <p class="card-text">34 QR</p>
                </a>
              </div>
            </div>
          </div>
          <div class="item p-2">
            <div class="card">
              <a href="shop.php">
                <img src="assets/imgs/home/carousel04.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="shop.php" >
                  <p class="card-text">Tp 10067</p>
                  <h5 class="card-title">Men Sandal</h5>
                  <p class="card-text">34 QR</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="head-paragraph mt-5">
        <h2 class="heading-red">
          know more about tamima best selling items
        </h2>
        <p class="small-paragraph text-center">
          Without a doubt, the most comfortable and dependable sandal brand in the world. Tamima is well-known for its high-quality products and classic designs. 
        </p>
      </div>
    </div>

  </section>
  <section class="categories-with-background">
    <div class="container">
      <h2 class="outlined-categories-heading">ca<span>tego</span>ries</h2>
      <div class="row justify-content-center">
        <div class="col-lg-2 col-md-6">
          <a href="shop.php?category=men" class="category-item">
            men
          </a>
        </div>
        <div class="col-lg-2 col-md-6">
          <a href="shop.php?category=women"  class="category-item">
            women
          </a>
        </div>
        <div class="col-lg-2 col-md-6">
          <a href="shop.php?category=kids"  class="category-item">
            kids
          </a>
        </div>
        <div class="col-lg-2 col-md-6">
          <a href="shop.php?category=wallets" class="category-item">
            wallet
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="exclusive-offers">
    <div class="wrapper">
      <div class="red-background"></div>
      <div class="row">
        <div class="col-lg-4 col-12">
        <img src="assets/imgs/home/white-shoe-background2.png" class="img-fluid">
        </div>
        <div class="col-lg-4 align-self-center col-md-8 col-12 text-center  ">
          <div class="text">
            <h2>exclusive</h2>
            <h3>offers!</h3>
          </div>
        </div>
          <div class="col-lg-4 align-self-center text-center col-md-4 col-12">
            <a href="latest-offer.php" class="explore-more">
              <p>explore <span>more!</span></p>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
      </div>
    </div>
  </section>
<?php
require_once 'includes/find-us.php'
?>

  <section class="prefooter-carousel-section">
    <div id="owl-prefooter-carousel" class="owl-carousel owl-theme">
        <div class="item">
          <img src="assets/imgs/home/withyou.png" class="img-fluid">
        </div>
        <div class="item">
          <a href="https://www.instagram.com/tamimaqatar/" target="_blank">
            <img src="assets/imgs/home/follow-us.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <img src="assets/imgs/home/chooseshoe.png" class="img-fluid">
        </div>
      </div>
  </section>
</div>
<?php
  require_once 'includes/footer.php'
?>