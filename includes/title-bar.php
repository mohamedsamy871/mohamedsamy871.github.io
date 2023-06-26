<style>
    .title-bar{
        background-image: url('assets/imgs/title-bar/001.png');
        background-size: cover;
        font-size: 5rem;
    }
    .title-bar .overlay{
        background-color: rgba(205, 5, 8, 0.6);
        height: 100%;
        width: 100%;
        z-index: 2;
    }
    .title-bar h2{
        padding: 30px 0px;
        color: #fff;
        margin-bottom: 0;
    }
</style>
<div class="title-bar">
    <div class="overlay">
        <h2 class="text-center heading-large"> 
            <?=$title?>
        </h2>
    </div>
</div>