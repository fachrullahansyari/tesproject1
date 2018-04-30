<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {	

	function simpan_daftar(){
		$up['No_rekam_medis']=$this->input->post('no');
		
		$id['No_rekam_medis']=$this->input->post('no');	
		
		$data = $this->db->get_where("tb_pasien",$id);
		if($data->num_rows()>0){
			echo $this->session->set_flashdata('result', 'Nomer Rekam Medis sudah ada');
			redirect('home');	
		}else{
			// $this->db->insert("tb_pasien",$up);		
			echo $this->session->set_flashdata('result', 'Nomer Rekam Medis bisa di pakai');
			redirect('home');	
		}
	}

	function simpan_daftar1(){
		$up['No_rekam_medis']=$this->input->post('no');
		$up['nama']=$this->input->post('nama');
		$up['alamat']=$this->input->post('alamat');
		
		$id['No_rekam_medis']=$this->input->post('no');	
		
		$data = $this->db->get_where("tb_pasien",$id);
		if($data->num_rows()>0){
			echo $this->session->set_flashdata('result', 'Nomer Rekam Medis sudah ada');
			redirect('home');	
		}else{
			$this->db->insert("tb_pasien",$up);		
			echo $this->session->set_flashdata('result', 'Data Tersimpan');
			redirect('home/pertanyaan/'.$this->input->post('no').'/1');	
		}
	}

	function pertanyaan($id,$id1){
		return $this->db->query("SELECT * from tb_pertanyaan where No=$id1");
	}
 
	function jum_pertanyaan(){
		return $this->db->query("SELECT count(No) No from tb_pertanyaan");
	}    	

	function simpan_pertanyaan(){
		$up['id_pasien']=$this->input->post('id');
		$up['id_pertanyaan']=$this->input->post('id1');
		$up['nilai']=$this->input->post('nilai');
		
		$id['id']=$this->input->post('no');	
		
		$data = $this->db->get_where("tb_survey",$id);
		if($data->num_rows()>0){
			redirect('home');	
		}else{
			$this->db->insert("tb_survey",$up);		
			$id1 = $this->input->post('id1')+1;
			$id2 = $this->db->query("SELECT count(No) no from tb_pertanyaan")->row('no')+1;
			if($id1==$id2){
			redirect('home/hasil/'.$this->input->post('id'));	

			}else{
			redirect('home/pertanyaan/'.$this->input->post('id').'/'.$id1);	

			}
		}
	}

	function hasil($id){
		return $this->db->query("SELECT *, sum(nilai) nilaii from tb_survey s join tb_pasien p on p.no_rekam_medis=s.id_pasien where s.id_pasien=$id");
	}
}

