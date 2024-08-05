<html>
    <body style="background-color: #eee; margin: 0 !important; padding: 0 !important;">
    <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        / FONTS /
        @media screen {
            @font-face { font-family: Lato; font-style: normal;font-weight: 400;src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff"); }
            @font-face { font-family: Lato;font-style: normal;font-weight: 700;src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff"); }
            @font-face { font-family: Lato; font-style: italic;font-weight: 400;src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");}
            @font-face {font-family: Lato;font-style: italic;font-weight: 700;src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff"); }
        }    
        / CLIENT-SPECIFIC STYLES /
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }  
        / RESET STYLES /
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
        p{margin:0px;}

        / iOS BLUE LINKS /
        a[x-apple-data-detectors] { color: inherit !important;text-decoration: none !important;font-size: inherit !important;font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; }
        / MOBILE STYLES /
        @media screen and (max-width:600px){ h1 {font-size: 32px !important;line-height: 32px !important; } }
        / ANDROID CENTER FIX /
        div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Lato, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    <p>Hey, we received a request to reset your password.</p>
    </div>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td bgcolor="#eee" align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                            <tr>
                            <td bgcolor="#ffffff" align="center" valign="top" style="padding: 30px 10px 20px 10px;">
                                <img src="{{ URL::asset('/uploads/bebang-new-logo.png') }}" alt="" class="center" width="120" height="120">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#eee" align="center" style="padding: 0px 10px 0px 10px;">  
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody><tr>
                            <td bgcolor="#ffffff" align="center" valign="top" style="padding: 20px 10px 20px 10px; font-family: Lato, Helvetica, Arial, sans-serif; letter-spacing: 1px; line-height: 48px;color:#1d65b1;">
                            <h2 style="font-size: 20px; font-weight: 600; margin: 0;">Forgot your password?</h2>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>                   
            <tr>
                <td bgcolor="#eee" align="center" style="padding: 0px 10px 20px 10px;">                            
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #1B2A50; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: .4px">
                                    <p> Hi {{$name}},</p>
                                </td>
                            </tr>                                   
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #1B2A50; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                    <p>We received a request to reset your password.</p>                                  
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #1B2A50; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                    <p>Let's get you a new one!, simply click on the following link:</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 20px 30px; color: #1B2A50; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                    <a href="{{$link}}" target="blank" style="background-color: #1d65b1;border: none;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;border-radius: 10px;">Reset My Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #1B2A50; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                    <p>Best regards,</p>
                                    <p>Bebang</p>
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