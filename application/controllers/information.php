<?php
defined('BASEPATH') or exit('No direct script access allowed');

class information extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}
		$this->load->model('info', 'info');
		$this->load->library('pagination');
	}

	public function index()
	{

		$this->load->database();
		$jumlah_data = $this->info->getAll();
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'information/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['title'] = 'Information';
		$data['user'] = $this->info->data($config['per_page'], $from);
		$this->load->view('templates/admin/_header', $data);
		$this->load->view('information/information');
		$this->load->view('templates/admin/_footer');
	}

	function get_sub_category()
	{
		$category_id = $this->input->post('id', TRUE);
		$data = $this->info->get_sub_category($category_id)->result();
		echo json_encode($data);
	}

	function category()
	{
		$id = $this->input->post('id', TRUE);
		$data = $this->info->category($id)->result();
		echo json_encode($data);
	}

	public function add()
	{
		$data['title'] = 'Add Information';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['category'] = $this->info->get_category()->result();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('information/add');
		$this->load->view('templates/admin/_footer');
	}

	function edit($id)
	{
		$data['title'] = 'Edit Information';
		$data['siswa'] = $this->info->getById($id);
		$this->load->view('templates/admin/_header', $data);
		$this->load->view('information/edit');
		$this->load->view('templates/admin/_footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('isi_post', 'Isi_post', 'required');
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['isi_post'] = $this->input->post('isi_post');
			$this->info->update($data, $id);
			redirect('information');
		} else {
			$id = $this->input->post('id');
			$data['siswa'] = $this->info->getById($id);
			$this->load->view('templates/admin/_header', $data);
			$this->load->view('information/information');
			$this->load->view('templates/admin/_footer');
		}
	}

	public function save()
	{
		$this->form_validation->set_rules('hotspot_id', 'Hotspot_id', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('isi_post', 'Isi_post', 'required');
		if ($this->form_validation->run() == true) {
			$data['hotspot_id'] = $this->input->post('hotspot_id');
			$data['nama'] = $this->input->post('nama');
			$data['isi_post'] = $this->input->post('isi_post');

			$this->info->save($data);
			redirect('information');
		} else {
			$this->load->view('templates/admin/_header');
			$this->load->view('information/editn');
			$this->load->view('templates/admin/_footer');
		}
	}
}
