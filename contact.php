<?php
//variable setting
$name =$_REQUEST ['name'];
$email=$_REQUEST['Email Address (Required)'];
$message=$_REQUEST['Movie Name'];
$detail=$_REQUEST['Detail of movie']


//check input filds
if (empty($name) || empty($email) || empty($message) || empty(detail))
{
    echo "Please fill all the section";
}
else
{
    mail("rautamit930@gmail.com", "Movies on request", $message , "From: $name <
          $email> <$detail> <$name> ");
    echo "<script type='text/javascript'>alert('your message sent successfully. Thanks for visiting our website.');
           window.history.log(-1);
    </script>";
}
?>