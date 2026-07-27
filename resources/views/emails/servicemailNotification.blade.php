<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book a Service</title>


</head>

<body>
  <!-- partial:index.partial.html -->
  <html xmlns:v="urn:schemas-microsoft-com:vml">

  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}">
    <style id="aw-autoinject" type="text/css">
      body,
      a {
        word-break: break-word;
      }

      .feed__title a {
        text-decoration: underline;
      }

      .text-element h1 {
        color: inherit;
        font-family: inherit;
        font-size: 36px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element h2 {
        color: inherit;
        font-family: inherit;
        font-size: 32px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element h3 {
        color: inherit;
        font-family: inherit;
        font-size: 28px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element h4 {
        color: inherit;
        font-family: inherit;
        font-size: 24px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element h5 {
        color: inherit;
        font-family: inherit;
        font-size: 20px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element h6 {
        color: inherit;
        font-family: inherit;
        font-size: 16px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0.5em 0;
      }

      .text-element p,
      .paragraph p {
        color: inherit;
        font-family: inherit;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
      }

      .text-element div {
        color: inherit;
        font-family: inherit;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
      }

      .text-element pre {
        color: inherit;
        display: block;
        font-family: monospace;
        font-size: 16px;
        line-height: 1;
        margin: 1em auto;
        white-space: pre;
        max-width: 500px;
        overflow: auto;
        overflow-wrap: break-word;
      }

      .text-element address {
        color: inherit;
        font-family: inherit;
        display: block;
        font-size: 16px;
        font-style: italic;
        line-height: 1.15;
        margin: 0.5em 0;
      }

      .text-element blockquote,
      .headline blockquote,
      .paragraph blockquote {
        border-left: 5px solid #ccc;
        font-style: normal;
        margin-left: 0;
        margin-right: 0;
        overflow: hidden;
        padding-left: 15px !important;
        padding-right: 15px !important;
        box-sizing: border-box;
      }

      @media only screen and (max-width:599px) {
        img {
          max-width: 100% !important;
          min-height: 1px !important;
          height: auto !important;
        }

        .text-element pre {
          max-width: 250px;
        }

        .aw-stack .container {
          box-sizing: border-box;
          display: block !important;
          float: left;
          max-width: 100% !important;
          margin: auto;
          width: 100% !important;
        }

        .video .video-content {
          width: auto !important;
        }

        .feed__item--postcard-side,
        .feed__item--postcard-main,
        .feed__item--block {
          box-sizing: border-box;
          display: block !important;
          max-width: 100% !important;
          margin: auto;
          width: 100% !important;
        }

        .feed__item--block>div {
          margin: 0 0 16px 0 !important;
        }

        .feed__image {
          width: 100% !important;
        }

        .feed__spacer {
          display: none !important;
        }
      }
    </style>
    <style type="text/css">
      v:* {
        behavior: url(#default#VML);
        display: inline-block;
      }

      body,
      #bodyTable,
      #bodyCell {
        height: 100%;
        margin: 0px;
        padding: 0px;
        width: 100%
      }

      body {
        background-color: #fefefe;
        color: #333333;
        font-family: 'Exo 2', sans-serif;
        font-size: 18px;
        line-height: 1.5em;
        font-weight: 400 !important;
        height: 100%;
        margin: 0 !important;
        padding: 0 !important;
        width: 100%
      }

      body,
      table,
      td {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%
      }

      table,
      td {
        color: #333333;
        font-family: Helvetica, Arial,
          sans-serif;
        border-collapse: collapse;
        border-spacing: 0;
        border: 0;
        font-size: 18px;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt
      }

      img {
        -ms-interpolation-mode: bicubic;
        border: 0;
        height: auto;
        line-height: 100%;
        max-width: 100%;
        outline: none;
        text-decoration: none;
        color: #333333;
        font-size: 20px;
        font-weight: 700;
        border-radius: 10px
      }

      .temp-header img {
        border-radius: 0px
      }

      table {
        border-collapse: collapse !important
      }

      strong {
        font-weight: 700
      }

      .container {
        padding: 0
      }

      .floated-none td {
        padding: 0
      }

      .contained {
        max-width: 600px;
        width: 100%
      }

      .contained img {
        height: auto !important;
        max-width: 100% !important
      }

      .paragraph div,
      .paragraph p {
        color: #333333;
        font-family: 'Exo 2', sans-serif;
        font-size: 18px;
        line-height: 125%;
        font-weight: 400;
        text-align: left
      }

      .text-element div,
      .text-element p {
        color: #333333;
        font-family: 'Exo 2', sans-serif;
        font-size: 18px;
        line-height: 125%;
        font-weight: 400;
        text-align: left
      }

      .text-element a,
      .paragraph a {
        color: #000000;
        font-weight: bold
      }

      .headline {
        color: #333333;
        font-family: 'Exo 2', sans-serif;
        font-size: 36px;
        line-height: 125%;
        font-weight: 700;
        text-align: left
      }

      .headline a {
        color: #333333;
        text-decoration: none;
        font-weight: bold
      }

      .temp-footer .paragraph div,
      .temp-footer .paragraph p {
        color: #7c7c7c;
        font-size: 14px;
        line-height: 125%
      }

      .temp-footer .text-element div,
      .temp-footer .text-element p {
        color: #7c7c7c;
        font-size: 14px;
        line-height: 125%
      }

      .temp-footer .headline {
        color: #7c7c7c;
        font-size: 16px
      }

      .temp-footer .text-element a,
      .temp-footer .paragraph a {
        color: #7c7c7c
      }

      .temp-product .temp-padding {
        padding: 10px
      }

      .temp-product .image {
        max-width: 100%;
        height: auto;
        padding-bottom: 0px
      }

      .temp-product .image img {
        border-radius: 4px
      }

      .temp-product img a {
        text-decoration: none !important
      }

      .temp-product .temp-headline {
        color: #333333;
        font-size: 18px;
        line-height: 1.15em;
        max-width: 100%;
        text-align: left
      }

      .temp-product .temp-paragraph {
        font-size: 18px;
        line-height: 1.25em;
        font-weight: 400;
        max-width: 100%;
        text-align: left;
        padding-top: 2px
      }

      .temp-product .temp-price {
        font-size: 20px;
        line-height: 1.15em;
        font-weight: 500;
        max-width: 100%;
        text-align: left;
        padding-top: 2px
      }

      .temp-product a {
        color: #333333;
        font-weight: bold;
        text-decoration: none !important
      }

      .temp-product .temp-button-padding table {
        width: 100%
      }

      .coupon .headline {
        font-size: 20px;
        text-align: center
      }

      .coupon .paragraph {
        text-align: center
      }

      .temp-article .headline {
        font-size: 24px;
        margin: 0;
        text-align: left !important
      }

      .temp-article .paragraph {
        text-align: left !important
      }

      .temp-article td {
        padding: 0
      }

      .temp-article .padding {
        padding-bottom: 10px
      }

      .temp-article .read-more {
        text-align: left
      }

      .temp-article a {
        color: #333333
      }

      .clear {
        clear: both
      }

      .aw-image-link {
        border: 0;
        text-decoration: none
      }

      ol,
      ul {
        color: #333333
      }

      li {
        color: #333333
      }

      a[x-apple-data-detectors] {
        border-bottom: none !important;
        color: inherit !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important
      }

      center>div {
        box-sizing: border-box
      }

      @media screen and (max-width: 599px) {

        body,
        #bodyTable,
        #bodyCell {
          width: 100% !important;
          margin: auto;
          clear: both !important;
          display: block
        }

        img {
          max-width: 100% !important;
          height: auto !important;
          max-height: 300%
        }

        .paragraph {
          font-size: 18px !important
        }

        .headline {
          font-size: 28px !important
        }

        .temp-footer .paragraph {
          font-size: 14px !important
        }

        .temp-footer .headline {
          font-size: 16px !important
        }

        .share img {
          width: 20px !important;
          height: auto !important;
          display: inline-block
        }

        .temp-button-padding td {
          padding: 10px 20px !important
        }

        .video td {
          display: table-cell !important;
          text-align: center !important
        }

        .temp-article div {
          box-sizing: border-box !important;
          display: block !important;
          width: 100% !important
        }

        .floated-left {
          display: inline-table !important;
          width: 100% !important;
          text-align: center !important
        }

        .floated-left td {
          padding: 10px 0px !important
        }

        .floated-right {
          display: inline-table !important;
          width: 100% !important;
          text-align: center !important
        }

        .floated-right td {
          padding: 10px 0px !important
        }

        .signature_spacer {
          display: none !important
        }

        .signature_content {
          text-align: center !important
        }
      }

      @media only screen and (min-width: 10px) and (max-width: 599px) {
        u~div img {
          width: auto !important
        }
      }
    </style>
  </head>

  <body>

    <center>
      <div align="center">
        <table border="0" cellspacing="0" cellpadding="0" width="100%" class="aw-bgc" align="center" role="presentation"
          style="background-color: rgb(248, 248, 248); font-weight: 400; text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse; border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;">
          <tbody>
            <tr>
              <td class="temp-wrapper"
                style="text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse; border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;">
                <div align="center">

                  <!--[if (gte mso 9)]><table border="0" cellspacing="0" cellpadding="0" width="600" align="center" role="presentation"><tr><td class="temp-header"><![endif]-->
                  <div class="temp-header" style="max-width: 600px; ">
                    <div class="temp-fullbleed contained" style="max-width: 600px; width: 100%;">
                      <div class="region">
                        <div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--[if (gte mso 9)]></td></tr></table><![endif]-->

                  <!--[if (gte mso 9)]><table border="0" cellspacing="0" cellpadding="0" width="600" align="center" bgcolor="#ffffff" role="presentation"><tr><td class="temp-body"><![endif]-->
                  <div class="temp-body" style="background-color:#ffffff; border-radius:10px; max-width: 600px; ">
                    <div class="temp-fullbleed contained" style="max-width: 600px; width: 100%;">
                      <div class="region">
                        <div>
                          
                  <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5"> 
       <tbody>
        <tr> 
          <td align="center">
            <table border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;padding-right:40px;padding-left:40px; background-color: #ebebeb !important; padding-top:40px;padding-bottom:40px;margin: 20px 0; border-radius: 8px;"> 
             <tbody>
              <tr> 
                <td>  

	        <table class="table" style="width:600px!important; margin:0 auto; padding-bottom: 15px; background: #fbfbfb; border-radius: 8px 8px 0 0; margin-bottom: 20px;">
				    <tbody>
				   <tr style="width:100% !important; border-spacing: 0;">
				      <td>
	        			<img class="logo" src="{{ asset('frontend/img/yesclean-logo.png')}}" alt="Logo" style="max-width:200px; padding-left: 10px;">
	        		  </td>
				      <td style="text-align:right;padding: 10px 10px 10px 0;font-size:14px;">
	        			<a style="margin:0 0 5px; "> 
                   <img src="{{ asset('frontend/img/mail.png')}}" alt="mail" style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="mail">  sales@yesclean.ae </a>
	        			<p style="margin:0 0 5px; ">
                   <img src="{{ asset('frontend/img/phoe.png')}}" alt="phone" style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="phone"> <b>    +971 65 26 43 82</b></p>
                      </td>
	        		</tr>
	        	</tbody>
	        </table>
                    

          <!-- Content Start -->
	        <table class="table" style="width:600px!important;margin:0 auto; padding-bottom: 20px;">
				<tbody>
				   <tr>
				      <td>
	        		 <p style="font-size: 18px;font-weight: 600;">You have received a service  request  from Yesclean</p>
        <ul style="
    background: white;
    list-style: none;
     padding: 16px;
        line-height: 27px;
    font-size: 15px;
">
           <li>Name:-&nbsp;&nbsp;{{ $data['name'] }}</li>
            <li>Phone:-&nbsp;&nbsp;<a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></li>
            <li>Email:-&nbsp;&nbsp;<a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></li>
            <li>Service Type:-&nbsp;&nbsp;{{ $data['service_quatation'] }}</li>
            <li>Message:-&nbsp;&nbsp;{{ $data['message_quatation'] }}</li>

        </ul>
	        		  </td>
				   

	        		</tr>
                    <style>
                        .tablea1a_1{
                            border-collapse: collapse;
                        }
                        .tablea1a_1 tr td{
                            border: 1px solid #dddddd;
                            padding: 10px 10px 10px 10px;
                        }
                        .tablea1a_1 tr:nth-child(even){
                            background-color:#f1f1f1;
                        }
                    </style>
                </tbody>
              </table>
              <!--// Content End -->        

               <!-- footer start -->

 


  <!-- footer logo start -->
  <table  style="width: 100%; border-spacing: 0; background: #fff; padding-bottom: 20px;">
  <tr>
    <td style="width:100%; text-align: center;">
      <img src="{{ asset('frontend/img/yesclean-logo.png')}}" alt="logo" style="max-width: 160px; margin-top: 30px;">
    </td>
  </tr>
  </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--[if (gte mso 9)]></td></tr></table><![endif]-->

                  <!--[if (gte mso 9)]><table border="0" cellspacing="0" cellpadding="0" width="600" align="center" role="presentation"><tr><td class="temp-footer"><![endif]-->
                  <div class="temp-footer" style="max-width: 600px; ">
                    <div class="temp-fullbleed contained" style="max-width: 600px; width: 100%;">
                      <div class="region">
                        <div>
                          <table class="row aw-stack"
                            style="width: 100%; text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse; border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;"
                            role="presentation">
                            <tbody>
                              <tr>
                                <td class="container" style="padding: 10px 20px; width: 100%; text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse;
border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;" width="100%" valign="top">
                                  <div class="definition-parent">
                                    <div class="social social--sm social--circle align-center">
                                      <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                        style="text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse; border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;">
                                        <tbody>
                                          <tr>
                                            <td align="center"
                                              style="padding: 0.625rem 0px; text-size-adjust: 100%; color: rgb(51, 51, 51); font-family: 'Exo 2', sans-serif; border-collapse: collapse; border-spacing: 0px; border-width: 0px; border-style: none; font-size: 18px;">
                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <a href="https://www.facebook.com/people/YES-Clean/100070959334995/"
                                                style="display: inline-block; font-size: 0; vertical-align: top; margin: 0.25rem; height: 24px; width: 24px;"
                                                target="_blank" rel="noopener noreferrer">
                                                <img
                                                  style="height: 24px; width: 24px; border-width: 0px; border-style: none; line-height: 100%; max-width: 100%; outline-width: medium; outline-style: none; text-decoration: none; color: rgb(51, 51, 51); font-size: 20px; font-weight: 700; border-radius: 10px;"
                                                  alt="Facebook Icon"
                                                  src="{{ asset('frontend/img/facebook.png')}}"
                                                  data-icon-name="Facebook" height="24" width="24">
                                              </a>

                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <a href="https://www.instagram.com/yescleanuae/"
                                                style="display: inline-block; font-size: 0; vertical-align: top; margin: 0.25rem; height: 24px; width: 24px;"
                                                target="_blank" rel="noopener noreferrer">
                                                <img
                                                  style="height: 24px; width: 24px; border-width: 0px; border-style: none; line-height: 100%; max-width: 100%; outline-width: medium; outline-style: none; text-decoration: none; color: rgb(51, 51, 51); font-size: 20px; font-weight: 700; border-radius: 10px;"
                                                  alt="Instagram Icon"
                                                  src="{{ asset('frontend/img/instagram.png')}}"
                                                  data-icon-name="Instagram" height="24" width="24">
                                              </a>
                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <a href="https://www.youtube.com/channel/UCGblR616vSAvum1HUq39OLw"
                                                style="display: inline-block; font-size: 0; vertical-align: top; margin: 0.25rem; height: 24px; width: 24px;"
                                                target="_blank" rel="noopener noreferrer">
                                                <img
                                                  style="height: 24px; width: 24px; border-width: 0px; border-style: none; line-height: 100%; max-width: 100%; outline-width: medium; outline-style: none; text-decoration: none; color: rgb(51, 51, 51); font-size: 20px; font-weight: 700; border-radius: 10px;"
                                                  alt="YouTube Icon"
                                                  src="{{ asset('frontend/img/you.png')}}"
                                                  data-icon-name="YouTube" height="24" width="24">
                                              </a>
                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <a href="https://www.linkedin.com/company/yes-clean/"
                                                style="display: inline-block; font-size: 0; vertical-align: top; margin: 0.25rem; height: 24px; width: 24px;"
                                                target="_blank" rel="noopener noreferrer">
                                                <img
                                                  style="height: 24px; width: 24px; border-width: 0px; border-style: none; line-height: 100%; max-width: 100%; outline-width: medium; outline-style: none; text-decoration: none; color: rgb(51, 51, 51); font-size: 20px; font-weight: 700; border-radius: 10px;"
                                                  alt="LinkedIn Icon"
                                                  src="{{ asset('frontend/img/linkedin.png')}}"
                                                  data-icon-name="LinkedIn" height="24" width="24">
                                              </a>
                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <!--[if mso]>&nbsp;<![endif]-->
                                              <a href="https://twitter.com/YESClean2"
                                                style="display: inline-block; font-size: 0; vertical-align: top; margin: 0.25rem; height: 24px; width: 24px;"
                                                target="_blank" rel="noopener noreferrer">
                                                <img
                                                  style="height: 24px; width: 24px; border-width: 0px; border-style: none; line-height: 100%; max-width: 100%; outline-width: medium; outline-style: none; text-decoration: none; color: rgb(51, 51, 51); font-size: 20px; font-weight: 700; border-radius: 10px;"
                                                  alt="Twitter Icon"
                                                  src="{{ asset('frontend/img/twitter.png')}}"
                                                  data-icon-name="Twitter" height="24" width="24">
                                              </a>

                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="definition-parent">
                                    <div class="text-element paragraph">
                                      <div
                                        style="color: rgb(124, 124, 124); font-family: 'Exo 2', sans-serif; font-size: 14px; line-height: 125%; font-weight: 400; text-align: left;">
                                        <div
                                          style="text-align: center; color: rgb(124, 124, 124); font-family: 'Exo 2', sans-serif; font-size: 14px; line-height: 125%; font-weight: 400;">
                                          &nbsp;</div>

                                        <div
                                          style="text-align: center; color:#333; font-family: 'Exo 2', sans-serif; font-size: 13px; line-height: 20px; font-weight: 400;">
                                          P O Box: 42167, OFFICE NO.: LV 27-D <br>
                                          HAMRIYAH FREE ZONE PHASE 2, <br>
                                          SHARJAH - UAE </div>

                                        <div
                                          style="text-align: center; color: rgb(124, 124, 124); font-family: 'Exo 2', sans-serif; font-size: 14px; line-height: 125%; font-weight: 400;">
                                          <br>
                                          <a class="validating" href="#"
                                            style="color: #017ac9; font-weight: 100; font-size: 13px;" target="_blank"
                                            rel="noopener noreferrer">Privacy Policy</a> | <a class="validating"
                                            href="https://www.yesclean.ae/"
                                            style="color:#017ac9; font-weight: 100; font-size: 13px;" target="_blank"
                                            rel="noopener noreferrer"> Contact Us </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <table style="width: 100%; border-spacing: 0; padding: 6px 0; background: #cbcbcb; letter-spacing: 2px; border-radius: 0 0 8px 8px; margin-top: 20px;">
                            <tbody><tr>
                              <td style="width: 100%; text-align: center;">
                                <a style="text-decoration: none; color: #fff; margin: 0; font-size: 12px;"> www.yesclean.ae </a>
                              </td>
                            </tr>
                            </tbody></table>


                        </div>
                      </div>
                    </div>
                  </div>
                  <!--[if (gte mso 9)]></td></tr></table><![endif]-->

                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </center>

    <div>&nbsp;</div>

  </body>

  </html>
  <!-- partial -->

</body>

</html>

