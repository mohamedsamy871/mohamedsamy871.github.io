<?php
    $title="Branches";
    require_once 'includes/header.php';
    require_once 'functions/db.php';
?>
<link rel="stylesheet" href="assets/css/branches.css">

<div class="branches-page-content">
    <?php
        include_once 'includes/title-bar.php'
    ?>
    <section class="branches">
        <div class="container">
            <h2 class="heading-red">
                It's Pleasure to see You in Tamima 
            </h2>
            <p class="small-paragraph"> 
                You are welcome to visit any of our stores in Doha to get your most comfortable and friendly footwear.
            </p>
            <div class="row">
            <?php
                $sql="SELECT * from `branches`";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($info=$result->fetch_assoc()){
                ?>
                <div class="col-lg-4 col-md-6 col-12"> 
                    <div class="branch-wrapper">
                        <div class="row">
                            <div class="col-5 pr-0">
                                <div class="branch-image"  style="background-image: url('<?=$info['ImageLink']?>');"></div>
                            </div>
                            <div class="col-7">
                                <h2 class="heading-red">
                                    <?=$info['BranchName']?>
                                </h2>
                                <ul style="width:96% ;" class="branch-contact-items">
                                    <li>
                                    <a href="tel:<?=$info['Phone']?>" class="telnumber">
                                        <i class="fa-solid fa-phone"></i>
                                        <span><?=substr($info['Phone'],0,4).'-'.substr($info['Phone'],4,4)?></span>
                                    </a>
                                    </li>
                                    <li>
                                        <a href="<?=$info['LocationLink']?>" class="location-item" target="_blank">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span><?=$info['Address']?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?=$info['Email']?>" class="location-item" target="_blank" style="max-width:170px">
                                            <i class="fa-solid fa-clock"></i>
                                            <p class="mb-0">
                                                <strong>Thu - Sat : </strong> <?=$info['WorkingHours']?><br>
                                                <strong>Fri : </strong><?=$info['FridayWorkingHours']?>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               <?php
                    }
                }
               ?>
            </div>
        </div>
    </section>
    <section class="form-section">
        <div class="container">
            <h2 class="heading-red">
            Your <span>Message</span> Matters to us!
            </h2>
            <form action="add-message.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Email" name="Email">
                        <input type="text" class="form-control" placeholder="Name" name="FName">
                        <input type="text" class="form-control" placeholder="Subject" name="Subject">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="3" style="resize:none" placeholder="Your Message ..." name="Message"></textarea>
                        <input type="hidden" name="type-of-message" value="branchesMessage">
                        <button type="submit" class="btn" name="send-message">Send your message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="years-of-perfection">
        <div class="container">
            <div class="heading"></div>
            <p class="small-paragraph">We intend from the first day to produce friendly and classic footwear for the GCC; therefore, Tamima was established in 1980 having its base in Doha, Qatar with only one store in Souq Musherib. Meanwhile, we have succeeded in satisfying our guests in GCC and then, Tamima has launched and operated twelve branches within Qatar in different locations and malls.</p>
        </div>
    </section>
</div>

<?php
    require_once 'includes/explore-latest-offers.php';
  require_once 'includes/footer.php';
?>