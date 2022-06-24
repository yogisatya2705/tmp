<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Pengunjung
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Pengunjung extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));

		//load model
		$this->load->model('ajaxmodal_model', '', true);
	}

	public function index()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi1');
	}

	public function lokasi2()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi2');
	}

	public function lokasi3()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi3');
	}

	public function lokasi4()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi4');
	}

	public function lokasi5()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi5');
	}

	public function lokasi6()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi6');
	}

	public function lokasi7()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi7');
	}

	public function lokasi8()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi8');
	}

	public function lokasi9()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi9');
	}

	public function lokasi10()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi10');
	}

	public function lokasi11()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi11');
	}

	public function lokasi12()
	{
		$this->tmp->view('templates/pengunjung/template', 'pengunjung/lokasi12');
	}



	public function get_hotspot($lokasi)
	{
		$this->db->select('*');
		$this->db->from('hotspot');
		$this->db->where('lokasi="' . $lokasi . '"');
		$query = $this->db->get();
		$hotspot = $query->result();

		echo json_encode($hotspot);
	}

	public function get_hotspot2()
	{
		$this->db->select('*');
		$this->db->from('hotspot');
		$query = $this->db->get();
		$hotspot = $query->result();

		echo json_encode($hotspot);
	}

	public function informasi_hotspot()
	{
		$id = $this->input->post('id');
		// $informasi = $this->main->get_where('informasi_hotspot', ['id' => $id]);
		$informasi = $this->db->where('hotspot_id', $id)->get('informasi_hotspot')->row_array();;
		echo json_encode($informasi);
	}

	public function koleksi()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		$koleksi = $query->result();

		echo json_encode($koleksi);
	}

	function ambilData()
	{
		$data = $this->db->getData('users');
		echo json_encode($data);
	}
}


/* End of file Pengunjung.php */
/* Location: ./application/controllers/Pengunjung.php */
