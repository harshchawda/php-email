<?php
if(isset($_POST['button_pressed']))
{
    $email=$_POST['email'];
    $info=$_POST['info'];
    $subject=$_POST['sub'];
    mail($email,$subject, $info);
}
?>