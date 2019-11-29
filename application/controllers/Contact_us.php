<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 24-04-2019
 * Time: 02:45 PM
 */
require APPPATH . '../vendor/autoload.php';


class Contact_us extends CI_Controller
{
	public function ContactForm()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('phoneno','Contact No.','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('service','Service','required');
		$this->form_validation->set_rules('address','Address','required');


		if ($this->form_validation->run())
		{

			$data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

			$data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;">Contact Us Details :-</td></tr>';/* field name */

			$data.='<tr><td>Name </td><td>'.$_POST['name'].'</td></tr>';

			$data.='<tr><td> Contact No  </td><td>'.$_POST['phoneno'].'</td></tr>';

			$data.='<tr><td> I want to  </td><td>'.$_POST['service'].'</td></tr>';

			$data.='<tr><td>Email </td><td>'.$_POST['email'].'</td></tr>';

			$data.='<tr><td>Address </td><td>'.$_POST['address'].'</td></tr>';

			$data.='</table>';

			$message = $data;
			$to_email = 'noreply@thetravelfirm.in';

			// Create the Transport
			$transport = (new Swift_SmtpTransport('mail.thetravelfirm.in', 587))
				->setUsername('noreply@thetravelfirm.in')
				->setPassword('n7P6B!zGkj0b');

			// Create the Mailer using your created Transport
			$mailer = new Swift_Mailer($transport);

			// Create a message
			$message = (new Swift_Message())
				->setSubject('Contact Us Enquiry')
				->setFrom(['noreply@thetravelfirm.in' => 'Contact Us Enquiry\''])
				->setTo(['noreply@thetravelfirm.in' => 'Contact Us Enquiry\''])
				->setBody($data)
				->setContentType("text/html");

			$result = $mailer->send($message);

			if ($result)
			{
				// mail sent
				$this->session->set_flashdata('msg','
				    <div class="alert alert-dismissible alert-success">
  					<button type="button" class="close" data-dismiss="alert">&times;</button>
   					Mail Send Successfully! Thank You.
					</div>
				');
				redirect('contact_us');
			}
			else
			{
				//error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
				redirect('contact_us');
			}
		}
		else
		{
			redirect('contact_us');
		}
	}
}
