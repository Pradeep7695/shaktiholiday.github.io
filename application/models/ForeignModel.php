<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 22-04-2019
 * Time: 06:24 PM
 */
class ForeignModel extends CI_Model
{
	private $table = 'foreignexchange';
	private $id = 'id';
	private $order = 'DESC';

	public function insertForeEx($post)
	{
		$post['created_at']=date('Y-m-d');
         return $this->db->insert($this->table,$post);
	}

	public function getAllForeignEx()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function findForeignId($id)
	{
		$qry = $this->db->select(['*'])
			     ->where(['id'=>$id])
			     ->get($this->table);

		return $qry->row();

	}
	public function update_foreignExchange($id,$post)
	{
			 return $this->db->where(['id'=>$id])
				     ->update($this->table,$post);

	}

	/* fetch data to front end */
	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
