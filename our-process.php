<?php
  $title="Our Process";
  require_once 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/our-process.css">
<div class="our-process-page-content">
  <?php
    include_once 'includes/title-bar.php';
  ?>
  <div class="intro">
    <div class="container">
      <p class="large-paragraph text-light text-justify pb-4">
        Tamima shoes operates a chain of original leather footwear show rooms in the Qatar.
        The Company offers boots, casuals, sandals for men, women, kids, and juniors. The company provides internationally 
        fame marks. It offers its products in various countries.
      </p>
      <div class="video-section">
        <div class="row">
          <div class="col-lg-7 p-0 order-lg-1 order-2">
            <!--<img src="assets/imgs/our-process/intro-video.png" class="img-fluid">-->
            <iframe src="https://drive.google.com/file/d/14bhTu8VosbfWpDEn-3SpXyccGuQF1IuE/preview" width="400" height="330" allow="autoplay"></iframe>
          </div>
          <div class="col-lg-5 p-0 align-self-center order-lg-2 order-1" style="margin-left:-2px">
            <div class="text-container">
              <h1 class="heading-red">Our Process!</h1>
              <h2>Handmade as it used to be.</h2>
              <p>
                The products section is the most vital one on the Tamima 
                website since it exposes all the data that any client is 
                searching about, and it shall include the product name 
                and a short description.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="follow-us">
    <div class="container">
    <?php
      $iconSourceFile="assets/imgs/our-process/instagram-icon.png";
      require_once 'includes/follow-us.php'
    ?>
    </div>
  </section>

</div>
<?php
  require_once 'includes/subscribe.php';
  require_once 'includes/footer.php'
?>