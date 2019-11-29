<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 22-04-2019
 * Time: 12:36 PM
 */
class ContactUsModel extends CI_Model
{
	private $table  = 'contact_us';
	private  $id = 'id';
	private $order = 'DESC';
	public function insertContactUs($post)
	{
		$post['created_at']=date('Y-m-d');
		$this->db->insert($this->table,$post);
	}

	public function getAllContactUs()
	{
		$this->db->order_by($this->id , $this->order);
	     return $this->db->get($this->table)->result();
	}
	public function findContactId($id)
	{
		$qry = $this->db->select('id , contactno, email, address, created_at')
						->where(['id'=>$id])
			            ->get($this->table);
		return $qry->row();
	}
	public function UpdateContactUs($id,$post)
	{
		return $this->db->where(['id'=>$id])
			  	 ->update($this->table,$post);
	}
/* --fetch data to front end  */
	public function fetchSingleRow()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
