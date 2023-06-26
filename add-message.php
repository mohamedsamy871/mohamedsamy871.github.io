<?php
    require_once 'functions/db.php';
    if(isset($_POST['send-message'])){
        $fname= $_POST['FName'];
        $lname=$_POST['LName'];
        $email = $_POST['Email'];
        $subject=$_POST['Subject'];
        $message=$_POST['Message'];
        $type_of_message=$_POST['type-of-message'];
        $sql="INSERT INTO clientmessages (FName,LName,Email,MessageContent,TypeOfMessage)
                VALUES ('$fname','$lname','$email','$message','$type_of_message')";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            header("location:index.php");
        }else{
            header("location:index.php?messagesuccessmessage=Thank you - Your message was sent");
        }
    }
?>