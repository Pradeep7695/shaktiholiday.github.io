<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 24-04-2019
 * Time: 02:45 PM
 */
require APPPATH . '../vendor/autoload.php';


class Book_trip extends CI_Controller
{
	public function BookTripForm()
	{
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules('phone','Phone No.','required');
		$this->form_validation->set_rules('email_tour','Email','required');
		$this->form_validation->set_rules('date_book','Date','required');
		$this->form_validation->set_rules('adult','Adult','required');
		$this->form_validation->set_rules('child','Child','required');

		if ($this->form_validation->run())
		{

			$data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

			$data.='<tr><td colspan="2" align="center" style="font-size:15px; font-weight:600;">Book Trip Details :-</td></tr>';/* field name */

			$data.='<tr><td>First Name </td><td>'.$_POST['first_name'].'</td></tr>';

			$data.='<tr><td>Last Name </td><td>'.$_POST['last_name'].'</td></tr>';

			$data.='<tr><td> Contact No  </td><td>'.$_POST['phone'].'</td></tr>';

			$data.='<tr><td>Email </td><td>'.$_POST['email_tour'].'</td></tr>';

			$data.='<tr><td> Date  </td><td>'.$_POST['date_book'].'</td></tr>';

			$data.='<tr><td>Adult </td><td>'.$_POST['adult'].'</td></tr>';

			$data.='<tr><td>Child </td><td>'.$_POST['child'].'</td></tr>';

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
				redirect('home/domestic_international');
			}
			else
			{
				//error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
				redirect('home/domestic_international');
			}
		}
		else
		{
			redirect('home/domestic_international');
		}
	}
}
