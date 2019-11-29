<?php
/**
 * Created by PhpStorm.
 * User: Pradeep
 * Date: 05-May-19
 * Time: 1:32 PM
 */
class DomesticModel extends CI_Model
{
	private $table = 'domestic_package';
	private $id = 'id';
	private $order = 'DESC';

  public function insertDomestic($post)
  {
  	$post['created_at']  = date('y-m-d');
  	 return $this->db->insert($this->table,$post);
  }

  public function getAllDomestic()
  {
  	$this->db->order_by($this->id,$this->order);
  	return $this->db->get($this->table)->result();
  }

  public function editDomestic($id)
  {
  	  return $this->db->select('*')
		              ->where(['id'=>$id])
		              ->get($this->table)->row();
  }

  public function updateDomestic($id,$post)
  {
	 return	$this->db->where(['id'=>$id])
			     ->update($this->table,$post);
  }

  /* fetch data to front */

	 public function fetchDomestic()
	 {
		 $this->db->order_by($this->id , $this->order);
		 return $this->db->get($this->table)->result();
	 }

	 /* --fetch data to details page  */

    public function fetchToDetails($id)
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->where(['id'=>$id])
			->get($this->table)->result();
	}

	 //count all data
	public function CountAllDataDomestic()
	{
		$qry = $this->db->get($this->table);
		return $qry->num_rows();
	}
}
