







 

<?php 

if(isset($_POST['sub'])){



$email = $_POST['email'];

$mobile = $_POST['mobile'];

$pn = $_POST['pn'];





$header = 'MIME-Version: 1.0' . "\r\n"; 

$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$header .= 'From: Enquiry From  YES Clean   <no-replay@yesclean.ae >' . "\r\n";

//$header .= 'Bcc: sales@yesclean.ae' . "\r\n";

$message='

<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" align="center">

<tbody><tr>

<td>

  

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">

    

    

  <tbody><tr valign="top">

    <td align="center" style="padding-top:30px"><a href="https://www.yesclean.ae/" height="40" width="180" border="0" alt="Atlassian" style="display:block;color:#4c9ac9" align="middle" class="CToWUd"><img src="https://www.yesclean.ae/img/logo.png"/></a>

    </td>

    </tr>

    

    

    <tr>

    <td style="color:#cccccc;padding-top:30px" valign="top">

        <hr color="cccccc" size="1">

    </td>

    </tr>

  

  

        

  <tr>

  <td valign="top" style="padding-top:30px;font-family:Helvetica neue,Helvetica,Arial,Verdana,sans-serif;color:#205081;font-size:24px;line-height:40px;text-align:center;font-weight:bold" align="middle">

    <a style="text-decoration:none;color:#205081;font-weight:bold" target="_blank">

           

    '.$pn.'</a>      

       

  </td>

  </tr>

  







      

 

  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Mail: '.$email.'  </a>

                                 

      </td>

      </tr>









  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Phone: '.$mobile.'  </a>

                                 

      </td>

      </tr>

      </tbody></table>

  </td>

  </tr>

  





    </tbody></table>

</td>

</tr>



    

<tr>

<td>

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">        

    <tbody><tr>

    <td style="color:#cccccc" valign="top">

        <hr color="cccccc" size="1"> 

    </td>

    </tr>           

    <tr>



    </tr>

    <tr>

    <td valign="top" style="font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;color:#707070;font-size:12px;line-height:18px;text-align:center;font-weight:none" align="center">

                Copyright by YesClean.ae

    </td>

    </tr>



    </tbody></table>

    

</td>

</tr>

</tbody></table>

';



if(mail('sales@yesclean.ae','Express Interest' , $message,$header)){



echo "<script>alert('Mail Send Successfully')</script>";}



}

?>



<script>

  $(function(){

    var con=$('#product-tittle').html();

    //alert(con);

    $('#pn').val(con);

  });

</script>



<div class="intrest">



<h3>EXPRESS INTEREST</h3>

          <form method="post">

<input type="hidden" name="pn" id="pn" value="Vehicle Exhaust Extraction">

          <div class="col-md-12 col-sm-12 padd">

            <input type="email" name="email" placeholder="Enter Your Email id" required="">

            </div>



            <div class="col-md-12 col-sm-12 padd">

            <input placeholder="Mobile number" name="mobile" required="">

            </div>





            <div class="col-md-12 col-sm-12 padd">

            <input type="submit" value="SEND" name="sub">

            </div>

          </form> 

          

          <h4>Hear from us in 24 hours</h4>

</div>