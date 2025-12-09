<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
        
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important;  background-color: #f5f6fa;">
	<center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto; padding: 15px;">
                        <tbody>
                            <tr>
                                <td style="padding: 20px 25px 20px !important; text-align: center; border-radius: 15px; background: #fff;">
                                    <div style="text-align: center;">
                                        <img style="height: 80px; margin-bottom: 15px;" src="<?php echo base_url();?>themes/images/logo.png" alt="PMI @ 2025">
                                    </div>
                                    <p style="margin-bottom: 10px; color: #000000; font-size: 18px; text-align: left;">Hi Admin,</p>
                                    <p style="margin-bottom: 15px; color: #000000; font-weight: 700; font-size: 18px; text-align: left;">You Received a New Enquiry : </p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Name :</b> <?php echo $fullName; ?> </p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Mobile Number :</b> <?php echo $phoneNumber; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Email :</b> <?php echo $email; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Location :</b> <?php echo $city; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Message :</b> <?php echo $message; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Enquiry Type :</b> <?php echo $enquiryType; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>IP Address :</b> <?php echo $IPaddress; ?></p>
                                    <p style="padding-bottom: 10px; color: #000000; text-align: left;"><b>Device Name :</b> <?php echo $deviceName; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; font-size: 14px; color: #000000ff; padding: 20px 0;">
                                    &copy; <?= date('Y'); ?> PMI @ 2025. All rights reserved.
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>