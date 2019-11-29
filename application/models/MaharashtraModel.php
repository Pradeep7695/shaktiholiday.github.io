<?php
/**
 * Created by PhpStorm.
 * User: Lord Krishna
 * Date: 28-Sep-19
 * Time: 3:04 PM
 */
class MaharashtraModel extends CI_Model
{
	private $table = 'maharashtra-tour';
	private $id = 'mh_id';
	private $order = 'DESC';

	public function insertMaharashtraTour($post)
	{
		$post['created_at'] = date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function getAllDataMaharashtra()
	{
		return $this->db->select('*')
			            ->get($this->table)->result();
	}

	//edit
	public function editMaharashtraTour($md_id)
	{
	return	$this->db->select('*')
			     ->where(['mh_id'=>$md_id])
			     ->get($this->table)->row();
	}

	//update
	public function updateMaharashtaTour($mh_id,$post)
	{
		return $this->db->where(['mh_id'=>$mh_id])
			           ->update($this->table,$post);
	}

	//fetch data to front end

	public function fetchMaharashtraTour()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	//single data details
    public function fetchSingleData($mh_id)
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->where(['mh_id'=>$mh_id])
			            ->get($this->table)->result();

	}

	//count all data
	public function CountMhData()
	{
		$data  = $this->db->get($this->table);
		return $data->num_rows();
	}

}
