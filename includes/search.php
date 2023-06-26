<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            
    </head>
    <body>
        <style>
                /*************************************************************Search Screen***********************************/
            .search-screen {
                width: 100%;
                height: 100%;
                background-color: #922FEE;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 2
            }

            .search-screen .close-button {
                width: 40px;
                height: 40px;
                background-color: #922FEE;
                color: #fff;
                display: inline-block;
                padding: 9px 12px 9px 5px;
                text-align: right;
                position: absolute;
                right: 0;
                top: 0;
                cursor: pointer;
            }
            .search-screen .container,
            .search-screen .container .row{
                height: 100%
            }
            .search-screen .close-button svg {
                color: #fff;
                font-size: 1rem;
            }
            .search-screen form .btn {
                background-color: #fff;
                color: #922FEE;
                border-radius: 0;
                width: 120px;
                height: 45px;
                font-weight: 500;
            }

            .search-screen form input {
                border-radius: 0;
                width: 311px !important;
                height: 47px;
            }
        </style>
        <div class="search-screen">
            <a class="close-button" href="../index.php">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z" fill="currentColor" /></svg>
            </a>
            <div class="container">
                <div class="row align-content-center justify-content-center">
                    <div class="col-lg-5">
                        <form class="form-inline" method="post" action="../search-results.php">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type here" aria-label="Search" name="searchString" />
                            <button class="btn my-2 my-sm-0" type="submit" name="searchrequest">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>