<?php
    $receiver = 'qureshiusama796@gmail.com';
    $sender = $_POST['email'];
    $name =$_POST['name'];
    $message = $_POST['message'];
    $header="From : $sender";

    if(mail($receiver,$name,$message,$header))
    {
        echo "mail sent";
    }
    else{
        echo "Sending Failed";
    }
?>
