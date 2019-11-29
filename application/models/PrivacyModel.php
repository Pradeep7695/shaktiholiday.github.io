<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 23-04-2019
 * Time: 06:20 PM
 */
class PrivacyModel extends CI_Model
{
	private $table = 'privacy_policy';
	private $id =  'id';
	private $order = 'DESC';

	public function insertPrivacy($post)
	{	$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function getAllPrivacy()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function editPrivacyPolicy($id)
	{
		return $this->db->select('id,policy_desc,created_at')
			     ->where(['id'=>$id])
			     ->get($this->table)->row();
	}

	public function updatePrivacy($id,$post)
	{
  	   return $this->db->where(['id'=>$id])
		        ->update($this->table,$post);
	}

	/* ----privacy fetch data to front---  */
	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
