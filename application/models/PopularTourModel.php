<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 17-04-2019
 * Time: 04:17 PM
 */
class PopularTourModel extends CI_Model
{
	private $table = 'popular_tour';
	private $id   = 'id';
	private $order = 'DESC';

 	public function insertPopularTour($post)
	{
		$post['created_at']=date('Y-m-d');
		$qry = $this->db->insert('popular_tour',$post);
		return $qry;
	}

	public function showPopularTour()
	{
		$this->db->order_by($this->id  , $this->order);
		 return $this->db->get($this->table)->result();
	}

	public function fetchSingleRow()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}


	public function findPopularTour($id)
	{
		$qry = $this->db->select(['id','package_name','url_link','package_price','package_img','created_at'])
					 ->where(['id'=>$id])
				     ->get('popular_tour');

		return $qry->row();
	}

	public function updatePopularTour($id,$data)
	{
       return $this->db->where(['id'=>$id])
			     ->update('popular_tour',$data);

	}

	//count all data
	public function CountPopularTour()
	{
		$qry = $this->db->get($this->table);
		return $qry->num_rows();
	}

}
