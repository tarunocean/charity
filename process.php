<?php

if(isset($_POST['btn-submit']))
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    if(empty($Name) || empty($Email) || empty($Message))
    {
        header('location:contact.php?error');
    }

    else
    {
        $to = "info@gsscharity.org";

        if(mail($to,$Name,$Email,$Message))
        header('location:contact.php?success');
    }

    else
    {
        header('location:contact.php');
    }
}


?>