<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Model
{
	private $table = "informasi_hotspot";

	function get_category()
	{
		$query = $this->db->get_where('hotspot', array('type' => 'informasi'));
		return $query;
	}

	function get_sub_category($category_id)
	{
		$query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));
		return $query;
	}


	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->num_rows();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id" => $id])->row();
	}

	public function update($data, $id)
	{
		return $this->db->update($this->table, $data, array('id' => $id));
	}

	function data($number, $offset)
	{
		return $query = $this->db->get($this->table, $number, $offset)->result();
	}

	// function jumlah_data()
	// {
	// 	return $this->db->get($this->table)->num_rows();
	// }
}
