<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 08-04-2019
 * Time: 04:54 PM
 */
class Home extends  CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SliderModel');
		$this->load->model('PopularTourModel');
		$this->load->model('ContactUsModel');
		$this->load->model('TestimonialModel');
	}

	public  function index()
	 {
		$data['slider']      = $this->SliderModel->fetchSingleRow();
	 	$data['popularTour'] = $this->PopularTourModel->fetchSingleRow();
	 	$data['videoSlider'] = $this->SliderModel->fetchVideoDataToFront();
	 	$this->load->view('front/pages/front_index',$data);
	 }
	 public function visa()
	 {
	 	$this->load->model('VisaModel');
	 	$data['visa'] = $this->VisaModel->fetchDataToFront();
	 	$this->load->view('front/pages/visa',$data);
	 }

	 public function online_booking()
	 {
	 	$this->load->view('front/pages/online-booking');
	 }
	 public function car_on_rent()
	 {
	 	$this->load->model('CarModel');
	 	$data['car'] = $this->CarModel->fetchDataToFront();
	 	$this->load->view('front/pages/car-on-rent',$data);
	 }
	 public function foreign_exchange()
	 {
	 	$this->load->model('ForeignModel');
	 	$data['foreign'] = $this->ForeignModel->fetchDataToFront();
	 	$this->load->view('front/pages/foreign_exchange',$data);
	 }
	 public function travel_insurance()
	 {
	 	$this->load->model('TravelModel');
	 	$data['travelIns'] = $this->TravelModel->fetchDataToFront();
	 	$this->load->view('front/pages/travel_insurance',$data);
	 }
	 public function domestic_international()
	 {
	 	$this->load->model('TourPackageModel');
	 	$data['tourPackage'] = $this->TourPackageModel->fetchTourPackage();
	 	$this->load->view('front/pages/domestic_international',$data);
	 }

	 public function gallery()
	 {
	 	 $this->load->model('ImageGalleryModel');
		 $data['imgGallery'] = $this->ImageGalleryModel->FetchImgGallery();
	 	$this->load->view('front/pages/gallery',$data);
	 }
	 public function contact_us()
	 {
	 	$data['contact'] = $this->ContactUsModel->fetchSingleRow();
	 	$this->load->view('front/pages/contact_us',$data);
	 }
	 public function about_us()
	 {
	 	$this->load->model('AboutModel');
	 	$data['about'] = $this->AboutModel->fetchDataToFront();
	 	$this->load->view('front/pages/about_us',$data);
	 }

	 public function testimonial()
	{
		$data['testimonial'] = $this->TestimonialModel->fetchDataToFront();
		$this->load->view('front/pages/testimonial',$data);
	}

	public function package()
	{
		$this->load->view('front/pages/package');
	}
	public function term_condition()
	{
		$this->load->model('TermConModel');
		$data['terms'] = $this->TermConModel->fetchDataToFront();
		$this->load->view('front/pages/term_condition',$data);
	}
	public function privacy_policy()
	{
		$this->load->model('PrivacyModel');
		$data['privacy'] = $this->PrivacyModel->fetchDataToFront();
		$this->load->view('front/pages/privacy_policy',$data);
	}

	public function details($id)
	{
		$this->load->model('TourPackageModel');
		$data['tourPackage'] = $this->TourPackageModel->fetchDataToDetails($id);

		$this->load->view('front/pages/details',$data);
	}
	
/* -----------------domestic and internatioanl package ---------------- */

	public function domestic_package()
	{
		$this->load->model('DomesticModel');
		$data['domestic'] = $this->DomesticModel->fetchDomestic();
		$this->load->view('front/pages/domestic_package',$data);
	}

	public function domestic_package_details($id)
	{
		$this->load->model('DomesticModel');
		$data['domesticDetails'] = $this->DomesticModel->fetchToDetails($id);
		$this->load->view('front/pages/domestic_details',$data);
	}

	/*public function international_package()
	{
		$this->load->model('InternationalModel');
		$data['international'] = $this->InternationalModel->fetchDataInter();
		$this->load->view('front/pages/international_package',$data);
	}

	public function international_package_details($id)
	{
		$this->load->model('InternationalModel');
		$data['internationalDetails'] = $this->InternationalModel->fetchToDetails($id);
		$this->load->view('front/pages/international_details',$data);
	}*/


	/* -------------..//end domestic and internatioanl package -------------------- */

	/* --------------------maharashtra tour ------------------- */

	public function maharashtra_tour()
	{
		$this->load->model('MaharashtraModel');
		$data['maharashtraData'] = $this->MaharashtraModel->fetchMaharashtraTour();
		$this->load->view('front/pages/maharashtra_tour',$data);
	}

	public function maharashtra_tour_details($mh_id)
	{
		$this->load->model('MaharashtraModel');
		$data['MaharashtraTourDetails'] = $this->MaharashtraModel->fetchSingleData($mh_id);
		$this->load->view('front/pages/maharashtra-tour-details',$data);
	}

	/* -------------on day tour ----------- */

	public function one_day_tour()
	{
		$this->load->model('OneDayTourModel');
		$data['OneDayTourData'] = $this->OneDayTourModel->fetchAllDataFront();
		$this->load->view('front/pages/one_day_tour',$data);
	}

	public function one_day_tour_details($id)
	{
		$this->load->model('OneDayTourModel');
		$data['OneDayTourDataDetails'] = $this->OneDayTourModel->fetchAllDataDetails($id);
		$this->load->view('front/pages/tour_details',$data);
	}

	/* -----------------domestic state tour -------------------- */
	public function state_domestic_tour()
	{
		$this->load->model('DomesticStateModel');
		$data['stateCategory'] = $this->DomesticStateModel->fetchDataFront();
	    $this->load->view('front/pages/domestic_state_tour',$data);
	}

	public function state_tour_list($state_tour_id)
	{
		$this->load->model('DomesticStateModel');
		$data['stateTourList'] = $this->DomesticStateModel->fetchStateTourList($state_tour_id);
		$this->load->view('front/pages/state_tour_list',$data);
	}

	// single state tour details
	public function single_tour_details($domestic_tour_id)
	{
		$this->load->model('DomesticStateModel');
		$data['stateTourDetails'] = $this->DomesticStateModel->getSingleTourDetails($domestic_tour_id);
		$this->load->view('front/pages/state_tour_details',$data);
	}

	/* -------------------..//end domestic state tour ----------- */

	/* -----------------international tour --------------------------- */

	public function international_package()
	{
		$this->load->model('InternationalCModel');
		$internationalCountryCategory  = $this->InternationalCModel->fetchInternationalCountryList();
		$this->load->view('front/pages/international_package',compact('internationalCountryCategory'));
	}

	public function international_tour_list($in_country_id)
	{
		$this->load->model('InternationalCModel');
		$data['international_tour_list'] = $this->InternationalCModel->getAllInternationalTourList($in_country_id);
		$this->load->view('front/pages/international_tour_list',$data);
	}
	public function international_tour_details($country_tour_id)
	{
		$this->load->model('InternationalCModel');
		$data['internationalSingleData'] = $this->InternationalCModel->getSingleTourDetails($country_tour_id);
		$this->load->view('front/pages/international_tour_details',$data);
	}


	/* ------------------..//end international tour category ------------- */

	/* ---------------------Fleets ----------------------- */
	public function buses()
	{
		$BusList = $this->Fleets->FetchBuses();
		$this->load->view('front/pages/buses',compact('BusList'));
	}

	public function cars()
	{
		$CarList = $this->Fleets->FetchCars();
		$this->load->view('front/pages/car',compact('CarList'));
	}

	public function cruise()
	{
		$CruiseList = $this->Fleets->FetchCruise();
		$this->load->view('front/pages/cruise',compact('CruiseList'));
	}

	/* -----------------..//end Fleets ----------------------- */


  /* ------------------b2b Distributor Portal -------------- */

	public function distributor_portal()
	{
		$this->load->view('front/pages/b2b_distributor_portal');
	}

	/* -------------career ------------ */

	public function career()
	{
		$this->load->view('front/pages/career');
	}


}
