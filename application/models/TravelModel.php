<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 22-04-2019
 * Time: 07:17 PM
 */
class TravelModel extends CI_Model
{
	private $table = 'travel_insurance';
	private $id = 'id';
	private $order = 'DESC';

	public function insertTravel($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

   public function getAllTravel()
   {
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
   }
  public function EditTravel($id)
  {
  	return $this->db->select('id,travel_desc,travel_rule,travel_img')
		     ->where(['id'=>$id])
		     ->get($this->table)->row();
  }

  public function UpdateTravelInsurance($id,$post)
  {
		return $this->db->where(['id'=>$id])
			     ->update($this->table,$post);
  }

  /* fetch data front end */

	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}

}
