<?php
    $title="Search Results";
    $sql='';
    $searchstring='';
    require_once 'functions/db.php';
    require_once 'includes/header.php';
    require_once 'includes/title-bar.php'; 
    if(isset($_POST['searchrequest']))
    {
        $GLOBALS['searchstring'] = $_POST['searchString'];
        $GLOBALS['sql'] = "SELECT * from products where `ProductType` LIKE '%$searchstring%' 
                                            OR `Size` LIKE '%$searchstring%'
                                            OR `Name` LIKE '%$searchstring%'
                                            OR `Description` LIKE '%$searchstring%'
                                            OR `Price` LIKE '%$searchstring%'";
    }
?>
<style>

</style>

<div class="content-section">
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = mysqli_query($conn,$GLOBALS['sql']);
                    if(!$result||!(mysqli_num_rows($result)>0)){
                ?>
                    <tr class="no-result-message">
                        <td>There are no Search result that matches <?=$searchstring?></td>
                    </tr>
                <?php
                    }
                    else
                    {
                        while($info=$result->fetch_assoc()){
                ?>
                    <?php
                        
                    ?>
                        <tr>
                            <td>
                                <a href="product-details.php">
                                    <?=$info['Name']?>
                                </a>
                            </td>
                            <td>
                                <a href="product-details.php">
                                    <?=$info['Price']?>
                                </a>
                            </td>
                            <td>
                                <a href="product-details.php">
                                    <?=$info['Description']?>
                                </a>
                            </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    require_once 'includes/footer.php'
?>