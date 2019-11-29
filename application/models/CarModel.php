<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 23-04-2019
 * Time: 02:32 PM
 */
class CarModel extends CI_Model
{
	private $table = 'car_rent';
	private $id = 'id';
	private $order = 'DESC';

    public function insertCar($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}
	public function getAllCar()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}
	public function EditCarId($id)
	{
		return $this->db->select('id,car_desc,car_rule,car_img')
		         ->where(['id'=>$id])
				 ->get($this->table)->row();

	}
	public function UpdateCar($id,$post)
	{
		return $this->db->where(['id'=>$id])
			      ->update($this->table,$post);
	}

	/* fetch data to front */
	public function fetchDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get($this->table)->result();
	}


}
