<?php
    $title="Contact Us";
    require_once 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/contact.css">

<div class="contact-page-content">
    <?php 
        include_once 'includes/title-bar.php'
    ?>
    <section class="contact-text-section">
        <div class="container">
            <h2 class="heading-medium">
                 We are Glad to Hear from <span>You</span>! Get in touch with us <span>Now</span>!
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <a href="tel:+97412345789">
                        <i class="fa-solid fa-phone"></i>
                        <span> +974 123 45 789</span>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="https://goo.gl/maps/VqNimhHMoP8u4EBn6" target="_blank">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Doha, Qatar, P.O.BOX.: 22200</span>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                <a href="mailto:mfm@mafcogroup.com">
                <i class="fa-solid fa-envelope"></i>
                    <span style="font-size:1.1rem">mfm@mafcogroup.com</span>
                </a>

                </div>
            </div>
        </div>

    </section>
    <section class="form-section">
        <div class="row m-0 p-0">
            <div class="col-md-6 p-0">
                <div class="form-wrapper">
                    <h2 class="text-center">
                        Send us message
                    </h2>
                    <form action="add-message.php" method="post" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="First Name" name="FName">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="LName">
                            </div>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="Email">
                        <textarea class="form-control" rows="3" style="resize: none;" placeholder="Type Your Message Here" name="Message"></textarea>
                        <input type="hidden" name="type-of-message" value="contactMessage">
                        <button type="submit" class="btn" name="send-message">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="map-wrapper"></div>
            </div>  
        </div>
    </section>
</div>

<?php
  require_once 'includes/footer.php'
?>