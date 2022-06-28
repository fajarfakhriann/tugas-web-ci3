<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
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

		$warga = $this->db->from('warga')->order_by('id', 'DESC')->get();
		$agama = $this->db->from('agama')->get();

		$data = [
			'title' => 'Data Warga',
			'warga' => $warga->result(),
			'agama' => $agama->result()
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('warga/index', $data);
		$this->load->view('layouts/footer');
	}

	public function tambah_data()
	{
		$agama = $this->db->from('agama')->where('status', true)->get();
		$data = [
			'title' => 'Tambah Data Warga',
			'agama' => $agama->result()
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('warga/form', $data);
		$this->load->view('layouts/footer');
	}

	public function insert()
	{
		$field = [
			'id_agama' => $this->input->post('id_agama'),
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		];

		$this->db->insert('warga', $field);

		$this->session->set_flashdata('success', 'Berhasil Menambah Data');

		return redirect(base_url('warga'));
	}

	public function edit($id = null)
	{
		$edit = $this->db->from('warga')->where('id', $id)->get()->row();

		$agama = $this->db->from('agama')->where('status', true)->get();


		$data = [
			'title' => 'Edit Data Warga',
			'warga' => $edit,
			'agama' => $agama->result()
		];
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('warga/form', $data);
		$this->load->view('layouts/footer');
	}

	public function update()
	{
		$id = $this->input->post('submit');
		$field = [
			'id_agama' => $this->input->post('id_agama'),
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		];

		$this->db->where('id', $id);
		$this->db->update('warga', $field);

		$this->session->set_flashdata('success', 'Berhasil Mengubah Data');

		return redirect(base_url('warga'));
	}

	public function hapus($id = null)
	{
		$this->db->where('id', $id);
		$this->db->delete('warga');

		$this->session->set_flashdata('success', 'Berhasil Menghapus Data');

		return redirect(base_url('warga'));
	}
}