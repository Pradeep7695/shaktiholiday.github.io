<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 18-04-2019
 * Time: 12:29 PM
 */
class TourPackageModel extends  CI_Model
{

	private $table = 'tourpackage';
	private $id = 'id';
	private $order = 'DESC';

	public function insertTourPackage($post)
	{
		$post['created_at']=date('Y-m-d');
         return $this->db->insert($this->table,$post);
	}

	/* --fetch data to front end-- */
	public function fetchTourPackage()
	{
         $this->db->order_by($this->id , $this->order);
        return $this->db->get($this->table)->result();
	}
	public function findTourId($id)
	{
		$qry = $this->db->select(['id','trip_name','package_price','trip_day','trip_desc','trip_img','created_at'])
			            ->where(['id'=>$id])
			             ->get($this->table);
		return  $qry->row();
	}

	public function updateTour($id , $post)
	{
		return $this->db->where(['id'=>$id])
				->update($this->table,$post);
	}

	/* ---fetch data to details page- */
	public function fetchDataToDetails($id)
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->where(['id'=>$id])
		                ->get($this->table)->result();
	}

}
