<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Reservasi extends CI_Controller {

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

		$this->load->model('M_Reservasi');
	}

	public function createReservasi()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'date' => $this->input->post('date'),
			'people' => $this->input->post('people'),
			'request' => $this->input->post('request'),
			'status' => 1,
		);

		$this->M_Reservasi->insert($data);
		redirect (base_url('/index.php/C_SaungSunda/pesanReservasi/'));
	}

	public function konfirmasiReservasi($id){
		$this->M_Reservasi->changeStatusKonfirmasi($id);
		redirect (base_url('/index.php/C_SaungSunda/admin#ongoing'));
	}

	public function batalkanReservasi($id){
		$this->M_Reservasi->delete($id);
		redirect (base_url('/index.php/C_SaungSunda/admin#ongoing'));
	}

	public function closeReservasi($id){
		$this->M_Reservasi->changeStatusSelesai($id);
		redirect (base_url('/index.php/C_SaungSunda/admin#ongoing'));
	}
}