
<style>
.big-sale-section{
    background-color: var(--main-color);
    padding: 50px 0;
    margin-bottom: 130px;

}
.big-sale-section .container{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

}
.big-sale-section a{
    background-color: #fff;
    color: #000;
    padding: 10px 33px;
    margin-top: 30px;
    text-transform: uppercase;
    display: block;
    border-radius: 36px;
    font-size: 2rem;
    font-weight: 700;

}
.big-sale-section a span{
    color: var(--main-color);
}
@media(max-width:470px){
    .big-sale-section a{
        font-size: 1.5rem!important;
    }
}
@media(max-width:370px){
    .big-sale-section a{
        font-size: 1rem!important;
    }
}
</style>
<section class="big-sale-section">
        <div class="container">
            <div class="big-sale">
                <img src="assets/imgs/who-we-are/big-sale-sm.png" class="img-fluid">
            </div>
            <a href="latest-offer.php">
                <?=$bigSaleButtonText?>
            </a>
        </div>
</section>