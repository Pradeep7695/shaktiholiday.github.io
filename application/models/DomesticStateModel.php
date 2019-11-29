<?php
/**
 * Created by PhpStorm.
 * User: Lord Krishna
 * Date: 03-Oct-19
 * Time: 1:23 PM
 */
class DomesticStateModel extends CI_Model
{
	// create category
	public function insertDomesticStateCategory($post)
	{
		$post['created_at'] = date('Y-m-d');
		$qry =  $this->db->insert('state_tour_category',$post);
		$insert_id = $this->db->insert_id();
		$this->session->set_userdata('state_tour_id',$insert_id);
		return $qry;
	}

	public function showDomesticCategory()
	{
		$this->db->order_by('state_tour_id','DESC');
		return $this->db->get('state_tour_category')->result();
	}

	//fetch state category on front end
     public function fetchDataFront()
	 {
		 $this->db->order_by('state_tour_id','DESC');
		 return $this->db->get('state_tour_category')->result();
	 }

	// insert domestic tour in state category

	public function insertDomesticTour($post)
	{
		$post['created_at']  = date('Y-m-d');
		//$post['state_tour_id'] =  $this->session->userdata('state_tour_id');
		return	$this->db->insert('domestic_tour_state',$post);
	}

	// domestic state data
	public function getAllStateData()
	{
		  $qry  = $this->db->query('SELECT * FROM domestic_tour_state , state_tour_category WHERE state_tour_category.state_tour_id = domestic_tour_state.state_tour_id');
         return $qry->result();
	}

	// fetch single tour of by state
	public function fetchStateTourList($state_tour_id)
	{
		return $this->db->select('*')
			            ->where(['state_tour_id'=>$state_tour_id])
						->order_by('state_tour_id','DESC')
						->get('domestic_tour_state')->result();
	}

	// get single tour details of state tour
	public function getSingleTourDetails($domestic_tour_id)
	{
		return $this->db->select('*')
			            ->where(['domestic_tour_id'=>$domestic_tour_id])
			            ->get('domestic_tour_state')->row();

	}


	// edit domestic category
	public function editStateCategory($state_tour_id)
	{
		return $this->db->select('*')
						 ->where(['state_tour_id'=>$state_tour_id])
						 ->get('state_tour_category')->row();
	}

	  //update domestic category
	public function updateDomesticTour($state_tour_id, $post)
	{
		return $this->db->where(['state_tour_id'=>$state_tour_id])
			            ->update('state_tour_category',$post);
	}

	// edit state tour list
	public function editStateTour($domestic_tour_id)
	{
		return $this->db->select('*')
			            ->where(['domestic_tour_id'=>$domestic_tour_id])
			            ->get('domestic_tour_state')->row();
	}

	public function updateStateTour($domestic_tour_id, $post)
	{
		return $this->db->where(['domestic_tour_id'=>$domestic_tour_id])
			            ->update('domestic_tour_state',$post);
	}


	//count all data
	public function CountAllDataDomestic()
	{
		$qry = $this->db->get('domestic_tour_state');
		return $qry->num_rows();
	}


}
