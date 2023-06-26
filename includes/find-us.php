<style>
  .find-us-section{
    padding-top: 0!important;
    margin-top: 20px!important;
  }
  .find-us>.container{
    max-width: 915px!important;
  }
    .find-us h2{
        margin-bottom: 0!important;
        line-height: 40px;
        font-size:3rem!important;
        text-transform:none!important;
    }
    @media(max-width:776px){
      .find-us h2{
        font-size: 4.3rem;
        line-height: 57px;
      }
    }
    .find-us img{
        width:100px;  
        transition: all 0.4s ease-in-out;  
    }
    .find-us a{
        font-size: 1.3rem;
        font-weight: 500;
        color: #000;
        white-space: nowrap;
        text-transform: none;
        margin-top: 15px;
        display: block;
    }
    .find-us a span{
        color: var(--main-color);
        text-transform: none;
    }
    @media(max-width:991px){
      .find-us a{
        white-space: normal;
      }
      .find-us .col-lg-3{
        text-align: center!important;
      }
    }
    .find-us-section:hover img{
      transform: scale(1.2);
    }
  .find-us .col-lg-3{
      text-align: left;
    }

</style>
<section class="find-us-section">
    <div class="find-us">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center align-self-center ">
              <h2 class="heading-large">Visit Us in Store</h2>
              
              <a href="branches.php">Click <span>Here</span> to find the <span>Nearest</span> Tamima Store to You!</a>
            </div>
            <div class="col-lg-3 align-self-center">
              <img class="img-fluid" src="assets/imgs/home/location.png">
            </div>
          </div>
        </div>
    </div>
</section>