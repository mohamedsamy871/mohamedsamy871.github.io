<style>
    
    .subscribe{
        padding-bottom: 35px;
        background-color: #eee;
        margin-top: 0!important;
    }
    .subscribe h2{
        color:#000;
        font-size: 1.6rem;
        font-weight: 500;
        margin-left: -17px;
        text-transform: none;
        margin-top: 20px;
    }
    .subscribe h2 span{
        color: var(--main-color);
    }
    .subscribe form input{
        background-color: rgba(237,237,237,0.7);
        border-radius: 0;
        border:1px solid #919191;
        color: #606060;
        padding: 22px 10px;
        font-size: 1rem;
        font-weight:200;
        max-width: 553px;
        float: right;
    }
    .subscribe form .input-container{
        position: relative;
    }
    .subscribe form .input-container::before{
        content: 'Enter Your Email Now!';
        width: 213px;
        height: 46px;
        color: #fff;
        background-color: #000;
        text-transform: capitalize;
        position: absolute;
        top: 0;
        left: 74px;
        text-align: center;
        vertical-align: middle;
        font-size: 1rem;
        font-weight: 300;
        padding: 10px;
    }
    @media(max-width:1200px){
        .subscribe form .input-container::before{
            display: none;
        }
    }
    .subscribe form  button.subscribe-button{
        display: block;
        background-color: var(--main-color);
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        text-transform: capitalize;
        border-radius: 0;
        padding: 9px 11px;
}
</style>
<section class="subscribe">
    <div class="container">
        <h2 class="heading-red">
            Subscribe in <span>Tamima Top</span> Mailing List & <span>Stay Updated</span> with our <span>News</span> & <span>Offers</span>
        </h2>
        <form action="add-message.php" method="post">
            <div class="row">
                <div class="col-lg-9 col-md-8 mb-3 input-container">
                    <input type="email" class="form-control" placeholder="Email" name="Email">
                </div>
                <input type="hidden" name="type-of-message" value="subscribeMessage">
                <div class="col-lg-3 col-md-4 mb-2">
                    <button type="submit" class="btn subscribe-button" name="send-message">send your message</button>
                </div>
            </div>
        </form>
    </div>       
</section>