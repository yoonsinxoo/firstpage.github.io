<?php
if(isset($_POST['name']))
$name = $_POST ['name'];
if (isset($_POST['email']))
$email = $_POST ['email'];

$content = "From $name";
$reipient = "sinxooyooon@hmail.com"
$maliheader = "From $email \r\n";
mail($reipient,$subject,$content,$maliheader) or die("Error")
echo "Email sent!"
?>