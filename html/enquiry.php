<?php

error_reporting(1);

if($_SERVER['REQUEST_METHOD']=='POST'){


    $to='info@thetravelfirm.in';

    $subject = "Enquiry Details";

    /* Details of Complainant */

    $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

    $data.='<tr><td colspan="2" align="center" style="font-weight: 700;font-size: 17px;">Enquiry Details :-</td></tr>';/* field name */

    $data.='<tr><td style="font-weight: 600;font-size: 15px;">Name :</td><td style="font-weight: 600;font-size: 15px;">'.$_POST['name'].'</td></tr>';

    $data.='<tr><td style="font-weight: 600;font-size: 15px;">Contact Us :</td><td style="font-weight: 600;font-size: 15px;">'.$_POST['mobile'].'</td></tr>';

    $data.='<tr><td style="font-weight: 600;font-size: 15px;"> Email Id:</td><td style="font-weight: 600;font-size: 15px;">'.$_POST['email'].'</td></tr>';

    $data.='<tr><td style="font-weight: 600;font-size: 15px;">Destination : </td><td style="font-weight: 600;font-size: 15px;">'.$_POST['destination'].'</td></tr>';

    $data.='</table>';

    $message=$data;

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <'.$_POST['email'].'>' . "\r\n";

    header('Content-Type: application/json');

    if(mail($to,$subject,$message,$headers)){

        //header('Location: ../index.php?msg=Enquiry sent successfully. Thankyou!');
        // header('Location: success.html');
        echo json_encode(['success'=>true,'message'=>'Enquiry sent successfully. Thankyou!'],true);

        /* echo "Enquiry sent successfully. Thankyou! "; */

    }

    else{

        //header('Location: ../index.php?msg=Message sending failed. Please contact admin.');
        //header('Location: failed.html');
        echo json_encode(['error'=>true,'message'=>'Message sending failed. Please contact info@thetravelfirm.in'],true);

    }
}