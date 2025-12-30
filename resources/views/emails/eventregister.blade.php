<!DOCTYPE html>
<html>

<head>
    <title>{{$data['subject']}} | YesClean</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            color: #373737;
        }
    </style>
</head>

<body>

    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5">
        <tbody>
            <tr>
                <td align="center">
                    <table border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;padding-right:20px;padding-left:20px; background-color: #fff !important; padding-top:20px;padding-bottom:20px;margin: 20px 0;">
                        <tbody>
                            <tr>
                                <td>
                                    <table class="table" style="width:600px!important; margin:0 auto; padding-bottom: 15px;">
                                        <tbody>
                                            <tr style="width:100% !important; border-spacing: 0;">

                                                <td style="text-align:left; padding: 10px 10px 10px 0;font-size:14px; display: flex; flex-direction: column;">


                                                    <p style="margin:0 0 5px; ">
                                                        <a style="margin:0 0 5px; ">
                                                            <img src="{{asset('frontend/img/emails/mail.png')}}" alt="mail" style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px; max-width:25px;" alt="mail"> sales@yesclean.ae </a>
                                                    </p>

                                                    <p style="margin:0 0 5px; ">
                                                        <img src="{{asset('frontend/img/emails/phone.png')}}" alt="phone" style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px; max-width:25px;" alt="phone"> <b> + 971 65 26 4382 </b>

                                                    </p>

                                                </td>

                                                <td style="text-align:right;">
                                                    <img class="logo" src="https://yesclean.ae/frontend/img/rectangle-logo.png" alt="Logo" style="max-width:130;">
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <table style="width: 100%; border-spacing: 0; padding: 10px 0 10px 0;">
                                        <tr>
                                            <td style="width:100%; font-size: 16px; ">
                                                Hi <strong>Yes Team</strong>,

                                                <p>I would like to visit your event Open House 2024. Please have a look at the below details</p>

                                                <p>&nbsp;</p>
                                                <h3>Customer Info</h3>
                                                <p>{{ $data['firstname'] .' '. $data['lastname'] }}
                                                </p>
                                                <p>{{ $data['company'] }}</p>
                                                <p>{{ $data['email'] }}</p>
                                                <p>{{ $data['phone'] }}</p>
                                                <p>&nbsp;</p>

                                                <h3>Visitors Info</h3>
                                                <p>Participants: {{ $data['participants'] }}</p>
                                                <p>Preffered Dates: {{ implode(", ", $data['ohdate']) }}</p>

                                                <p>Thanks & Regards</p>
                                                <p>{{ $data['firstname'] .' '. $data['lastname'] }} </p>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- footer address start -->
                                    <table style="width: 100%; border-spacing: 0; background: #f3f3f3; padding-top: 20px;">
                                        <tr>
                                            <td style="width:100%; text-align: center;font-size: 13px;line-height: 12px;">
                                                <p> York Engineering Solutions FZC</p>
                                                <p> Office No. LV-27D, Po Box 42167, </p>
                                                <p> Hamriyah Free Zone Phase 2, </p>
                                                <p> Sharjah - UAE </p>
                                                <a href="#" style="font-size: 13px;color: #333;text-decoration: none;">
                                                    Ph: + 971 6
                                                    5264382 </a>
                                                <a> || </a>
                                                <a href="#" style="font-size: 13px;color: #333;text-decoration: none;">
                                                    Mob: + 971 5
                                                    47918858 </a>
                                                <a> || </a>
                                                <a href="#" style="font-size: 13px;color: #333;text-decoration: none;">
                                                    Fax: + 971 6
                                                    5264384 </a>

                                            </td>
                                        </tr>
                                    </table>


                                    <table style="width: 100%; border-spacing: 0; padding: 15px 0; background: #f3f3f3;">
                                        <tr>
                                            <td style="text-align: center; width: 100%;">
                                                <p> <a href="#" style="font-size: 13px;color: #333;text-decoration: none;margin: 0;">
                                                        sales@yesclean.ae </a> </p>

                                            </td>
                                        </tr>

                                    </table>

                                    <!-- connect with us end -->
                                    <table style="width: 100%; border-spacing: 0; background: #f3f3f3;">
                                        <tr>
                                            <td style="width: 100%;   padding: 2px; text-align: center;  color: #fff;">

                                                <a href="#" target="_blank"> <img src="{{asset('frontend/img/emails/facebook.png')}}" style="width: 25px; max-width:25px;background: #fff; padding: 5px; margin-right: 1px;" alt=""></a>
                                                <a href="#" target="_blank"> <img src="{{asset('frontend/img/emails/linked.png')}}" style="width: 25px; max-width:25px;background: #fff; padding: 5px; margin-right: 1px;" alt=""></a>
                                                <a href="#" target="_blank"> <img src="{{asset('frontend/img/emails/instagram.png')}}" style="width: 25px; max-width:25px;background: #fff; padding: 5px; margin-right: 1px;" alt=""></a>
                                                <a href="#" target="_blank"> <img src="{{asset('frontend/img/emails/youtube.png')}}" style="width: 25px; max-width:25px;background: #fff; padding: 5px; margin-right: 1px;" alt=""></a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--// connect with us end -->



                                    <table style="width: 100%; border-spacing: 0; padding: 6px 0; background: #0069d9; letter-spacing: 2px; font-size: 13px;">
                                        <tr>
                                            <td style="width: 100%; text-align: center;">
                                                <a href="https://www.yesclean.ae/" target="_blank" style="text-decoration: none; color: #fff; margin: 0;">
                                                    www.yesclean.ae </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--// footer address end -->

                                    <!--// footer End -->



                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>