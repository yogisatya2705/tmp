<?php
defined('BASEPATH') or exit('No direct script access allowed');

class collection extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelcrud');
		$this->load->library('upload');
		$this->load->library('pagination');
	}

	// fungsi untuk mengambil data
	public function index()
	{
		$this->load->database();
		$jumlah_data = $this->modelcrud->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'collection/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
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
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['users'] = $this->modelcrud->data($config['per_page'], $from);
		$data['title'] = 'collection';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin/_header', $data);
		$this->load->view('collection/collection');
		$this->load->view('templates/admin/_footer');
	}

	// untuk menampilkan halaman tambah data
	public function tambah()
	{
		return $this->load->view('tambah_data');
	}

	// untuk memasukan data ke database
	public function insertdata()
	{
		$name   = $this->input->post('name');

		// get foto
		$config['upload_path'] = './assets/picture';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480000';  //2MB max
		$config['max_width'] = '44800000'; // pixel
		$config['max_height'] = '44800000'; // pixel
		$config['file_name'] = $_FILES['fotopost']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['fotopost']['name'])) {
			if ($this->upload->do_upload('fotopost')) {
				$foto = $this->upload->data();
				$data = array(
					'name'       => $name,
					'foto'       => $foto['file_name'],
				);
				$this->modelcrud->insert($data);
				redirect('collection');
			} else {
				die("gagal upload");
			}
		} else {
			echo "tidak masuk";
			redirect('collection');
		}
	}

	// delete
	public function deletedata($id, $foto)
	{
		$path = './assets/picture/';
		@unlink($path . $foto);

		$where = array('id' => $id);
		$this->modelcrud->delete($where);
		return redirect('collection');
	}

	// edit
	public function edit($id)
	{
		$kondisi = array('id' => $id);
		$data['title'] = 'information';

		$data['data'] = $this->modelcrud->get_by_id($kondisi);
		$this->load->view('templates/admin/_header', $data);
		$this->load->view('collection/info');
		$this->load->view('templates/admin/_footer');
	}

	// update
	public function updatedata()
	{
		$id   = $this->input->post('id');
		$name = $this->input->post('name');
		$alamat = $this->input->post('alamat');

		$path = './assets/picture/';

		$kondisi = array('id' => $id);

		// get foto
		$config['upload_path'] = './assets/picture';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['fotopost']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['fotopost']['name'])) {
			if ($this->upload->do_upload('fotopost')) {
				$foto = $this->upload->data();
				$data = array(
					'name'       => $name,
					'foto'       => $foto['file_name'],
					'alamat'     => $alamat,
				);
				// hapus foto pada direktori
				@unlink($path . $this->input->post('filelama'));

				$this->modelcrud->update($data, $kondisi);
				redirect('');
			} else {
				die("gagal update");
			}
		} else {
			echo "tidak masuk";
		}
	}
} // end class
