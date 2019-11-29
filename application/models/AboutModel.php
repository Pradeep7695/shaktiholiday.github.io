<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 24-04-2019
 * Time: 11:58 AM
 */
class AboutModel extends CI_Model
{
	private $table = 'about_us';
	private $id =  'id';
	private $order = 'DESC';

	public function insertAbout($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}
	public function getAllAbout()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function editAboutUs($id)
	{
	return	$this->db->select('*')
				 ->where(['id'=>$id])
 			     ->get($this->table)->row();
	}
	public function updateAboutUs($id,$post)
	{
      return $this->db->where(['id'=>$id])
		              ->update($this->table,$post);
	}

	/* fetch data to front end  */
	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}
}
