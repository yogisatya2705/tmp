<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infot extends CI_Model
{

	private $table = "hotspot";

	public function getAll()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi1', 'type' => 'informasi'))->result();
	}

	public function getAll2()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi2', 'type' => 'informasi'))->result();
	}
	public function getAll3()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi3', 'type' => 'informasi'))->result();
	}
	public function getAll4()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi4', 'type' => 'informasi'))->result();
	}
	public function getAll5()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi5', 'type' => 'informasi'))->result();
	}
	public function getAll6()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi6', 'type' => 'informasi'))->result();
	}
	public function getAll7()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi7', 'type' => 'informasi'))->result();
	}

	public function getAll8()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi8', 'type' => 'informasi'))->result();
	}
	public function getAll9()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi9', 'type' => 'informasi'))->result();
	}
	public function getAll10()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi10', 'type' => 'informasi'))->result();
	}
	public function getAll11()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi11', 'type' => 'informasi'))->result();
	}
	public function getAll12()
	{
		return $this->db->get_where($this->table, array('lokasi' => 'lokasi612', 'type' => 'informasi'))->result();
	}
}
