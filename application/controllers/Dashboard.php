<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 16-04-2019
 * Time: 04:36 PM
 */
class  Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PopularTourModel');
		$this->load->model('DomesticModel');
		$this->load->model('InternationalCModel');
		$this->load->model('MaharashtraModel');
		$this->load->model('OneDayTourModel');
		$this->load->model('ImageGalleryModel');
		$this->load->model('TestimonialModel');
		if (!$this->session->userdata('user_id')) {
			return redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('admin');
	}

	/* ------------------------------------------------------------------------------------------ */

	public function index()
	{
		$data['CountPopularData'] = $this->PopularTourModel->CountPopularTour();
		$data['DomesticAllData']  = $this->DomesticModel->CountAllDataDomestic();
		$data['InternationalData'] = $this->InternationalCModel->CountAllDataInter();
		$data['MhData'] = $this->MaharashtraModel->CountMhData();
		$data['OneDayTour'] = $this->OneDayTourModel->CountOneDayTour();
		$data['ImageData'] = $this->ImageGalleryModel->CountAllImage();
		$data['FeedbackData'] = $this->TestimonialModel->CountFeedback();
		$this->load->view('admin/pages/dashboard',$data);
	}


	/* ----------------upload video slider ------------------- */
      public function uploadVideo()
	  {
		  if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {

			  $config['upload_path'] = 'uploads/';
			  $config['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
			  $config['max_size']   = '500000';

			  $this->load->library('upload', $config);
			  $this->upload->initialize($config);

			  if(!$this->upload->do_upload('video')) {
				  echo $this->upload->display_errors();
			  }else{
				  $post = $this->input->post();
				  unset($post['submit']);
				  $data = $this->upload->data();
				  $videopath = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
				  $post['video'] = $videopath;
				  $this->load->model('SliderModel');
				  $post['mime_type']=$data['file_type'];
				  $videoData = $this->SliderModel->insertVideoSlider($post);
				if ($videoData)
				{  //insert success
					$this->session->set_flashdata('feedback', 'Video Slider Upload Successfully');
					$this->session->set_flashdata('feedback_class', 'alert-success');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					redirect('dashboard/show_video_slider');
				}
				else
				{  //failed to insert
					$this->session->set_flashdata('feedback', 'Failed To Upload');
					$this->session->set_flashdata('feedback_class', 'alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/add_slider');
				}
			  }

		  }else{
			  $this->session->set_flashdata('feedback', 'Failed to Upload');
			  $this->session->set_flashdata('feedback_class', 'alert-danger');
			  $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			  redirect('dashboard/add_slider');
		  }
	  }

	  public function show_video_slider()
	  {
	  	$this->load->model('SliderModel');
	  	$videoSlider = $this->SliderModel->getAllVideoSlider();
	  	$this->load->view('admin/pages/show_video_slider',compact('videoSlider'));
	  }

	  public function delete_video_slider($id)
	  {
	  	$this->load->model('SliderModel');
	  	$this->db->delete('video_slider',['id'=>$id]);
			redirect('dashboard/show_video_slider');
	  }




	/* -------------------../ upload video slider -------------- */


	/* ----------------slider --------------------- */
	public function add_slider()
	{
		$this->load->view('admin/pages/add_slider');
	}

	public function CreateSlider()
	{
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'required');
		/*$this->form_validation->set_rules('slider_text', 'Slider Text', 'required');*/

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('slider_img')) {
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['slider_img'] = $img_path;

			$this->load->model('SliderModel');
			$slider = $this->SliderModel->insertSlider($post);
			if ($slider) {   //insert success
				$this->session->set_flashdata('feedback', 'Slider Upload Successfully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_slider');
			} else {   //insert failed
				$this->session->set_flashdata('feedback', 'Slider Upload Failed');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_slider');
			}

		} else {
			$this->session->set_flashdata('feedback', 'Slider Upload Failed');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_slider');
		}

	}

	public function show_slider()
	{
		$this->load->model('SliderModel');
		$slider_data = $this->SliderModel->getAllSlider();
		$this->load->view('admin/pages/show_slider', compact('slider_data'));
	}

	public function edit_slider($id)
	{
		$this->load->model('SliderModel');
		$getSlider = $this->SliderModel->findSlider($id);
		$this->load->view('admin/pages/edit_slider', compact('getSlider'));

	}

	public function updateSlider($id)
	{
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$post = $this->input->post();
		unset($post['submit']);
		if ($this->form_validation->run() && $this->upload->do_upload('slider_img'))
		{
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['slider_img'] = $img_path;
		}
		$this->load->model('SliderModel');
		$slider = $this->SliderModel->updateSlider($id, $post);
		if($slider)
		{
			$this->session->set_flashdata('feedback', 'Slider Update Successfully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_slider/' . $id);
		}
		else

		{
			$this->session->set_flashdata('feedback', 'Failed to Update ');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_slider/' . $id);
		}
	}

	public function deleteSlider($id)
	{
		$this->load->model('SliderModel');
		$this->db->delete('slider', ['id' => $id]);
		$this->session->set_flashdata('feedback', 'Slider Upload Successfully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/show_slider');
	}


	/* ----------------../end slider --------------------- */


	/* ----------------Popular Tour  --------------------- */

	public function add_popular_tour()
	{
		$this->load->view('admin/pages/add_popular_tour');
	}

	public function storePopularTour()
	{
		$this->form_validation->set_rules('package_name', 'Package Name', 'required');
		$this->form_validation->set_rules('package_price', 'Package Price', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('package_img')) {
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
			$post['package_img'] = $img_path;

			$this->load->model('PopularTourModel');
			$data = $this->PopularTourModel->insertPopularTour($post);
			if ($data) {
				//data insert success
				$this->session->set_flashdata('feedback', 'Popular Tour Package Upload Successfully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_popular_tour');
			} else {
				// failed to insert
				$this->session->set_flashdata('feedback', ' Failed To Upload');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_popular_tour');
			}

		} else {
			//failed
			$this->session->set_flashdata('feedback', ' Failed To Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_popular_tour');
		}

	}

	public function show_popular_tour()
	{
		$this->load->model('PopularTourModel');
		$data = $this->PopularTourModel->showPopularTour();
		$this->load->view('admin/pages/show_popular_tour', compact('data'));
	}

	public function edit_Popular_tour($id)
	{
		$this->load->model('PopularTourModel');
		$popular_tour = $this->PopularTourModel->findPopularTour($id);
		$this->load->view('admin/pages/edit_popular_tour', compact('popular_tour'));
	}

	public function update_popular_tour($id)
	{
		$this->form_validation->set_rules('package_name', 'Package Name', 'required');
		$this->form_validation->set_rules('package_price', 'Package Price', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$post = $this->input->post();
		unset($post['submit']);
		if ($this->form_validation->run() && $this->upload->do_upload('package_img'))
		{
			$data = $this->upload->data();
			$img_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
			$post['package_img'] = $img_path;
		}
		$this->load->model('PopularTourModel');
		$data = $this->PopularTourModel->updatePopularTour($id, $post);
		if ($data)
		{
			//data insert success
			$this->session->set_flashdata('feedback', 'Popular Tour Update Successfully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect(base_url('dashboard/show_popular_tour/' . $id));
		}
		else
		{
			//failed
			$this->session->set_flashdata('feedback', ' Failed To Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect(base_url('dashboard/edit_Popular_tour/' . $id));
		}
	}

	public function delete($id)
	{
		$this->load->model('PopularTourModel');
		$this->db->where(['id' => $id])
			->delete('popular_tour');
		return redirect('dashboard/show_popular_tour');
	}

	/* ----------------Popular Tour  --------------------- */


	/* ----------------Tour Package --------------------- */
	public function add_tour_package()
	{
		$this->load->view('admin/pages/add_tour_package');
	}

	public function create_Tour()
	{
		$this->form_validation->set_rules('trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('package_price', 'Package Price', 'required');
		$this->form_validation->set_rules('trip_desc', 'Package Trip Description', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('trip_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['trip_img'] = $img_path;

			$this->load->model('TourPackageModel');
			$data = $this->TourPackageModel->insertTourPackage($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Tour Package Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_tour_package');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_tour_package');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_tour_package');
		}
	}

	public function show_tour_package()
	{
		$this->load->model('TourPackageModel');
		$tour_trip = $this->TourPackageModel->fetchTourPackage();
		$this->load->view('admin/pages/show_tour_package', compact('tour_trip'));
	}

	public function edit_tour($id)
	{
		$this->load->model('TourPackageModel');
		$tour_package = $this->TourPackageModel->findTourId($id);
		$this->load->view('admin/pages/edit_tour_package', compact('tour_package'));
	}


		public function update_tour($id)
	{
		$this->form_validation->set_rules('trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('trip_desc', 'Package Trip Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('trip_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['trip_img'] = $img_path;
		}
		$this->load->model('TourPackageModel');
		$data = $this->TourPackageModel->updateTour($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Tour Package Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_tour_package/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_tour/' . $id);
		}
	}


	public function delete_tour($id)
	{
		$this->load->model('TourPackageModel');
		$this->db->delete('tourpackage', ['id' => $id]);
		return redirect('dashboard/show_tour_package');
	}

	/* ----------------Tour Package --------------------- */


	/* ----------------Image Gallery  --------------------- */
	public function add_image()
	{
		$this->load->view('admin/pages/add_image_gallery');
	}

	public function storeImg()
	{
		$this->form_validation->set_rules('img_name', 'Image Name', 'required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('t_img')) {  // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['t_img'] = $img_path;

			$this->load->model('ImageGalleryModel');
			$imgmodel = $this->ImageGalleryModel->insertImageGallery($post);
			if ($imgmodel) {   // insert success
				$this->session->set_flashdata('feedback', 'Image Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_image');
			} else {   //insert failed
				$this->session->set_flashdata('feedback', 'Failed To Image Upload');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_image');
			}

		} else {   //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Image Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_image');
		}
	}

	public function show_image()
	{
		$this->load->model('ImageGalleryModel');
		$img_data = $this->ImageGalleryModel->fetchAllImg();
		$this->load->view('admin/pages/show_image_gallery', compact('img_data'));
	}

	public function edit_img($id)
	{
		$this->load->model('ImageGalleryModel');
		$ImgData = $this->ImageGalleryModel->findImg($id);
		$this->load->view('admin/pages/edit_img_gallery', compact('ImgData'));
	}

	public function update_img($id)
	{
		$this->form_validation->set_rules('img_name', 'Image Name', 'required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run() && $this->upload->do_upload('t_img'))
		{
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['t_img'] = $img_path;
		}
		$this->load->model('ImageGalleryModel');
		$imgmodel = $this->ImageGalleryModel->updateImg($id, $post);
		if ($imgmodel)
		{
			$this->session->set_flashdata('feedback', 'Image Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect("dashboard/show_image/" . $id);
		}
		else
		{
			$this->session->set_flashdata('feedback', 'Failed To Image Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect("dashboard/edit_img/" . $id);
		}
	}

	public function delete_img($id)
	{
		$this->load->model('ImageGalleryModel');
		$this->db->delete('img_gallery', ['id' => $id]);
		redirect('dashboard/show_image');
	}

	/* ----------------Image Gallery  --------------------- */

	/* --------------------contact us ------------------ */

	public function add_contactUs()
	{
		$this->load->view('admin/pages/add_contactus');
	}

	public function CreateContactUs()
	{
		$this->form_validation->set_rules('contactno', 'Contact No', 'required');
		$this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if ($this->form_validation->run()) {   //success
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('ContactUsModel');
			$conctData = $this->ContactUsModel->insertContactUs($post);
			if ($conctData) {
				$this->session->set_flashdata('feedback', 'Contact Us Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_contactUs');
			} else {
				$this->session->set_flashdata('feedback', 'Contact Us Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/show_contactUs');
			}

		} else {  // failed
			$this->session->set_flashdata('feedback', 'Failed To Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_contactUs');
		}
	}

	public function show_contactUs()
	{
		$this->load->model('ContactUsModel');
		$contactAll = $this->ContactUsModel->getAllContactUs();
		$this->load->view('admin/pages/show_contactus', compact('contactAll'));
	}

	public function edit_contactUs($id)
	{
		$this->load->model('ContactUsModel');
		$contactData = $this->ContactUsModel->findContactId($id);
		$this->load->view('admin/pages/edit_contactus', compact('contactData'));
	}

	public function updateContactUs($id)
	{
		$this->form_validation->set_rules('contactno', 'Contact No', 'required');
		$this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');
		if ($this->form_validation->run()) {   //validation success
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('ContactUsModel');
			$updateContact = $this->ContactUsModel->UpdateContactUs($id, $post);
			if ($updateContact) {   //insert success
				$this->session->set_flashdata('feedback', 'Contact Us Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_contactUs/' . $id);
			} else {   //insert failed
				$this->session->set_flashdata('feedback', 'Failed To Upload');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_contactUs/' . $id);
			}

		} else {  //validation failed
			$this->session->set_flashdata('feedback', 'Failed To Upload');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_contactUs/' . $id);
		}
	}

	public function delete_contactUs($id)
	{
		$this->load->model('ContactUsModel');
		$this->db->delete('contact_us', ['id' => $id]);
		redirect('dashboard/show_contactUs');
	}

	/* ------------------../end contact us ---------------- */

	/* -----------------testimonial -------------------- */
	public function add_testimonial()
	{
		$this->load->view('admin/pages/add_testimonial');
	}

	public function createTestimonial()
	{
		$this->form_validation->set_rules('client_name','Client Name','required');
		$this->form_validation->set_rules('review','Client Review','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('client_img'))
		{  //validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
			$post['client_img'] = $img_path;
			$this->load->model('TestimonialModel');
			$testimonial = $this->TestimonialModel->insertTestimonial($post);
			if ($testimonial)
			{ //insert success
				$this->session->set_flashdata('feedback','Testimonial Upload Successfull');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_testimonial');
			}
			else
			{  //insert failed
				$this->session->set_flashdata('feedback','Upload To failed');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_testimonial');
			}

		}
		else
		{  //validation failed
			$this->session->set_flashdata('feedback','Upload To failed');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_testimonial');
		}

	}

	public function show_testimonial()
	{
		$this->load->model('TestimonialModel');
		$testimonial = $this->TestimonialModel->getAllTestimonial();
		$this->load->view('admin/pages/show_testimonial',compact('testimonial'));

	}

	public function edit_testimonial($id)
	{
		$this->load->model('TestimonialModel');
		$testimonialdata = $this->TestimonialModel->findTestimonial($id);
		$this->load->view('admin/pages/edit_testimonial',compact('testimonialdata'));
	}

	public function updateTestimonial($id)
	{
		$this->form_validation->set_rules('client_name','Client Name','required');
		$this->form_validation->set_rules('review','Client Review','required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$post = $this->input->post();
		unset($post['submit']);
		if ($this->form_validation->run() && $this->upload->do_upload('client_img'))
		{
			$data = $this->upload->data();
			$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
			$post['client_img'] = $img_path;
		}
		$this->load->model('TestimonialModel');
		$testimonial = $this->TestimonialModel->updateTestimonial($id,$post);
		if ($testimonial)
		{
			$this->session->set_flashdata('feedback','Testimonial Update Successfully');
			$this->session->set_flashdata('feedback_class','alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_testimonial/'.$id);
		}
		else
		{
			$this->session->set_flashdata('feedback','failed to Update');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_testimonial/'.$id);
		}
	}

	public function delete_testimonial($id)
	{
		$this->load->model('TestimonialModel');
		$this->db->delete('testimonial',['id'=>$id]);
		redirect('dashboard/show_testimonial');
	}

	/* -----------------..//end testimonial ---------------- */

	 /* -------------about us ------------------- */
       public function add_aboutUs()
		{
			$this->load->view('admin/pages/add_aboutus');
		}
		public function createAboutUs()
		{
			$this->form_validation->set_rules('about_desc','About Us Description','required');
			$this->form_validation->set_rules('service1','About Service 1','required');
			$this->form_validation->set_rules('service2','About Service 2','required');
			$this->form_validation->set_rules('service3','About Service 3','required');
			$this->form_validation->set_rules('service4','About Service 4','required');

			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->form_validation->run() && $this->upload->do_upload('about_img'))
			{  //validation success
				$post = $this->input->post();
				unset($post['submit']);
				$data = $this->upload->data();
				$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				$post['about_img'] = $img_path;
				$this->load->model('AboutModel');
				$about = $this->AboutModel->insertAbout($post);
				if ($about)
				{ //insert success
					$this->session->set_flashdata('feedback','About Us Upload Successfull');
					$this->session->set_flashdata('feedback_class','alert-success');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					redirect('dashboard/show_aboutUs');
				}
				else
				{  //insert failed
					$this->session->set_flashdata('feedback','Upload To failed');
					$this->session->set_flashdata('feedback_class','alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/add_aboutUs');
				}

			}
			else
			{  //validation failed
				$this->session->set_flashdata('feedback','Upload To failed');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_aboutUs');
			}

		}

		public function edit_aboutUs($id)
		{
			$this->load->model('AboutModel');
			$about = $this->AboutModel->editAboutUs($id);
			$this->load->view('admin/pages/edit_about',compact('about'));
		}
		public function update_aboutUs($id)
		{
			$this->form_validation->set_rules('about_desc','About Us Description','required');
			$this->form_validation->set_rules('service1','About Service 1','required');
			$this->form_validation->set_rules('service2','About Service 2','required');
			$this->form_validation->set_rules('service3','About Service 3','required');
			$this->form_validation->set_rules('service4','About Service 4','required');
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$post = $this->input->post();
			unset($post['submit']);

			if ($this->form_validation->run() && $this->upload->do_upload('about_img'))
			{
				$data = $this->upload->data();
				$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				$post['about_img'] = $img_path;
			}
			$this->load->model('AboutModel');
			$about = $this->AboutModel->updateAboutUs($id,$post);
			if ($about)
			{
				$this->session->set_flashdata('feedback','About Us Update Successfull');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_aboutUs/'.$id);
			}
			else
			{
				$this->session->set_flashdata('feedback','failed to Update');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_aboutUs/'.$id);
			}
		}

		public function show_aboutUs()
		{
			$this->load->model('AboutModel');
		    $aboutAll =	$this->AboutModel->getAllAbout();
			$this->load->view('admin/pages/show_aboutus',compact('aboutAll'));
		}
		public function delete_aboutUs($id)
		{
			$this->load->model('AboutModel');
			$this->db->delete('about_us',['id'=>$id]);
			redirect('dashboard/show_aboutUs');
		}


	/* -------------..// about us ------------------- */

	/* -------------Visa ------------------- */
     public function add_visa()
	 {
		$this->load->view('admin/pages/add_visa');
	 }
	 public function create_visa()
	 {
			$this->form_validation->set_rules('visa_desc','Visa Description','required');
			/*$this->form_validation->set_rules('visa_rule','Visa Rules','required');*/
			 $config['upload_path'] = 'uploads/';
			 $config['allowed_types'] = 'gif|jpg|png';
			 $this->load->library('upload', $config);
			 $this->upload->initialize($config);
			 if ($this->form_validation->run() && $this->upload->do_upload('visa_img'))
			 {  //validation success
			 	$post = $this->input->post();
			 	unset($post['submit']);
				 $data = $this->upload->data();
				 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				 $post['visa_img'] = $img_path;
				 $this->load->model('VisaModel');
				 $visaData = $this->VisaModel->insertVisa($post);
				 if ($visaData)
				 {  //insert success
					 $this->session->set_flashdata('feedback','Visa Data Upload Successfully');
					 $this->session->set_flashdata('feedback_class','alert-success');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					 redirect('dashboard/show_visa');
				 }
				 else
				 {  //failed insert
					 $this->session->set_flashdata('feedback','Failed To Upload');
					 $this->session->set_flashdata('feedback_class','alert-danger');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					 redirect('dashboard/add_visa');
				 }

			 }
			 else
			 {  //validation failed
				 $this->session->set_flashdata('feedback','Failed to Upload');
				 $this->session->set_flashdata('feedback_class','alert-danger');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				 redirect('dashboard/add_visa');
			 }

	 }

	 public function show_visa()
	 {
	 	$this->load->model('VisaModel');
	 	$visa = $this->VisaModel->getAllVisa();
		$this->load->view('admin/pages/show_visa',compact('visa'));
	 }

	 public function edit_visa($id)
	 {
	 	$this->load->model('VisaModel');
	 	$visaData = $this->VisaModel->findVisaId($id);
		$this->load->view('admin/pages/edit_visa',compact('visaData'));
	 }

	 public function update_visa($id)
	 {
		 $this->form_validation->set_rules('visa_desc','Visa Description','required');
		 /*$this->form_validation->set_rules('visa_rule','Visa Rules','required');*/
		 $config['upload_path'] = 'uploads/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 $post = $this->input->post();
		 unset($post['submit']);
		 if ($this->form_validation->run() && $this->upload->do_upload('visa_img'))
		 {
			 $data = $this->upload->data();
			 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
			 $post['visa_img'] = $img_path;
		 }
		 $this->load->model('VisaModel');
		 $visaData = $this->VisaModel->updateVisa($id,$post);
		 if ($visaData)
		 {
			 $this->session->set_flashdata('feedback','Visa Data Update Successfully');
			 $this->session->set_flashdata('feedback_class','alert-success');
			 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			 redirect('dashboard/show_visa/'.$id);
		 }
		 else
		 {
			 $this->session->set_flashdata('feedback','Failed to Update');
			 $this->session->set_flashdata('feedback_class','alert-danger');
			 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			 redirect('dashboard/edit_visa/'.$id);
		 }
	 }

	 public function delete_visa($id)
	 {
		$this->load->model('VisaModel');
		$this->db->delete('visa',['id'=>$id]);
		redirect('dashboard/show_visa');
	 }

	/* -------------..// Visa ------------------- */

	/* -------------Car on Rent ------------------- */
     /*public function add_car()
	 {
			$this->load->view('admin/pages/add_car');
	 }

	 public function createCarRent()
	 {
		 $this->form_validation->set_rules('car_desc','Car Description','required');
		 $this->form_validation->set_rules('car_rule','Car Rent Rules','required');
		 $config['upload_path'] = 'uploads/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if ($this->form_validation->run() && $this->upload->do_upload('car_img'))
		 {  //validation success
			 $post = $this->input->post();
			 unset($post['submit']);
			 $data = $this->upload->data();
			 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
			 $post['car_img'] = $img_path;
			 $this->load->model('CarModel');
			 $visaData = $this->CarModel->insertCar($post);
			 if ($visaData)
			 {  //insert success
				 $this->session->set_flashdata('feedback','Car On Rent Upload Successfully');
				 $this->session->set_flashdata('feedback_class','alert-success');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				 redirect('dashboard/show_car');
			 }
			 else
			 {  //failed insert
				 $this->session->set_flashdata('feedback','Failed To Upload');
				 $this->session->set_flashdata('feedback_class','alert-danger');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				 redirect('dashboard/add_car');
			 }

		 }
		 else
		 {  //validation failed
			 $this->session->set_flashdata('feedback','Failed to Upload');
			 $this->session->set_flashdata('feedback_class','alert-danger');
			 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			 redirect('dashboard/add_car');
		 }

	 }

	 public function show_car()
	 {
	 	$this->load->model('CarModel');
	 	$car = $this->CarModel->getAllCar();
		$this->load->view('admin/pages/show_car',compact('car'));
	 }

	 public function edit_car_rent($id)
	 {
		$this->load->model('CarModel');
		$carData = $this->CarModel->EditCarId($id);
		$this->load->view('admin/pages/edit_car_rent',compact('carData'));

	 }
	 public function update_car_rent($id)
	 {
		 $this->form_validation->set_rules('car_desc','Car Description','required');
		 $this->form_validation->set_rules('car_rule','Car Rent Rules','required');
		 $config['upload_path'] = 'uploads/';
		 $config['allowed_types'] = 'gif|jpg|png';
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if ($this->form_validation->run() && $this->upload->do_upload('car_img'))
		 {  //validation success
			 $post = $this->input->post();
			 unset($post['submit']);
			 $data = $this->upload->data();
			 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
			 $post['car_img'] = $img_path;
			 $this->load->model('CarModel');
			 $visaData = $this->CarModel->UpdateCar($id,$post);
			 if ($visaData)
			 {  //insert success
				 $this->session->set_flashdata('feedback','Car On Rent Update Successfully');
				 $this->session->set_flashdata('feedback_class','alert-success');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				 redirect('dashboard/show_car/'.$id);
			 }
			 else
			 {  //failed insert
				 $this->session->set_flashdata('feedback','Failed To Upload');
				 $this->session->set_flashdata('feedback_class','alert-danger');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				 redirect('dashboard/edit_car_rent/'.$id);
			 }

		 }
		 else
		 {  //validation failed
			 $this->session->set_flashdata('feedback','Failed to Upload');
			 $this->session->set_flashdata('feedback_class','alert-danger');
			 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			 redirect('dashboard/edit_car_rent/'.$id);
		 }
	 }

	 public function delete_car_rent($id)
	 {
		$this->load->model('CarModel');
		$this->db->delete('car_rent',['id'=>$id]);
		redirect('dashboard/show_car');
	 }*/

	/* -------------..// Car On rent ------------------- */

	/* -------------Foregin Exchange------------------- */
		public function add_foreignExchange()
		{
			$this->load->view('admin/pages/add_foreignExchange');
		}

		public function createForeignExchange()
		{
			$this->form_validation->set_rules('foreign_desc','Foreign Exchange Description','required');
			$this->form_validation->set_rules('foreign_rule','Foreign Rules','required');
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->form_validation->run() && $this->upload->do_upload('foreign_img'))
			{  //validation success
				$post = $this->input->post();
				unset($post['submit']);
				$data = $this->upload->data();
				$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				$post['foreign_img'] = $img_path;
				$this->load->model('ForeignModel');
				$foreignData = $this->ForeignModel->insertForeEx($post);
				if ($foreignData)
				{  //insert success
					$this->session->set_flashdata('feedback','Foreign exchange Upload Successfully');
					$this->session->set_flashdata('feedback_class','alert-success');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					redirect('dashboard/show_foreignExchange');
				}
				else
				{  //failed insert
					$this->session->set_flashdata('feedback','Failed To Upload');
					$this->session->set_flashdata('feedback_class','alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/add_foreignExchange');
				}
			}
			else
			{  //validation failed
				$this->session->set_flashdata('feedback','Failed to Upload');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_foreignExchange');
			}
		}

		public function show_foreignExchange()
		{
			$this->load->model('ForeignModel');
			$dataForeign = $this->ForeignModel->getAllForeignEx();
			$this->load->view('admin/pages/show_foreignExchange',compact('dataForeign'));
		}

		public function edit_foreignExchange($id)
		{
			$this->load->model('ForeignModel');
			$foreignEx = $this->ForeignModel->findForeignId($id);
			$this->load->view('admin/pages/edit_foreignExchange',compact('foreignEx'));
		}

		public function update_foreignExchange($id)
		{
			$this->form_validation->set_rules('foreign_desc','Foreign Exchange Description','required');
			$this->form_validation->set_rules('foreign_rule','Foreign Rules','required');
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->form_validation->run() && $this->upload->do_upload('foreign_img'))
			{  //validation success
				$post = $this->input->post();
				unset($post['submit']);
				$data = $this->upload->data();
				$img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				$post['foreign_img'] = $img_path;
				$this->load->model('ForeignModel');
				$foreignData = $this->ForeignModel->update_foreignExchange($id,$post);
				if ($foreignData)
				{  //insert success
					$this->session->set_flashdata('feedback','Foreign exchange Update Successfully');
					$this->session->set_flashdata('feedback_class','alert-success');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					redirect('dashboard/show_foreignExchange/'.$id);
				}
				else
				{  //failed insert
					$this->session->set_flashdata('feedback','Failed To Update');
					$this->session->set_flashdata('feedback_class','alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/edit_foreignExchange/'.$id);
				}
			}
			else
			{  //validation failed
				$this->session->set_flashdata('feedback','Failed to Update');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_foreignExchange/'.$id);
			}
		}

		public function delete_foreignExchange($id)
		{
			$this->load->model('ForeignModel');
			$this->db->delete('foreignexchange',['id'=>$id]);
			redirect('dashboard/show_foreignExchange');
		}

	/* -------------..// Foreign Exchange ------------------- */

	/* -------------Travel Insurance ------------------- */
	     public function add_travel_Insurance()
		 {
			$this->load->view('admin/pages/add_travel_Insurance');
		 }

		 public function createTravelInsurance()
		 {
			 $this->form_validation->set_rules('travel_desc','Travel Insurance Description','required');
			 $this->form_validation->set_rules('travel_rule','Travel Insurance Rules','required');
			 $config['upload_path'] = 'uploads/';
			 $config['allowed_types'] = 'gif|jpg|png';
			 $this->load->library('upload', $config);
			 $this->upload->initialize($config);
			 if ($this->form_validation->run() && $this->upload->do_upload('travel_img'))
			 {  //validation success
				 $post = $this->input->post();
				 unset($post['submit']);
				 $data = $this->upload->data();
				 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				 $post['travel_img'] = $img_path;
				 $this->load->model('TravelModel');
				 $travelData = $this->TravelModel->insertTravel($post);
				 if ($travelData)
				 {  //insert success
					 $this->session->set_flashdata('feedback','Travel Insurance Upload Successfully');
					 $this->session->set_flashdata('feedback_class','alert-success');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					 redirect('dashboard/showTravelInsurance');
				 }
				 else
				 {  //failed insert
					 $this->session->set_flashdata('feedback','Failed To Upload');
					 $this->session->set_flashdata('feedback_class','alert-danger');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					 redirect('dashboard/add_travel_Insurance');
				 }
			 }
			 else
			 {  //validation failed
				 $this->session->set_flashdata('feedback','Failed to Upload');
				 $this->session->set_flashdata('feedback_class','alert-danger');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				 redirect('dashboard/add_travel_Insurance');
			 }
		 }

		 public function showTravelInsurance()
		 {
		 	$this->load->model('TravelModel');
		 	$travelAllData = $this->TravelModel->getAllTravel();
		 	$this->load->view('admin/pages/show_travel_Insurance',compact('travelAllData'));
		 }

		 public function edit_travel_Insurance($id)
		 {
			$this->load->model('TravelModel');
			$TravelEditData = $this->TravelModel->EditTravel($id);
			$this->load->view('admin/pages/edit_travel_Insurance',compact('TravelEditData'));
		 }

		 public function update_travel_Insurance($id)
		 {
			 $this->form_validation->set_rules('travel_desc','Travel Insurance Description','required');
			 $this->form_validation->set_rules('travel_rule','Travel Insurance Rules','required');
			 $config['upload_path'] = 'uploads/';
			 $config['allowed_types'] = 'gif|jpg|png';
			 $this->load->library('upload', $config);
			 $this->upload->initialize($config);
			 if ($this->form_validation->run() && $this->upload->do_upload('travel_img'))
			 {  //validation success
				 $post = $this->input->post();
				 unset($post['submit']);
				 $data = $this->upload->data();
				 $img_path = base_url('uploads/'. $data['raw_name'] . $data['file_ext']);
				 $post['travel_img'] = $img_path;
				 $this->load->model('TravelModel');
				 $travelData = $this->TravelModel->UpdateTravelInsurance($id,$post);
				 if ($travelData)
				 {  //insert success
					 $this->session->set_flashdata('feedback','Travel Insurance Update Successfully');
					 $this->session->set_flashdata('feedback_class','alert-success');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
					 redirect('dashboard/showTravelInsurance/'.$id);
				 }
				 else
				 {  //failed insert
					 $this->session->set_flashdata('feedback','Failed To Update');
					 $this->session->set_flashdata('feedback_class','alert-danger');
					 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					 redirect('dashboard/edit_travel_Insurance/'.$id);
				 }
			 }
			 else
			 {  //validation failed
				 $this->session->set_flashdata('feedback','Failed to Update');
				 $this->session->set_flashdata('feedback_class','alert-danger');
				 $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				 redirect('dashboard/edit_travel_Insurance/'.$id);
			 }
		 }

		 public function delete_travel_Insurance($id)
		 {
				$this->load->model('TravelModel');
				$this->db->delete('travel_insurance',['id'=>$id]);
				redirect('dashboard/showTravelInsurance');
		 }
	/* -------------..// Travel Insurance ------------------- */

	/* --------------terms and condition ------------- */
	public function add_privacy_policy()
	{
		$this->load->view('admin/pages/add_privacy_policy');
	}

	public function createPrivacyPolicy()
	{
		$this->form_validation->set_rules('policy_desc','Privacy Policy Description','required');
		if ($this->form_validation->run())
		{ // sucess
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('PrivacyModel');
			$privacyData = $this->PrivacyModel->insertPrivacy($post);
  			if ($privacyData)
			{  //insert success
				$this->session->set_flashdata('feedback','Privacy Policy Upload Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_privacy_policy');
			}
			else
			{  //failed insert
				$this->session->set_flashdata('feedback','Failed to Upload');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_privacy_policy');
			}
		}
		else
		{  //failed
			$this->session->set_flashdata('feedback','Failed to Upload');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_privacy_policy');
		}

	}

	public function show_privacy_policy()
	{
		$this->load->model('PrivacyModel');
		$privacyData = $this->PrivacyModel->getAllPrivacy();
		$this->load->view('admin/pages/show_privacy_policy',compact('privacyData'));
	}

	public function edit_privacy_policy($id)
	{
		$this->load->model('PrivacyModel');
		$privacy = $this->PrivacyModel->editPrivacyPolicy($id);
		$this->load->view('admin/pages/edit_privacy_policy',compact('privacy'));
	}

	public function update_privacy_policy($id)
	{
		$this->form_validation->set_rules('policy_desc','Privacy Policy Description','required');
		if ($this->form_validation->run())
		{ // sucess
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('PrivacyModel');
			$privacyData = $this->PrivacyModel->updatePrivacy($id,$post);
			if ($privacyData)
			{  //insert success
				$this->session->set_flashdata('feedback','Privacy Policy Update Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_privacy_policy/'.$id);
			}
			else
			{  //failed insert
				$this->session->set_flashdata('feedback','Failed to Update');
				$this->session->set_flashdata('feedback_class','alert-danger');
				redirect('dashboard/edit_privacy_policy/'.$id);
			}
		}
		else
		{  //failed
			$this->session->set_flashdata('feedback','Failed to Update');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_privacy_policy/'.$id);
		}
	}

	public function delete_privacy_policy($id)
	{
		$this->load->model('PrivacyModel');
		$this->db->delete('privacy_policy',['id'=>$id]);
		redirect('dashboard/show_privacy_policy');
	}

	/* --------------..//end privacy Policy ---------------- */

	/* - ------------Terms And Condition -----------*/
	public function add_term_condition()
	{
		$this->load->view('admin/pages/add_term_condition');
	}

	public function create_term_condition()
	{
		$this->form_validation->set_rules('term_desc','Terms & Condition Description','required');
		if ($this->form_validation->run())
		{ // sucess
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('TermConModel');
			$privacyData = $this->TermConModel->insertTermCondition($post);
			if ($privacyData)
			{  //insert success
				$this->session->set_flashdata('feedback','Terms & Condition Upload Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_term_condition');
			}
			else
			{  //failed insert
				$this->session->set_flashdata('feedback','Failed to Upload');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_term_condition');
			}
		}
		else
		{  //failed
			$this->session->set_flashdata('feedback','Failed to Upload');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_term_condition');
		}

	}

	public function edit_term_condition($id)
	{
		$this->load->model('TermConModel');
		$terms = $this->TermConModel->editTermCo($id);
		$this->load->view('admin/pages/edit_term',compact('terms'));
	}

	public function update_terms_condition($id)
	{
		$this->form_validation->set_rules('term_desc','Terms & Condition Description','required');
		if ($this->form_validation->run())
		{ // sucess
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('TermConModel');
			$privacyData = $this->TermConModel->updateTermCon($id,$post);
			if ($privacyData)
			{  //insert success
				$this->session->set_flashdata('feedback','Terms & Condition Update Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_term_condition/'.$id);
			}
			else
			{  //failed insert
				$this->session->set_flashdata('feedback','Failed to Update');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_term_condition/'.$id);
			}
		}
		else
		{  //failed
			$this->session->set_flashdata('feedback','Failed to Update');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_term_condition/'.$id);
		}

	}

	public function show_term_condition()
	{
		$this->load->model('TermConModel');
		$term = $this->TermConModel->getAllTermCondition();
		$this->load->view('admin/pages/show_term_condition',compact('term'));
	}

	public function delete_term_condition($id)
	{
		 $this->load->model('TermConModel');
		 $this->db->delete('term',['id'=>$id]);
		 redirect('dashboard/show_term_condition');
	}
	/* -------------..//end terms and condition----- */


   /* ----------------domestric package ---------------  */
	public function add_domestic_package()
	{
		$this->load->view('admin/pages/add_domestic_package');
	}

	public function create_domestic_package()
	{
		$this->form_validation->set_rules('domestic_trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('domestic_trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('domestic_price', 'Package Price', 'required');
		$this->form_validation->set_rules('domestic_desc', 'Package Trip Description', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('domestic_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['domestic_img'] = $img_path;

			$this->load->model('DomesticModel');
			$data = $this->DomesticModel->insertDomestic($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Domestic Package Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_domestic');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_domestic_package');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_domestic_package');
		}
	}

	public function edit_domestic_tour($id)
	{
		$this->load->model('DomesticModel');
		$findDomestic = $this->DomesticModel->editDomestic($id);
		$this->load->view('admin/pages/edit_domestic',compact('findDomestic'));
	}
	public function updateDomestic($id)
	{
		$this->form_validation->set_rules('domestic_trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('domestic_trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('domestic_price', 'Package Price', 'required');
		$this->form_validation->set_rules('domestic_desc', 'Package Trip Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('domestic_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['domestic_img'] = $img_path;
		}
		$this->load->model('DomesticModel');
		$data = $this->DomesticModel->updateDomestic($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Domestic Package Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_domestic/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_domestic_tour/' . $id);
		}
	}
	public function deleteDomestic($id)
	{
		$this->load->model('DomesticModel');
		$this->db->delete('domestic_package',['id'=>$id]);
		redirect('dashboard/show_domestic');
	}

	public function show_domestic()
	{
		$this->load->model('DomesticModel');
		$domesticTour = $this->DomesticModel->getAllDomestic();
		$this->load->view('admin/pages/show_domestic_package',compact('domesticTour'));
	}


	/* -------------------../end domestric packages ------------ */

	/* --------------------international package -------------------- */

	public function add_international_package()
	{
		$this->load->view('admin/pages/add_international_package');
	}

	public function create_international_package()
	{
		$this->form_validation->set_rules('intern_trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('intern_trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('intern_trip_price', 'Package Price', 'required');
		$this->form_validation->set_rules('intern_trip_desc', 'Package Trip Description', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('intern_trip_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['intern_trip_img'] = $img_path;

			$this->load->model('InternationalModel');
			$data = $this->InternationalModel->insertInternational($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'International Package Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_international_package');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_international_package');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_international_package');
		}
	}

	public function edit_international_package($id)
	{
		$this->load->model('InternationalModel');
		$edit_international = $this->InternationalModel->edit_international($id);
		$this->load->view('admin/pages/edit_international',compact('edit_international'));
	}

	public function update_international_package($id)
	{
		$this->form_validation->set_rules('intern_trip_name', 'Package Name', 'required');
		$this->form_validation->set_rules('intern_trip_day', 'Package Trip day', 'required');
		$this->form_validation->set_rules('intern_trip_price', 'Package Price', 'required');
		$this->form_validation->set_rules('intern_trip_desc', 'Package Trip Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('intern_trip_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['intern_trip_img'] = $img_path;
		}
		$this->load->model('InternationalModel');
		$data = $this->InternationalModel->updateInternational($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'International Package Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_international_package/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_international_package/' . $id);
		}
	}

	public function show_international_package()
	{
		$this->load->model('InternationalModel');
		$InternationalData = $this->InternationalModel->getAllInternational();
		$this->load->view('admin/pages/show_international_package',compact('InternationalData'));
	}

	public function delete_international_package($id)
	{
		$this->load->model('InternationalModel');
		$this->db->delete('international_package',['id'=>$id]);
		redirect('dashboard/show_international_package');
	}


	/* ----------------------..//end internatioanl package -------------- */

	/* ================maharashtra Tour Package =============== */

	public function add_maharashtra_tour()
	{
		$this->load->view('admin/pages/add-maharashtra-tour');
	}

	public function create_maharashtra_tour()
	{
		$this->form_validation->set_rules('mh_tour_name','Tour Name','required');
		$this->form_validation->set_rules('tour_duration','Tour Duration','required');
		$this->form_validation->set_rules('tour_day','Tour Day','required');
		$this->form_validation->set_rules('inclusion_exclution','Inclusion Exclusion','required');
		$this->form_validation->set_rules('itinerary','Itinerary','required');
		$this->form_validation->set_rules('tour_cost','Tour Cost','required');
		$this->form_validation->set_rules('depature_date','Departure Date','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('mh_tour_img'))
		{  //validation sucess
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['mh_tour_img'] = $img_path;

			$this->load->model('MaharashtraModel');
			$MhTourData = $this->MaharashtraModel->insertMaharashtraTour($post);

			if ($MhTourData)
			{ //insert sucess
				$this->session->set_flashdata('feedback', 'Maharashtra Tour Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_maharashtra_tour');
			}
			else
			{  // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_maharashtra_tour');
			}

		}
		else
		{  //validation failed
             redirect('dashboard/add_maharashtra_tour');
		}

	}

	public function edit_maharashtra_tour($mh_id)
	{
		$this->load->model('MaharashtraModel');
		$editMhTour = $this->MaharashtraModel->editMaharashtraTour($mh_id);
		$this->load->view('admin/pages/edit_maharashtra_tour',compact('editMhTour'));
	}

	public function update_maharashtra_tour($mh_id)
	{
		$this->form_validation->set_rules('mh_tour_name','Tour Name','required');
		$this->form_validation->set_rules('tour_duration','Tour Duration','required');
		$this->form_validation->set_rules('tour_day','Tour Day','required');
		$this->form_validation->set_rules('inclusion_exclution','Inclusion Exclusion','required');
		$this->form_validation->set_rules('itinerary','Itinerary','required');
		$this->form_validation->set_rules('tour_cost','Tour Cost','required');
		$this->form_validation->set_rules('depature_date','Departure Date','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('mh_tour_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['mh_tour_img'] = $img_path;
		}
		$this->load->model('MaharashtraModel');
		$data = $this->MaharashtraModel->updateMaharashtaTour($mh_id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Maharashtra Tour Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_maharashtra_tour/' . $mh_id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_maharashtra_tour/' . $mh_id);
		}
	}



	public function show_maharashtra_tour()
	{
		$this->load->model('MaharashtraModel');
		$AllDataMaha = $this->MaharashtraModel->getAllDataMaharashtra();
		$this->load->view('admin/pages/show_maharashtra_tour',compact('AllDataMaha'));
	}

	public function delete_maharashtra_tour($mh_id)
	{
		$this->load->model('MaharashtraModel');
		$this->db->delete('maharashtra-tour',['mh_id'=>$mh_id]);
		$this->session->set_flashdata('feedback', 'Maharashtra Tour Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash"></i>');
		redirect('dashboard/show_maharashtra_tour/' . $mh_id);
	}

	/* ==============../end maharashtra tour ==================== */

	/* ===============one day tour ==================== */

	public function add_one_day_tour()
	{
		$this->load->view('admin/pages/add_one_day_tour');
	}

	public function create_one_day_tour()
	{
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		$this->form_validation->set_rules('one_day_tour_name','One Day Tour Name','required');
		$this->form_validation->set_rules('tour_desc','Tour Description','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('tour_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['tour_img'] = $img_path;

			$this->load->model('OneDayTourModel');
			$oneDayTour = $this->OneDayTourModel->insertOneDayTour($post);
			if ($oneDayTour)
			{  //insert succes
				$this->session->set_flashdata('feedback', 'One Day Tour Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_one_day_our');
			}
			else
			{  // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_one_day_tour');
			}
		}
		else
		{
			redirect('dashboard/add_one_day_tour');
		}
	}

	public function edit_one_day_tour($id)
	{
		$this->load->model('OneDayTourModel');
		$editOneDayTour = $this->OneDayTourModel->editOneDayTour($id);
		$this->load->view('admin/pages/edit-one-day-tour',compact('editOneDayTour'));
	}

	public function update_one_day_tour($id)
	{
		$this->form_validation->set_rules('one_day_tour_name','One Day Tour Name','required');
		$this->form_validation->set_rules('tour_desc','Tour Description','required');

		$post = $this->input->post();
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if ($this->form_validation->run() && $this->upload->do_upload('tour_img'))
		{

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['tour_img'] = $img_path;
		}

		$this->load->model('OneDayTourModel');
		$data = $this->OneDayTourModel->updateOneDayTour($id,$post);
		if ($data)
		{
			$this->session->set_flashdata('feedback', 'One Day Tour Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_one_day_our/' . $id);
		}
		else
		{
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_one_day_tour/' . $id);
		}

	}

    public function delete_one_day_tour($id)
	{
		$this->load->model('OneDayTourModel');
		$this->db->delete('one_day_tour',['id'=>$id]);
		$this->session->set_flashdata('feedback', 'One Day Tour Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/show_one_day_our/' . $id);
	}

	public function show_one_day_our()
	{
		$this->load->model('OneDayTourModel');
		$AllOneDayData = $this->OneDayTourModel->getAllData();
		$this->load->view('admin/pages/show_one_day_tour',compact('AllOneDayData'));
	}

	/* ===============..//end one day tour =============== */

	/* ======================Add Domestic State Tour Category ================ */

	public function add_domestic_tour_category()
	{
		$this->load->view('admin/pages/add_domestic_tour_category');
	}

	public function create_domestic_tour_category()
	{
		$this->form_validation->set_rules('state_name','State Name','required');
		$this->form_validation->set_rules('state_tour_des','State Tour Description','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('state_tour_img'))
		{  //validation success
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['state_tour_img'] = $img_path;

			$this->load->model('DomesticStateModel');
			$DomesticCategory = $this->DomesticStateModel->insertDomesticStateCategory($post);
			if ($DomesticCategory)
			{  // insert success
				$this->session->set_flashdata('feedback', 'Domestic State Category Create SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect('dashboard/Domestic_State_Tour_Category');
			}

			else
			{  // failed to insert
				$this->session->set_flashdata('feedback', 'Failed to Create Category ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/Domestic_State_Tour_Category');
			}

		}
		else
		{ // validation failed
			redirect('dashboard/Domestic_State_Tour_Category');
		}

	}

	public function Domestic_State_Tour_Category()
	{
		$this->load->model('DomesticStateModel');
		$data['DomesticCategoryData'] = $this->DomesticStateModel->showDomesticCategory();
		$this->load->view('admin/pages/add_domestic_package',$data);
	}

	public function delete_domestic_state_tour_category($state_tour_id)
	{
		$this->load->model('DomesticStateModel');
		$this->db->delete('state_tour_category',['state_tour_id'=>$state_tour_id]);
		$this->session->set_flashdata('feedback', 'Domestic State Category Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/Domestic_State_Tour_Category/'.$state_tour_id);
	}

	// edit domestic category
	public function edit_state_category($state_tour_id)
	{
		$editStCat = $this->DomesticStateModel->editStateCategory($state_tour_id);
		$this->load->view('admin/pages/edit_state_category',compact('editStCat'));
	}

	public function update_state_category($state_tour_id)
	{
		$this->form_validation->set_rules('state_name','State Name','required');
		$this->form_validation->set_rules('state_tour_des','State Tour Description','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('state_tour_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['state_tour_img'] = $img_path;
		}
		$this->load->model('DomesticStateModel');
		$data = $this->DomesticStateModel->updateDomesticTour($state_tour_id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'State Tour Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/Domestic_State_Tour_Category/' . $state_tour_id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_state_category/' . $state_tour_id);
		}
	}

	// delete state tour cate
	public function delete_state_tour_category($state_tour_id)
	{
		$this->db->delete('state_tour_category',['state_tour_id'=>$state_tour_id]);
		$this->session->set_flashdata('feedback', 'Domestic State Category Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/Domestic_State_Tour_Category/'.$state_tour_id);
	}

	/* -----------------add state tour ---------------- */
  public function add_domestic_state_tours()
  {
	  $this->load->view('admin/pages/add_state_tour');
  }

  public function create_domestic_state_tours()
  {

		$this->form_validation->set_rules('domestic_tour_name','Domestic Tour Name','required');
		$this->form_validation->set_rules('domestic_tour_duration','Tour Duration','required');
		$this->form_validation->set_rules('itinerary','itinerary','required');
		$this->form_validation->set_rules('inclusion_exclusion','Inclusion Exclusion','required');
		$this->form_validation->set_rules('tour_cost','Tour Cost','required');

	  $config['upload_path'] = 'uploads/';
	  $config['allowed_types'] = 'gif|jpg|png';
	  $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  if ($this->form_validation->run() && $this->upload->do_upload('domestic_tour_img'))
	  {  // success
			$post = $this->input->post();
			$data=$this->upload->data();
		    $img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
		    $post['domestic_tour_img'] = $img_path;

		   $this->load->model('DomesticStateModel');
		   $domesticTour = $this->DomesticStateModel->insertDomesticTour($post);
		   if ($domesticTour)
		   {  // insert success
			   $this->session->set_flashdata('feedback', 'Domestic State Tour Upload SuccessFully');
			   $this->session->set_flashdata('feedback_class', 'alert-success');
			   $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			   redirect('dashboard/show_state_table');
		   }
		   else
		   {  // insert failed
			   $this->session->set_flashdata('feedback', 'Domestic State Tour Failed to Upload');
			   $this->session->set_flashdata('feedback_class', 'alert-danger');
			   $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			   redirect('dashboard/add_domestic_state_tours');
		   }

	  }
	  else
	  {  //validation failed
	  	redirect('dashboard/add_domestic_state_tours');
	  }
  }


  public function show_state_table()
  {
		$this->load->model('DomesticStateModel');
		$stateTourList = $this->DomesticStateModel->getAllStateData();
		$this->load->view('admin/pages/show_state_tour_list',compact('stateTourList'));
  }

  public function edit_state_tour($domestic_tour_id)
  {
  		$editState = $this->DomesticStateModel->editStateTour($domestic_tour_id);
		$this->load->view('admin/pages/edit_state_tour',compact('editState'));
  }

  public function update_state_tour($domestic_tour_id)
  {
	  $this->form_validation->set_rules('domestic_tour_name','Domestic Tour Name','required');
	  $this->form_validation->set_rules('domestic_tour_duration','Tour Duration','required');
	  $this->form_validation->set_rules('itinerary','itinerary','required');
	  $this->form_validation->set_rules('inclusion_exclusion','Inclusion Exclusion','required');
	  $this->form_validation->set_rules('tour_cost','Tour Cost','required');

	  $post = $this->input->post();
	  unset($post['submit']);
	  $config['upload_path'] = 'uploads/';
	  $config['allowed_types'] = 'gif|jpg|png';
	  $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  if ($this->form_validation->run() && $this->upload->do_upload('domestic_tour_img')) { // validation success

		  $data = $this->upload->data();
		  $img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
		  $post['domestic_tour_img'] = $img_path;
	  }
	  $this->load->model('DomesticStateModel');
	  $data = $this->DomesticStateModel->updateStateTour($domestic_tour_id, $post);

	  if ($data) { // insert success
		  $this->session->set_flashdata('feedback', 'Domestic Tour Update SuccessFully');
		  $this->session->set_flashdata('feedback_class', 'alert-success');
		  $this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
		  redirect('dashboard/show_state_table/' . $domestic_tour_id);

	  } else { // failed to insert
		  $this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
		  $this->session->set_flashdata('feedback_class', 'alert-danger');
		  $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
		  redirect('dashboard/edit_state_tour/' . $domestic_tour_id);
	  }
  }

  public function delete_state_tour($domestic_tour_id)
  {
	  $this->load->model('DomesticStateModel');
	  $this->db->delete('domestic_tour_state',['domestic_tour_id'=>$domestic_tour_id]);
	  $this->session->set_flashdata('feedback', 'Domestic State Tour Delete SuccessFully');
	  $this->session->set_flashdata('feedback_class', 'alert-success');
	  $this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
	  redirect('dashboard/show_state_table');
  }



	/* ----------------..//end -------------------------- */


	/* ======================..//end Domestic State Tour Category=========== */

	/* ============================INTERNATIONAL COUNTRY CATEGORY============================== */

	public function add_international_country_category()
	{
		$this->load->model('InternationalCModel');
		$data['internCategory'] = $this->InternationalCModel->getAllCategoryList();
		$this->load->view('admin/pages/international_country_category',$data);
	}


	public function create_international_country_category()
	{
		$this->form_validation->set_rules('inc_name','Country Name','required');
		$this->form_validation->set_rules('inc_desc','Country Description','required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('inc_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['inc_img'] = $img_path;

			$this->load->model('InternationalCModel');
			$data = $this->InternationalCModel->insertINCCategory($post);
			if ($data)
			{  // insert success
				$this->session->set_flashdata('feedback', 'International Country Category Create SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect(base_url('dashboard/add_international_country_category'),'refresh');
			}
			else
			{ // failed to insert
				$this->session->set_flashdata('feedback', 'Failed to Create Category');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect(base_url('dashboard/add_international_country_category'),'refresh');
			}
		}
		else
		{
			redirect(base_url('dashboard/add_international_country_category'),'refresh');
		}
	}

	public function add_international_tours_list()
	{
		$this->load->view('admin/pages/add_international_tours_list');
	}

	public function create_international_tour_list()
	{
		$this->form_validation->set_rules('c_tour_name','Country Name','required');
		$this->form_validation->set_rules('c_tour_duration','Duration','required');
		$this->form_validation->set_rules('c_itenary','Itenary','required');
		$this->form_validation->set_rules('c_inclusion_exclusion','Inclusion Exclusion','required');
		$this->form_validation->set_rules('c_tour_cost','Tour Cost','required');
		$this->form_validation->set_rules('c_tour_date','Tour Date','required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('c_tour_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['c_tour_img'] = $img_path;

			$this->load->model('InternationalCModel');
			$InternationalTour = $this->InternationalCModel->insertInterTourList($post);
			if ($InternationalTour)
			{
				$this->session->set_flashdata('feedback', 'International Country Tour Insert SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect(base_url('dashboard/show_country_tour'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('feedback', 'Failed to Insert Tour');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect(base_url('dashboard/add_international_tours_list'),'refresh');
			}
		}
		else
		{
			redirect(base_url('dashboard/add_international_tours_list'));
		}

	}

	public function show_country_tour()
	{
		$this->load->model('InternationalCModel');
		$data['internationalTourList'] = $this->InternationalCModel->getAllInternationalTour();
		$this->load->view('admin/pages/show_country_tour_list',$data);
	}

	// delete international tour category
	public function delete_international_tour_category($in_country_id)
	{
		$this->load->model('InternationalCModel');
		$this->db->delete('international_country_category',['in_country_id'=>$in_country_id]);
		$this->session->set_flashdata('feedback', 'International Country Tour Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect(base_url('dashboard/add_international_country_category/'.$in_country_id),'refresh');
	}

	// edit international tour category
	public function edit_international_tour_category($in_country_id)
	{
		$data['editInCate'] = $this->InternationalCModel->editInternationalCategory($in_country_id);
		$this->load->view('admin/pages/edit_international_category',$data);
	}
	// update international tour category
	public function update_international_tour_category($in_country_id)
	{
		$this->form_validation->set_rules('inc_name','Country Name','required');
		$this->form_validation->set_rules('inc_desc','Country Description','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('inc_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['inc_img'] = $img_path;
		}

		$data = $this->InternationalCModel->updateINCCategory($in_country_id,$post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'International Country Category Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/add_international_country_category/' . $in_country_id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_international_tour_category/' . $in_country_id);
		}
	}


	// delete international country tour list
      public function delete_country_tour($country_tour_id)
	  {
	  	  $this->db->delete('country_tour_package',['country_tour_id'=>$country_tour_id]);
		  $this->session->set_flashdata('feedback', 'International Country Tour List Delete SuccessFully');
		  $this->session->set_flashdata('feedback_class', 'alert-success');
		  $this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		  redirect(base_url('dashboard/show_country_tour/'.$country_tour_id),'refresh');
	  }

	  // edit international country tour list
	public function edit_tour_country_list($country_tour_id)
	{
		$data['editCountryTList'] = $this->InternationalCModel->editInternationalCountryList($country_tour_id);
		$this->load->view('admin/pages/edit_international_country_list',$data);
	}

	public function update_country_tour_list($country_tour_id)
	{
		$this->form_validation->set_rules('c_tour_name','Country Name','required');
		$this->form_validation->set_rules('c_tour_duration','Duration','required');
		$this->form_validation->set_rules('c_itenary','Itenary','required');
		$this->form_validation->set_rules('c_inclusion_exclusion','Inclusion Exclusion','required');
		$this->form_validation->set_rules('c_tour_cost','Tour Cost','required');
		$this->form_validation->set_rules('c_tour_date','Tour Date','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('c_tour_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['c_tour_img'] = $img_path;
		}

		$data = $this->InternationalCModel->updateInternationalCountryList($country_tour_id,$post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'International Country Tour List Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_country_tour/' . $country_tour_id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_tour_country_list/' . $country_tour_id);
		}
	}

	/* ============================..//END INTERNATIONAL COUNTRY CATEGORY============================== */

	/* ============================../ bus Cruise and Cars ======================================= */

	// cruise

	public function add_cruise()
	{
		$this->load->view('admin/pages/add_cruise');
	}

	public function create_cruise()
	{
		$this->form_validation->set_rules('cruise_name','Cruise Name','required');
		$this->form_validation->set_rules('cruise_desc','Cruise Desc','required');
		$this->form_validation->set_rules('cruise_price','Cruise price','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('cruise_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['cruise_img'] = $img_path;

			$Cars = $this->Fleets->insertCruise($post);
			if ($Cars)
			{
				$this->session->set_flashdata('feedback', 'Cruise Insert SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect(base_url('dashboard/show_cruise'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('feedback', 'Failed to Insert Cruise');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect(base_url('dashboard/add_cruise'),'refresh');
			}
		}
		else
		{
			redirect(base_url('dashboard/add_cruise'),'refresh');
		}
	}

	public function show_cruise()
	{
		$cruiseList = $this->Fleets->getAllCruise();
		$this->load->view('admin/pages/show_cruise',compact('cruiseList'));
	}

	public function edit_cruise($id)
	{
		$editCruise = $this->Fleets->editCruise($id);
		$this->load->view('admin/pages/edit_cruise',compact('editCruise'));
	}

	public function update_cruise($id)
	{
		$this->form_validation->set_rules('cruise_name','Cruise Name','required');
		$this->form_validation->set_rules('cruise_desc','Cruise Desc','required');
		$this->form_validation->set_rules('cruise_price','Cruise price','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('cruise_img')) { // validation success
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['cruise_img'] = $img_path;
		}
		$data = $this->Fleets->updateCruise($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Cruise Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_cruise/' . $id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_cruise/' . $id);
		}
	}


	// car
	public function add_car()
	{
		$this->load->view('admin/pages/add_car');
	}

	public function create_car()
	{
		$this->form_validation->set_rules('car_name','Car Name','required');
		$this->form_validation->set_rules('car_desc','Car Desc','required');
		$this->form_validation->set_rules('car_price','Car price','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('car_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['car_img'] = $img_path;

			$Cars = $this->Fleets->insertCar($post);
			if ($Cars)
			{
				$this->session->set_flashdata('feedback', 'Car Insert SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect(base_url('dashboard/show_car'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('feedback', 'Failed to Insert Car');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect(base_url('dashboard/add_car'),'refresh');
			}
		}
		else
		{
			redirect(base_url('dashboard/add_car'),'refresh');
		}
	}

	public function show_car()
	{
		$carList = $this->Fleets->getAllCar();
		$this->load->view('admin/pages/show_car',compact('carList'));
	}

	public function edit_car($id)
	{
		$editcar = $this->Fleets->editCar($id);
		$this->load->view('admin/pages/edit_car',compact('editcar'));
	}

	public function update_car($id)
	{
		$this->form_validation->set_rules('car_name','Car Name','required');
		$this->form_validation->set_rules('car_desc','Car Desc','required');
		$this->form_validation->set_rules('car_price','Car price','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('car_img')) { // validation success
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['car_img'] = $img_path;
		}
		$data = $this->Fleets->updateCar($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Car Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_car/' . $id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_car/' . $id);
		}

	}

	public function delete_car($id)
	{
		$this->db->delete('car',['id'=>$id]);
		$this->session->set_flashdata('feedback', 'Car Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/show_car/' . $id);

	}

	// bus
	public function add_bus()
	{
		$this->load->view('admin/pages/add_bus');
	}
	public function create_bus()
	{
		$this->form_validation->set_rules('bus_name','Bus Name','required');
		$this->form_validation->set_rules('bus_desc','Bus Desc','required');
		$this->form_validation->set_rules('bus_price','Bus price','required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('bus_img'))
		{
			$post = $this->input->post();
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['bus_img'] = $img_path;

			$Bus = $this->Fleets->insertBus($post);
			if ($Bus)
			{
				$this->session->set_flashdata('feedback', 'Bus Insert SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				redirect(base_url('dashboard/show_bus'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('feedback', 'Failed to Insert Bus');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect(base_url('dashboard/add_bus'),'refresh');
			}
		}
		else
		{
			redirect(base_url('dashboard/add_bus'),'refresh');
		}
	}

	public function show_bus()
	{
		$busList = $this->Fleets->getAllBus();
		$this->load->view('admin/pages/show_bus',compact('busList'));
	}
	public function edit_bus($id)
	{
		$editBus = $this->Fleets->editBus($id);
		$this->load->view('admin/pages/edit_bus',compact('editBus'));
	}
	public function update_bus($id)
	{
		$this->form_validation->set_rules('bus_name','Bus Name','required');
		$this->form_validation->set_rules('bus_desc','Bus Desc','required');
		$this->form_validation->set_rules('bus_price','Bus price','required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('bus_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['bus_img'] = $img_path;
		}

		$data = $this->Fleets->updateBus($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Maharashtra Tour Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_bus/' . $id);

		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_bus/' . $id);
		}



	}
	public function delete_bus($id)
	{
		$this->db->delete('bus',['id'=>$id]);
		$this->session->set_flashdata('feedback', 'Bus Delete SuccessFully');
		$this->session->set_flashdata('feedback_class', 'alert-success');
		$this->session->set_flashdata('feedback_icon','<i class="fa fa-trash-o"></i>');
		redirect('dashboard/show_bus/' . $id);

	}


	/* ==============================..// end ========================================================== */

	/* -------------------change password ------------------------ */
	public function changePassword()
	{
		$this->load->view('admin/pages/changepass');
	}
	public function update_password()
	{
		$this->form_validation->set_rules('password','Old Password','required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('newpass','New Password','required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('confpassword','Confirm Password','required|min_length[6]|max_length[8]|matches[newpass]');

		if ($this->form_validation->run())
		{   //validation success
			$old_pass = $this->input->post('password');
			$new_pass = $this->input->post('newpass');
			$conf_pass = $this->input->post('confpassword');

			$this->load->model('AdminModel');
			$id = 1;
			$PassData = $this->AdminModel->changePass($id);

			if ($PassData->password == $old_pass)
			{  //macth password
				if ($new_pass == $conf_pass)
				{
					if ($this->AdminModel->updatePass($new_pass,$id))
					{
						$this->session->set_flashdata('feedback','Password Change Successfully Please Login');
						$this->session->set_flashdata('feedback_class','alert-success');
						$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
						redirect('dashboard/logout');
					}
					else
					{
						$this->session->set_flashdata('feedback','Password Update to Failed');
						$this->session->set_flashdata('feedback_class','alert-danger');
						$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
						redirect('dashboard/changePassword');
					}
				}
				else
				{
					$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
					$this->session->set_flashdata('feedback_class','alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/changePassword');
				}
			}
			else
			{  //
				$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/changePassword');
			}

		}
		else
		{  //validation failed
			$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/changePassword');
		}
	}

   /* -----------------end change password ------------------------ */




}
