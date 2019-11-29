<?php
/**
 * Created by PhpStorm.
 * User: Pradeep
 * Date: 05-May-19
 * Time: 1:32 PM
 */
class InternationalModel extends CI_Model
{
	private $table = 'international_package';
	private $id  = 'id';
	private $order = 'DESC';

	public function insertInternational($post)
	{
		$post['created_at']  = date('y-m-d');
 		return $this->db->insert($this->table,$post);
	}

	public function getAllInternational()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function edit_international($id)
	{
        return $this->db->select('*')
			        ->where(['id'=>$id])
			        ->get($this->table)->row();
	}

	 public function updateInternational($id,$post)
	 {
        return $this->db->where(['id'=>$id])
			      ->update($this->table,$post);
	 }

	 /* fetch data to front end */

	public function fetchDataInter()
	{
		$this->db->order_by($this->id , $this->order);
		return $this->db->get($this->table)->result();
	}

	 /* fetch data to details  */

     public function fetchToDetails($id)
	 {
		 $this->db->order_by($this->id,$this->order);
		 $this->db->limit(1);
		 return $this->db->where(['id'=>$id])
			 ->get($this->table)->result();
	 }

	 //count data
	public function CountInternationalData()
	{
		$qry = $this->db->get($this->table);
		return $qry->num_rows();
	}

}
