<?php
/**
 * Created by PhpStorm.
 * User: Lord Krishna
 * Date: 01-Oct-19
 * Time: 12:01 PM
 */
class OneDayTourModel extends CI_Model
{
	private $table = 'one_day_tour';
	private $id = 'id';
	private $order = 'DESC';

	public function insertOneDayTour($post)
	{
		return $this->db->insert($this->table, $post);
	}

	//get all data in table

	public function getAllData()
	{
	return	$this->db->select('*')
		     	     ->get($this->table)->result();
	}

	public function editOneDayTour($id)
	{
     return	$this->db->select('*')
			         ->where(['id'=>$id])
			         ->get($this->table)->row();

	}

	public function updateOneDayTour($id,$post)
	{
	return 	$this->db->where(['id'=>$id])
		             ->update($this->table,$post);
	}

	//fetch data to front end

	public function fetchAllDataFront()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	// fetch single data to front end

	public function fetchAllDataDetails($id)
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->where(['id'=>$id])
			            ->get($this->table)->result();
	}

	//count data
	public function CountOneDayTour()
	{
		$data = $this->db->get($this->table);
		return $data->num_rows();
	}


}
