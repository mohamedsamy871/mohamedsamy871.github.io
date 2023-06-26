<?php 
    require_once 'functions/db.php';
?>
<style>
    .offer-banner {
        position: relative;
        margin: 25px 0;
        background-size: contain;
        background-repeat: no-repeat;
        background-position-x: 50%;
        min-height: 400px;
    }
    @media(min-width:991px){
        .offer-banner {
            margin: 60px 0!important;  
        }
    }
    /*
    .offer-banner .hot-offer-label{
        background-image: url('assets/imgs/shared/hot-offer-title.png');
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 133px;
        position: absolute;
        top: -57px;
        width: 362px;
        left: 40%;
        z-index: 5;
    }
            <div class="hot-offer-label"></div>

    */
    .offer-banner h2,.offer-banner h1{
        color: #fff;
        text-transform: uppercase;
        font-size: 3rem;
    }
    .offer-banner h1{
        font-size: 4.5rem;
        line-height: 64px;
    }
    .offer-banner h2{
        margin-bottom: 0;
    margin-top: 40px;
    }
    @media(max-width:991px){
        .offer-banner h2,.offer-banner h1{
        font-size: 1.6rem;
        line-height: 30px;
    }
    }
    @media(max-width:323px){
        .offer-banner h2,.offer-banner h1{
        font-size: 1.2rem;
        line-height: 25px;

    }
    }
</style>
        <?php 
            $sql = "SELECT FirstWidget FROM salespagephotos where FirstWidget is NOT NULL limit 1";
            $result = mysqli_query($conn,$GLOBALS['sql']);
            if($result){
                
              while($info=$result->fetch_assoc())

              {   
        ?>
            <div class="offer-banner" style="background-image: url('<?=$info['FirstWidget']?>');">
                <!--
                    <div class="container">
                        <div class="row">
                                <div class="col-4 align-self-center">
                                    <img class="img-fluid 70-percent" src="assets/imgs/shared/70percent.png">
                                </div>
                                <div class="col-4 text-center align-self-center">
                                    <h2 class="heading-red">Limited Edition</h2>
                                    <h1 class="heading-large">discount</h1>
                                </div>
                                <div class="col-4 align-self-center">
                                    <img class="img-fluid 70-percent" src="assets/imgs/shared/hot-offer-shoe.png">
                                </div>
                        
                        </div>
                    </div>
                -->
            </div>
        <?php
            }
        }
        ?>