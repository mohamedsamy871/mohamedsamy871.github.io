<?php
    setcookie("shop_squre_number","less");
    setcookie("sorting_items","ASC");
    if(isset($_POST['shop-sorting'])){
         if($_POST['shop-sorting']=="assending"){
            setcookie("sorting_items","ASC");
         }else{
            setcookie("sorting_items","DESC");
         }                           
    }
    $sql_default_value="SELECT * FROM products";
    if(isset($_COOKIE['sorting_items'])){
        $GLOBALS['sql_default_value'].=" ORDER BY Id ".$_COOKIE['sorting_items'];
    }
    if($_COOKIE['shop_squre_number']=="less"){
        $GLOBALS['sql_default_value'].=" LIMIT 8";
    }
    //to get shop products type according to other page link and through querystring 
    if(isset($_GET['category'])){
        $category_value = $_GET['category'];
        $sql_default_value="SELECT * FROM products WHERE ProductType = '$category_value'";
    }
    if($_COOKIE['shop_product_type']==null){
        setcookie("shop_product_type","All Sandals");
    }
    $sql="";
    $title="Catalogue";
    require_once 'includes/header.php';
    require_once 'functions/db.php';
?>
<link rel="stylesheet" href="assets/css/shop.css">
<div class="shop-page-content">
    <?php
        include_once 'includes/title-bar.php'
    ?>
    <section class="shop-section">
        <div class="nav-container container">
            <div class="row">
                <div class="col-md-3 filters">
                    <div class="breadcrumb">
                        <a href="shop.php">Products</a>  /  <a href="shop.php" class="active"><?=$_COOKIE['shop_product_type']?></a>
                    </div>
                    <div class="filter-heading">
                        <h5>
                            Filter By
                        </h5>
                    </div>
                    <form method="post">
                        <div class="filter-body mt-4">
                            <h6>
                                Types
                            </h6>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="mencheckbox" name="menbox" >
                                <label class="form-check-label" for="mencheckbox">Men</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="womencheckbox" name="womenbox">
                                <label class="form-check-label" for="womencheckbox">Women</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="kidscheckbox" name="kidsbox">
                                <label class="form-check-label" for="kidscheckbox">Kids</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="walletcheckbox" name="walletbox" >
                                <label class="form-check-label" for="walletcheckbox">Wallets</label>
                            </div>
                        </div>
                        <div class="filter-body mt-3">
                            <h6>
                                Sizes
                            </h6>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="size57" name="size57">
                                <label class="form-check-label" for="size57">5-7</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="size79" name="size79">
                                <label class="form-check-label" for="size79">7-9</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="size911" name="size911">
                                <label class="form-check-label" for="size911">9-11</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="size1113" name="size1113">
                                <label class="form-check-label" for="size1113">11-13</label>
                            </div>
                        </div>
                        <!--
                        <button type="submit" name="shop-filter-submitter" class="btn">GO</button>
-->
                    </form>
                </div>
                <div class="col-md-9 shop-items">
                    <div class="shop-controls">
                        <div class="icons-container">
                            <a href="#" class="grid-view-button active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4H8V8H4V4Z" fill="currentColor" /><path d="M4 10H8V14H4V10Z" fill="currentColor" /><path d="M8 16H4V20H8V16Z" fill="currentColor" /><path d="M10 4H14V8H10V4Z" fill="currentColor" /><path d="M14 10H10V14H14V10Z" fill="currentColor" /><path d="M10 16H14V20H10V16Z" fill="currentColor" /><path d="M20 4H16V8H20V4Z" fill="currentColor" /><path d="M16 10H20V14H16V10Z" fill="currentColor" /><path d="M20 16H16V20H20V16Z" fill="currentColor" /></svg>
                            </a>
                            <a href="#" class="list-view-button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 4H22V20H2V4ZM8 6H20V18H8V6Z" fill="currentColor" /></svg>
                            </a>
                        </div>
                        <div class="sorting">
                            <form method="POST">
                                <select class="form-control" name="shop-sorting" onchange="this.form.submit()">
                                    <option value="">Sorting .. </option>
                                    <option value="descending">A to Z</option>
                                    <option value="assending">Z to A</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row grid-view">
                        <?php 
                            //if(isset($_POST['shop-filter-submitter'])){
                                global $type_p;
                                if(isset($_POST['menbox'])){
                                    $type_p='men';
                                }else if(isset($_POST['womenbox'])){
                                    $type_p='women';
                                }else if(isset($_POST['kidsbox'])){
                                    $type_p='kids';
                                }else if(isset($_POST['walletbox'])){
                                    $type_p='wallets';
                                }else{
                                    $type_p='';
                                }
                                global $size_p;
                                if(isset($_POST['size57'])){
                                    $size_p='5to7';
                                }else if(isset($_POST['size79'])){
                                    $size_p='7to9';
                                }else if(isset($_POST['size911'])){
                                    $size_p='9to11';
                                }else if(isset($_POST['size1113'])){
                                    $size_p='11to13';
                                }else{
                                    $size_p='';
                                }
                                get_values_from_db($type_p,$size_p);
                                /*
                            }else{
                                $sql=$GLOBALS['sql_default_value'];
                            }*/
                            function get_values_from_db($typep,$sizep){
                                if(!empty($typep) && empty($sizep)){
                                    $GLOBALS['sql'] = "SELECT * FROM products WHERE ProductType='$typep'";
                                    if($_COOKIE['shop_squre_number']=="less"){
                                        $GLOBALS['sql'].=" limit 8";
                                    }
                                }else if(!empty($typep) && !empty($sizep)){
                                    $GLOBALS['sql'] ="SELECT * FROM products WHERE ProductType='$typep' AND Size='$sizep'";
                                }else if (empty($typep) && !empty($sizep)){
                                    $GLOBALS['sql'] ="SELECT * FROM products WHERE Size='$sizep'";
                                    if(!empty($_COOKIE['shop_product_type_word'])){
                                        $GLOBALS['sql'] = $GLOBALS['sql'] . " and ProductType = '".$_COOKIE['shop_product_type_word'] ."'";
                                    }
                                }else{
                                    $GLOBALS['sql'] =$GLOBALS['sql_default_value'];
                                }
                                return $GLOBALS['sql'];
                            }
                            if(!empty($GLOBALS['sql'])){
                                $result = mysqli_query($conn,$GLOBALS['sql']);
                                if($result){
                                    while($info=$result->fetch_assoc())
                                    {   
                            ?>
                                        <div class="col-lg-3 item col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <button type="button" class="btn text-left" onclick="modalChange()" data-toggle="modal" data-target="#item-<?=$info['Id']?>">
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
                                                                        <div class="col text-right pr-0">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                            <!--
                                                                            <button type="button" class="btn btn-danger">Order Now</button>
                                    -->
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
                            }
                            else{
                        ?>
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel01.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel02.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel03.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel04.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel01.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel02.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel04.jpg" class="card-img-top" alt="...">
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
                                    <div class="col-md-3 item">
                                        <div class="card">
                                            <a href="#">
                                                <img src="assets/imgs/home/carousel03.jpg" class="card-img-top" alt="...">
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
                    <a onclick="changeShopSquareNumber()" class="load-more btn">
                        Show More
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <div class="list-view">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true"  data-toggle="modal" data-target="#item-22">
                                <div class="list-item-container row">
                                    <div class="col align-self-center">
                                        <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-50" alt="...">
                                    </div>
                                    <div class="col align-self-center">
                                        <h5 class="card-title"> Men Sandal</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Categories</p>
                                    </div>

                                </div>
                            </button>
                            <div class="modal fade" id="item-22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="my-modal-footer py-3 px-4">
                                            <div class="row w-100 m-0">
                                                <div class="col">
                                                    <p class="footer-paragraph text-secondary">Price: 55</p>
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
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true"  data-toggle="modal" data-target="#item-22">
                                <div class="list-item-container row">
                                    <div class="col align-self-center">
                                        <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-50" alt="...">
                                    </div>
                                    <div class="col align-self-center">
                                        <h5 class="card-title"> Men Sandal</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Categories</p>
                                    </div>

                                </div>
                            </button>
                            <div class="modal fade" id="item-22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="my-modal-footer py-3 px-4">
                                            <div class="row w-100 m-0">
                                                <div class="col">
                                                    <p class="footer-paragraph text-secondary">Price: 55</p>
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
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true"  data-toggle="modal" data-target="#item-22">
                                <div class="list-item-container row">
                                    <div class="col align-self-center">
                                        <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-50" alt="...">
                                    </div>
                                    <div class="col align-self-center">
                                        <h5 class="card-title"> Men Sandal</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Categories</p>
                                    </div>

                                </div>
                            </button>
                            <div class="modal fade" id="item-22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="my-modal-footer py-3 px-4">
                                            <div class="row w-100 m-0">
                                                <div class="col">
                                                    <p class="footer-paragraph text-secondary">Price: 55</p>
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
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true"  data-toggle="modal" data-target="#item-22">
                                <div class="list-item-container row">
                                    <div class="col align-self-center">
                                        <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-50" alt="...">
                                    </div>
                                    <div class="col align-self-center">
                                        <h5 class="card-title"> Men Sandal</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Categories</p>
                                    </div>

                                </div>
                            </button>
                            <div class="modal fade" id="item-22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="my-modal-footer py-3 px-4">
                                            <div class="row w-100 m-0">
                                                <div class="col">
                                                    <p class="footer-paragraph text-secondary">Price: 55</p>
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
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true"  data-toggle="modal" data-target="#item-22">
                                <div class="list-item-container row">
                                    <div class="col align-self-center">
                                        <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-50" alt="...">
                                    </div>
                                    <div class="col align-self-center">
                                        <h5 class="card-title"> Men Sandal</h5>
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Categories</p>
                                    </div>

                                </div>
                            </button>
                            <div class="modal fade" id="item-22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img src="assets/imgs/home/carousel01.jpg" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="my-modal-footer py-3 px-4">
                                            <div class="row w-100 m-0">
                                                <div class="col">
                                                    <p class="footer-paragraph text-secondary">Price: 55</p>
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
            </div>
        </div>
    </section>
    <section class="special-care" id="special-care-section">
        <div class="red-bg"></div>
        <div class="container nav-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <img src="assets/imgs/shop/special-care-shoe.png" class="img-fluid shoe">
                </div>
                <div class="col-lg-7 col-md-8 col-8 align-self-end" style="margin-bottom:16px">
                    <h2 class="heading-red">
                        because your feet deserve
                    </h2>
                </div>
                <div class="col-lg-2 col-md-4 col-4 align-self-end">
                    <img src="assets/imgs/shop/special-care.png" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
</div>
<?php
    $bigSaleButtonText = "explore now";
    require_once 'includes/subscribe.php';
    require_once 'includes/footer.php';
?>
<script>
    $(document).ready(function(){
        $('.icons-container').on('click','a',function(){
            $('.icons-container a.active').removeClass('active');
            $(this).addClass('active');
        });
        $('.grid-view-button').click(function(){
            $('.list-view').css("display","none");
            $('.grid-view').css("display","flex");
        });
        $('.list-view-button').click(function(){
            $('.list-view').css("display","block");
            $('.grid-view').css("display","none");
        });
    });
</script>