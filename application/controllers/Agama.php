<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agama extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.comwelcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("/"));
		}
	}
	public function index()
	{

		$agama = $this->db->from('agama')->get();

		$data = [
			'title' => 'Data Agama',
			'agama' => $agama->result()
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('agama/index', $data);
		$this->load->view('layouts/footer');
	}

	public function tambah_data()
	{

		$data = [
			'title' => 'Tambah Data Agamaa',
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('agama/form', $data);
		$this->load->view('layouts/footer');
	}

	public function insert()
	{
		$field = [
			'id_agama' => $this->input->post('id_agama'),
			'agama' => $this->input->post('agama'),

			'status' => $this->input->post('status'),
		];

		$this->db->insert('agama', $field);

		$this->session->set_flashdata('success', 'Berhasil Menambah Data');

		return redirect(base_url('agama'));
	}

	public function edit($id = null)
	{
		$edit = $this->db->from('agama')->where('id_agama', $id)->get()->row();


		$data = [
			'title' => 'Edit Data Agama',
			'agama' => $edit
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('agama/form', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$id = $this->input->post('submit');
		$field = [
			'agama' => $this->input->post('agama'),
			'status' => $this->input->post('status')
		];

		$this->db->where('id_agama', $id);
		$this->db->update('agama', $field);

		$this->session->set_flashdata('success', 'Berhasil Mengubah Data');

		return redirect(base_url('agama'));
	}

	public function delete($id = null)
	{
		$this->db->where('id_agama', $id);
		$this->db->delete('agama');

		$this->db->where('id_agama', $id);
		$this->db->update('warga', ['id_agama' => 'NULL']);


		$this->session->set_flashdata('success', 'Berhasil Menghapus Data');

		return redirect(base_url('agama'));
	}
}