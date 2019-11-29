<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 18-04-2019
 * Time: 07:07 PM
 */
class SliderModel extends CI_Model
{
	private $table = 'slider';
	private $id = 'id';
	private $order = 'DESC';

	public function insertSlider($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert($this->table , $post);
	}

	/* -------------img video slider  ------------ */

	public function insertVideoSlider($post)
	{
		$post['created_at']=date('Y-m-d');
		return $this->db->insert('video_slider',$post);
	}

	public function getAllVideoSlider()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get('video_slider')->result();
	}

	/* fetch data to front  */
	public function fetchVideoDataToFront()
	{
		$this->db->order_by($this->id,$this->order);
		$this->db->limit(1);
		return $this->db->get('video_slider')->result();
	}

 /* ------------------end video --------------------------- */

	public function getAllSlider()
	{
		$this->db->order_by($this->id , $this->order);
		return $this->db->get($this->table)->result();
	}

	public function fetchSingleRow()
	{
		$this->db->order_by($this->id , $this->order);
		return $this->db->get('slider')->result();
	}

	public function findSlider($id)
	{
		$qry = $this->db->select(['id','slider_title','slider_text','slider_img','created_at'])
			     ->where(['id'=>$id])
			     ->get($this->table);
		return $qry->row();
	}

	public function updateSlider($id,$post)
	{

		return $this->db->where(['id'=>$id])
			     ->update($this->table,$post);
	}

}
