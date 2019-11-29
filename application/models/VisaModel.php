<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 22-04-2019
 * Time: 05:15 PM
 */
class VisaModel extends CI_Model
{
	private $table = 'visa';
	private $id = 'id';
	private $order = 'DESC';

	public function insertVisa($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function getAllVisa()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	public function findVisaId($id)
	{
		 $qry = $this->db->select('id,visa_desc,visa_rule,visa_img,created_at')
			         ->where(['id'=>$id])
			         ->get($this->table);
		 return $qry->row();
	}
	public function updateVisa($id,$post)
	{
		return $this->db->where(['id'=>$id])
			          ->update($this->table,$post);

	}
	/* fetch data to front end */

	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		/*$this->db->limit(1);*/
		return $this->db->get($this->table)->result();
	}

}
