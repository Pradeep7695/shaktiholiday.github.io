<?php
/**
 * Created by PhpStorm.
 * User: Lord Krishna
 * Date: 15-Oct-19
 * Time: 3:36 PM
 */
class InternationalCModel extends CI_Model
{
	public function insertINCCategory($post)
	{
		$post['created_at'] = date('Y-m-d');
		$qry = $this->db->insert('international_country_category',$post);
		$insert_id = $this->db->insert_id();
		$this->session->set_userdata('in_country_id',$insert_id);
		return $qry;
	}

	public function getAllCategoryList()
	{
		$this->db->order_by('in_country_id','DESC');
	    return $this->db->select('*')
		                ->get('international_country_category')->result();
	}

	// insert country tour list

	public function insertInterTourList($post)
	{
		$post['created_at']  = date('Y-m-d');
		return $this->db->insert('country_tour_package',$post);
	}

	//get all international tour
	public function getAllInternationalTour()
	{
	 return	$this->db->select('*')
			     ->from('country_tour_package as ctp')
			     ->join('international_country_category as icp','ctp.in_country_id = icp.in_country_id','inner')
			     ->get()->result();
	}

	//fetch international country list on front page

	public function fetchInternationalCountryList()
	{
		$this->db->order_by('in_country_id','DESC');
		return $this->db->get('international_country_category')->result();
	}

	// fetch international country tour list front site
	public function getAllInternationalTourList($in_country_id)
	{
		$this->db->order_by('in_country_id','DESC');
		return $this->db->where(['in_country_id'=>$in_country_id])
		          ->get('country_tour_package')->result();

	}

	// get single data of international tour details
	public function getSingleTourDetails($country_tour_id)
	{
	 return $this->db->where(['country_tour_id'=>$country_tour_id])
			         ->order_by('country_tour_id','DESC')
			         ->get('country_tour_package')->row();
	}

	//edit international tour category
	public function editInternationalCategory($in_country_id)
	{
		return $this->db->select('*')
			            ->where(['in_country_id'=>$in_country_id])
			            ->get('international_country_category')->row();
	}

	// update international tour
	public function updateINCCategory($in_country_id,$post)
	{
		return $this->db->where(['in_country_id'=>$in_country_id])
			     		->update('international_country_category',$post);
	}

	// edit international country tour list
	public function editInternationalCountryList($country_tour_id)
	{
		return $this->db->select('*')
						->where(['country_tour_id'=>$country_tour_id])
						->get('country_tour_package')->row();
	}

	// update international country tour list
	public function updateInternationalCountryList($country_tour_id,$post)
	{
		return $this->db->where(['country_tour_id'=>$country_tour_id])
						->update('country_tour_package',$post);
	}

	//count all data
	public function CountAllDataInter()
	{
		$qry = $this->db->get('country_tour_package');
		return $qry->num_rows();
	}
}
