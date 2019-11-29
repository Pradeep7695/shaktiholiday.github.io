<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 10-05-2019
 * Time: 02:23 PM
 */

require APPPATH . '../vendor/autoload.php';

class TourReview extends CI_Controller
{
    public function TourForm()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $to='info@thetravelfirm.in';

            $subject = "Tour Review";



            $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

            $data.='<tr><td>Name: </td><td>'.$_POST['name'].'</td></tr>';

            $data.='<tr><td>Contact Number: </td><td>'.$_POST['contactno'].'</td></tr>';

            $data.='<tr><td>Email : </td><td>'.$_POST['email'].'</td></tr>';

            $data.='<tr><td>Tour Review: </td><td>'.$_POST['review'].'</td></tr>';

            $data.='</table>';

            $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message($subject))
                ->setFrom('info@thetravelfirm.in')
                ->setTo($to)
                ->setBody($data, 'text/html')
                ->attach(Swift_Attachment::fromPath($_FILES['uploaded_file']['tmp_name'])->setFilename($_FILES['uploaded_file']['name']));

            // Send the message
            $result = $mailer->send($message);
            if($result){
                $this->session->set_flashdata('msg','
				    <div class="alert alert-dismissible alert-success">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
   					Mail Send Successfully! Thank You.
					</div>
				');
                redirect('testimonial');

            }

            else{

                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('testimonial');
            }

        }
    }
}