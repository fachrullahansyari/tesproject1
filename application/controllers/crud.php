<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('crudmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_tescrud'] = $this->crudmodel->tampil_data()->result();
			$this->load->view('crudview',$data);	
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');

		$data = array(
			'nama' => $nama,
			'nama1' => $nama1,
			'nama2' => $nama2
			);

		$this->crudmodel->input_data($data, 'tb_tescrud');
		redirect('crud/index');
	}

	function hapus($id_crud){
		$where = array('id_crud' => $id_crud);
		$this->crudmodel->hapus_data($where, 'tb_tescrud');
		redirect('crud/index');
	}

	function edit($id_crud){
		$where = array('id_crud' => $id_crud);
		$data['tb_tescrud'] = $this->crudmodel->edit_data($where, 'tb_tescrud')->result();
		$this->load->view('crudedit', $data);
	}

	function update(){
		$id_crud = $this->input->post('id_crud');
		$nama = $this->input->post('nama');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');

		$data = array(
			'nama' => $nama,
			'nama1' => $nama1,
			'nama2' => $nama2
			);

		$where = array(
			'id_crud' => $id_crud
			);

		$this->crudmodel->update_data($where,$data,'tb_tescrud');
		redirect('crud/index');
	}


}
