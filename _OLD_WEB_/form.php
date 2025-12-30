<?php
if(isset($_POST['submit']))

$variable1= $_REQUEST[aa] ;
$variable3= $_REQUEST[email] ;
$variable4= $_REQUEST[mobile] ;



$to ="sales@yesclean.ae";
$from ="sales@yesclean.ae";
$subject = "For contact";
$message="Dear Sir, You have received a contact  request your website. \n


Email :"." ". $variable3." \n
Phone Number :"." ". $variable4;




mail( $to, "$subject",
 $message, "From: $from " );
header("location: index.php");

?>