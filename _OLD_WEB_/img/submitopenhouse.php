<?php

if (isset($_POST['reg-oh'])) {
    //print_r($_POST);exit;
    $name = $_POST['firstname'];
    $name .= ' ' . $_POST['lastname'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    $avail_dates = implode(", ", $_POST['ohdate']);
    $subject = $_POST['subject'];

    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header .= 'From: ' . $mail . "\r\n";

    $message = '
<div style="background:#e5e5e5; padding:2% 6%">


<div style="padding:15px; background:#e7e7e7;text-align: center;  border-bottom:solid 5px #9dc33b">
<div><img src="https://www.yesclean.ae/img/logo.png"  alt="Yesclean" /></div>
</div>


 


<div style="margin-top: -6%;">
<div style="padding:15px 15px 35px 15px; background:white;text-align: center; ">
<H1>Register On Openhouse | Yesclean</H1>
<div style="padding-bottom:5px; height: 30px; border-top:dashed 1px #e5e5e5; padding-top:20px;">
<div > Person Name:  <a style="color:#999">' . $name . '</a></div>
</div>
<div style="padding-bottom:5px; height: 30px;">
<div > Company:  <a style="color:#999">' . $company . '</a></div>
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Email:  <a style="color:#999">' . $mail . '</a></div>
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Phone:  <a style="color:#999">' . $phone . '</a></div>
</div>


<div style="padding-bottom:5px; height: 30px;">
<div > Subject:  <a style="color:#999">' . $subject . '</a></div>


  
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Preffered to come on :  <a style="color:#999">' . $avail_dates . '</a></div>
  
</div>

</div>

';

    $result = mail('kavya@yesmachinery.ae', 'Openhouse Registration', $message, $header);
    //mail($email,'Thanks for your feedback' , $feedback,$header);
    if ($result) {
        echo "<script>alert('Mail Send Successfully')</script>";
        echo "<script>window.location='register-openhouse.php'</script>";
    } else {
        echo "<script>alert('Something Wrong.......')</script>";
    }
}
