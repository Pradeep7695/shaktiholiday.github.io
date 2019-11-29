<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 23-04-2019
 * Time: 06:18 PM
 */
class TermConModel extends CI_Model
{
	private $table = 'term';
	private $id = 'id';
	private $order = 'DESC';

	public function insertTermCondition($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function editTermCo($id)
	{
		return $this->db->select('id,term_desc,created_at')
			  			->where(['id'=>$id])
			            ->get($this->table)->row();

	}
	public function updateTermCon($id,$post)
	{
	return	$this->db->where(['id'=>$id])
			     ->update($this->table,$post);
	}

	public function getAllTermCondition()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

   //fetch data to front
	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
