<header>
    <div class="nav-container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <img src="assets/imgs/logo.png" class="img-fluid logo">
                <img src="assets/imgs/logo-white.png" class="img-fluid white-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto m-auto">
                    <li class="nav-item <?php if($title=='Home'){echo 'active';}?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if($title=='Catalogue'){echo 'active';}?>">
                        <a class="nav-link" href="shop.php">Catalogue</a>
                    </li>
                    <li class="nav-item dropdown <?php if($title=='Who We Are'||$title=='Our Process'||$title=='About Tamima'){echo 'active';}?>">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            about
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="who-we-are.php">Who We Are</a>
                            <a class="dropdown-item" href="our-process.php">Our Process</a>
                            <a class="dropdown-item" href="about-tamima.php">About Tamima</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($title=='New Arrivals'){echo 'active';}?>">
                        <a class="nav-link" href="new-arrivals.php">new arrivals</a>
                    </li>
                    <li class="nav-item <?php if($title=='Best Sellers'){echo 'active';}?>">
                        <a class="nav-link" href="best-sellers.php">best sellers</a>
                    </li>
                    <li class="nav-item <?php if($title=='Sales'){echo 'active';}?>">
                        <a class="nav-link" href="latest-offer.php">Sales</a>
                    </li>
                    <li class="nav-item <?php if($title=='Branches'){echo 'active';}?>">
                        <a class="nav-link" href="branches.php">branches</a>
                    </li>
                    <li class="nav-item <?php if($title=='Contact Us'){echo 'active';}?>">
                        <a class="nav-link" href="contact.php">contact</a>
                    </li>
                </ul>
                <form class="form-inline m-2 my-lg-0" action="search-result.php" method="post">
                    <div class="row">
                        <div class="col-10 p-0">
                            <input class="form-control" type="search" placeholder="Type to search ..." aria-label="Search" name="searchString">
                        </div>
                        <div class="col-2 p-0">
                            <button class="search-button" type="submit" name="searchrequest">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>    
                </form>
            </div>
        </nav>
    </div>
</header>