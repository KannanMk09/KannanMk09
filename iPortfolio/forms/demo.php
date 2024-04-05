<?php

                    $to = $emailid;
                    $subject = 'Thank You for Reviewing My Portfolio';
                    $from = '';
        
                    // To send HTML mail, the Content-Type header must be set
        
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
                    // Create HEADERS
        
                    $headers .= 'From: '. $from . "\r\n".'Reply-To: '. $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        
                    // COMPOSE a simple HTML email MESSAGE
                    $message = ' <html xmlns="http://www.w3.org/1999/xhtml">
        
                    <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <title>Elevate Your Projects with Kannan\'s Portfolio</title>
                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    </head>
                    
                    <body>
                    
                    <table style="background-color:#fff;font-size:0;font-family:Arial,Helvetica,sans-serif" width="600" cellspacing="0" cellpadding="0">
                      <tbody><tr>
                    <td><table style="border:1px solid #ccc" width="100%" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                    <td style="background-color:#ffffff"><table width="100%" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                    <td width="39" height="120"></td>
                    <td valign="top"><img src="" alt="Veltech" style="padding:23px 0 0 0" ></td>
                    </tr>
                    </tbody></table></td>
                    </tr>
                    
                    <tr>
                    <td style="padding-bottom:10px;border-bottom:1px solid #ccc"><table width="100%" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                    <td width="39"></td>
                    
                    <td width="580"><table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>

                    <tr>
                    <td style="padding:25px 0" colspan="3"><h6 style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#666;font-weight:bold;margin:0;padding:0 0 20px 0">Dear '.$cname.',</h6>
                    
                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:17px;color:#666;font-weight:normal;margin:0; text-align:justify;padding:0;">

                    I hope this email finds you well. I wanted to express my gratitude for taking the time to review my portfolio. I truly appreciate the opportunity to share my work with you.<br>
                    <br>
                    <br>
                    I am passionate about ['.$cname.'], and I believe my portfolio showcases my skills and dedication to this field. Each piece included represents not only my abilities but also my commitment to delivering high-quality work.<br>
                    <br>
                    <br>
                    Please feel free to reach out if you have any questions or require further information about any of the projects featured in my portfolio. I am more than happy to provide additional details or discuss potential opportunities for collaboration.
                    <br>
                    <br>
                    Once again, thank you for considering my portfolio. I look forward to the possibility of working together in the future.

                    Warm regards,

                    Kannan M,
                    Developer & Designer.
                    
                    
                    </p></td>
                    </tr>
                    
                    <tr>
                    <td colspan="3"><p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:18px;color:#666;font-weight:bold;margin:0;padding:0">
                    
                    Kannan M,<br>
                    Software Developer and Designer,<br>
                    For Contact<br/>
                    7894561230,<br>
                    Mint, Chennai - 600 001<br>
                    Tamil Nadu, India.<br>
                    </p></td>
                    </tr>
                    
                     
                    </tbody></table></td>
                    
                    <td width="39"></td>
                    </tr>
                    
                    </tbody></table></td>
                    </tr>
                    
                    <tr style="background-color:#f2f2f2">
                    <td style="padding:10px 0"><table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                    <td width="39"></td>
                    <td width="580"><p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:17px;color:#666;font-weight:normal;margin:0;padding:10px 0px">
                    DISCLAIMER :
                    </p></td><td width="39"></td>
                    </tr>
                    </tbody></table></td>
                    </tr>
                    </tbody></table></td>
                      </tr>
                    
                    <tr>
                    <td>
                    <table width="100%" cellspacing="0" cellpadding="0" style="margin-top:5px;">
                    <tbody>
                    
                    </tbody></table></td>
                    </tr>
                    
                    </tbody></table>
                    </body>
                    </html>';

                        // Sending email
                          
                    $result = sendmail($from,$to,$subject,$message);


?>