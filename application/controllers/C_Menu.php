<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Menu extends CI_Controller {

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

	 public function __construct(){
		parent::__construct();        
		$this->load->database();

		$this->load->model('M_Menu');
	}

	public function addMenu(){

		$nama =$this->input->post('nama');
		$harga =$this->input->post('harga');
		$jenis =$this->input->post('jenis');
		$deskripsi =$this->input->post('deskripsi');
		
		$foto = $_FILES['foto'];
		if($foto=''){}
		else {
			$config['upload_path']='./resources/img';
			$config['allowed_types']='jpg|jpeg|png|gif';
		
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}
			else {
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'=>$nama,
			'harga'=>$harga,
			'jenis'=>$jenis,
			'deskripsi'=>$deskripsi,
			'foto'=>$foto
		);

		$this->M_Menu->insert($data);
		redirect (base_url('/index.php/C_SaungSunda/admin#menu'));
	}

	public function updateMenu($id) {
		$foto = $_FILES['foto'];
		
		if ($foto['name'] !== '') {
			$config['upload_path'] = './resources/img';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('foto')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		} else {
			// Menetapkan foto ke nilai sebelumnya jika tidak ada foto baru yang diunggah
			$existingData = $this->M_Menu->getDataById($id);
			$foto = $existingData->foto;
		}
	
		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'jenis' => $this->input->post('jenis'),
			'deskripsi' => $this->input->post('deskripsi'),
			'foto' => $foto
		);
	
		$this->M_Menu->update($data, $id);
		redirect(base_url('/index.php/C_SaungSunda/admin#menu'));
	}

	public function deleteMenu($id){
		$this->M_Menu->delete($id);
		redirect (base_url('/index.php/C_SaungSunda/admin#menu'));
	}
}