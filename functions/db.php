<?php


    $host='localhost';
    $db='tamimadb';
    $user='root';
    $password='';
    $charset='utf8';
/*
 $host='127.0.0.1:3306';
    $db='u115184669_tamimadb';
    $user='u115184669_tamimadb';
    $password='Rg]KFp[u7';
    $charset='utf8';
*/
try{
    $conn = mysqli_connect($host,$user,$password,$db);
}catch(PDOException $ex){
    echo $ex->getMessage();
    die("Connection Error");
}
?>
