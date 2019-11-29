<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 18-04-2019
 * Time: 04:43 PM
 */
class ImageGalleryModel extends CI_Model
{
	private $table  = 'img_gallery';
	private $id   	=  'id';
	private $order 	=   'DESC';

	public function insertImageGallery($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table,$post);
	}

	public function fetchAllImg()
	{
		$this->db->order_by($this->id , $this->order);
		return $this->db->get($this->table)->result();
	}
	public function findImg($id)
	{
		$qry = $this->db->select(['id','img_name','t_img','created_at'])
						->where(['id'=>$id])
			   			->get($this->table);
		return $qry->row();
	}
	public function updateImg($id,$post)
	{
		return $this->db->where(['id'=>$id])
				->update($this->table,$post);
	}

	public function FetchImgGallery()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->table)->result();
	}

	//count img
	public function CountAllImage()
	{
		$data = $this->db->get($this->table);
		return $data->num_rows();
	}

}
