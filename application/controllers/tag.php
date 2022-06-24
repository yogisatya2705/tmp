<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tag extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('tag');
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}

		$this->load->model('infot', 'infot');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['title'] = 'Admin';
		$data['lokasi1'] = $this->infot->getAll();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi1');
		$this->load->view('templates/admin/_footer');
	}

	public function lokasi2()
	{
		$data['title'] = 'Admin';
		$data['lokasi2'] = $this->infot->getAll2();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi2');
		$this->load->view('templates/footer/2_footer');
	}

	public function lokasi3()
	{
		$data['title'] = 'Admin';
		$data['lokasi3'] = $this->infot->getAll3();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi3');
		$this->load->view('templates/footer/3_footer');
	}

	public function lokasi4()
	{
		$data['title'] = 'Admin';
		$data['lokasi4'] = $this->infot->getAll4();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi4');
		$this->load->view('templates/footer/4_footer');
	}

	public function lokasi5()
	{
		$data['title'] = 'Admin';
		$data['lokasi5'] = $this->infot->getAll5();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi5');
		$this->load->view('templates/footer/5_footer');
	}

	public function lokasi6()
	{
		$data['title'] = 'Admin';
		$data['lokasi6'] = $this->infot->getAll6();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi6');
		$this->load->view('templates/footer/6_footer');
	}

	public function lokasi7()
	{
		$data['title'] = 'Admin';
		$data['lokasi7'] = $this->infot->getAll7();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi7');
		$this->load->view('templates/footer/7_footer');
	}

	public function lokasi8()
	{
		$data['title'] = 'Admin';
		$data['lokasi8'] = $this->infot->getAll8();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi8');
		$this->load->view('templates/footer/8_footer');
	}

	public function lokasi9()
	{
		$data['title'] = 'Admin';
		$data['lokasi9'] = $this->infot->getAll9();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi9');
		$this->load->view('templates/footer/9_footer');
	}

	public function lokasi10()
	{
		$data['title'] = 'Admin';
		$data['lokasi10'] = $this->infot->getAll10();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi10');
		$this->load->view('templates/footer/10_footer');
	}

	public function lokasi11()
	{
		$data['title'] = 'Admin';
		$data['lokasi11'] = $this->infot->getAll11();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi11');
		$this->load->view('templates/footer/11_footer');
	}

	public function lokasi12()
	{
		$data['title'] = 'Admin';

		$data['lokasi12'] = $this->infot->getAll12();
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('tag/lokasi12');
		$this->load->view('templates/footer/12_footer');
	}

	public function lokasi_1()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi1',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag');
		}
	}

	public function lokasi_2()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi2',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi2');
		}
	}

	public function lokasi_3()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi3',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi3');
		}
	}


	public function lokasi_4()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi4',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi4');
		}
	}

	public function lokasi_5()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi5',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi5');
		}
	}

	public function lokasi_6()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi6',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi6');
		}
	}


	public function lokasi_7()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi7',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi7');
		}
	}

	public function lokasi_8()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi8',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi8');
		}
	}

	public function lokasi_9()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi9',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/loaksi9');
		}
	}


	public function lokasi_10()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi10',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/lokasi10');
		}
	}

	public function lokasi_11()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi11',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/loaksi11');
		}
	}

	public function lokasi_12()
	{
		$this->form_validation->set_rules('pitch', 'Pitch', 'required|trim');
		$this->form_validation->set_rules('yaw', 'Yaw', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|trim');
		$this->form_validation->set_rules('link', 'Link',);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header');
			$this->load->view('tag/tag');
			$this->load->view('templates/user_footer');
		} else {
			$data = [
				'lokasi' => 'lokasi12',
				'pitch' => htmlspecialchars($this->input->post('pitch', true)),
				'yaw' => htmlspecialchars($this->input->post('yaw', true)),
				'type' => htmlspecialchars($this->input->post('type', true)),
				'link' => htmlspecialchars($this->input->post('link', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),

			];

			$this->db->insert('hotspot', $data);
			redirect('tag/loaksi12');
		}
	}
}
