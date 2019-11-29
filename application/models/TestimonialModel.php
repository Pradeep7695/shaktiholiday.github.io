<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 22-04-2019
 * Time: 03:31 PM
 */
class TestimonialModel extends CI_Model
{
	private $table = 'testimonial';
	private $id = 'id';
	private $order = 'DESC';

	public function insertTestimonial($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}
	public function getAllTestimonial()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}
	public function findTestimonial($id)
	{
			$qry = $this->db->select('id,client_name,client_img,review')
					 ->where(['id'=>$id])
				     ->get($this->table);
			return $qry->row();
	}
	public function updateTestimonial($id,$post)
	{
		return $this->db->where(['id'=>$id])
			     ->update($this->table,$post);
	}
	//fetch data to front end

	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	// count all data

	public function CountFeedback()
	{
		$data = $this->db->get($this->table);
		return $data->num_rows();
	}
}
