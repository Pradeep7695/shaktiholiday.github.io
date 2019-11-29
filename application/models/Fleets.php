<?php
/**
 * Created by PhpStorm.
 * User: Lord Krishna
 * Date: 01-Nov-19
 * Time: 2:59 PM
 */
class Fleets extends CI_Model
{
	/* -------------------------car --------------------------- */
	// insert car
   public function insertCar($post)
   {
   	  $post['created_at'] = date('Y-m-d');
   	  return $this->db->insert('car',$post);
   }

   //get all car
   public function getAllCar()
   {
   	  return $this->db->get('car')->result();
   }
   // edit
	public function editCar($id)
	{
		return $this->db->select('*')
			            ->where(['id'=>$id])
			             ->get('car')->row();
	}

	// update car
	public function updateCar($id,$post)
	{
		return $this->db->where(['id'=>$id])
			            ->update('car',$post);
	}

	// fetch car data to front
	public function FetchCars()
	{
		return $this->db->order_by('id','DESC')
			           ->get('car')->result();
	}

	/* -------------------bus ---------------------------- */

	public function insertBus($post)
	{
		$post['created_at'] = date('Y-m-d');
		return $this->db->insert('bus',$post);
	}
	// get all bus
	public function getAllBus()
	{
		return $this->db->get('bus')->result();
	}

	// edit
	public function editBus($id)
	{
		return $this->db->select('*')
			            ->where(['id'=>$id])
			            ->get('bus')->row();
	}
	// update
	public function updateBus($id, $post)
	{
		 return $this->db->where(['id'=>$id])
			             ->update('bus',$post);
	}

	// fetch data to front
	public function FetchBuses()
	{
		return $this->db->order_by('id','DESC')
		                ->get('bus')->result();
	}

	/* -------------------cruise ------------------------------- */

	public  function insertCruise($post)
	{
		$post['created_at'] = date('Y-m-d');
		return $this->db->insert('cruise',$post);
	}
	// get all cruise
	public function getAllCruise()
	{
		return $this->db->get('cruise')->result();
	}

	// edit cruise
	public function EditCruise($id)
	{
		return $this->db->select('*')
			           ->where(['id'=>$id])
			           ->get('cruise')->row();
	}

	public function updateCruise($id, $post)
	{
		return $this->db->where(['id'=>$id])
			            ->update('cruise',$post);
	}

	// fetch car data to front
	public function FetchCruise()
	{
		return $this->db->order_by('id','DESC')
			->get('cruise')->result();
	}
}
