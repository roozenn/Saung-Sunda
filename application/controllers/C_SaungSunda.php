<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_SaungSunda extends CI_Controller {

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
		$this->load->model('M_Menu');
	}

	public function index()
	{
		$listMakanan = $this->M_Menu->getMakanan();
		$listMinuman = $this->M_Menu->getMinuman();

		$this->load->view('templates/Header');
		$this->load->view('templates/Navbar');	
		$this->load->view('V_Home', compact('listMakanan', 'listMinuman'));
		$this->load->view('templates/Footer');
	}

	public function reservasi()
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navbar2');	
		$this->load->view('V_Reservasi');
		$this->load->view('templates/Footer');
	}

	public function pesanReservasi()
	{
		$this->load->view('templates/Header');
		$this->load->view('V_PesanReservasi');
	}
 
	public function login()
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navbar2');	
		$this->load->view('V_Login');
		$this->load->view('templates/FooterAdmin');
	}

	public function admin()
	{
		$listOnGoingReservasi = $this->M_Reservasi->getOnGoingReservasi();
		$listDoneReservasi = $this->M_Reservasi->getDoneReservasi();

		$listMakanan = $this->M_Menu->getMakanan();
		$listMinuman = $this->M_Menu->getMinuman();

		$this->load->view('templates/Header');
		$this->load->view('templates/NavbarAdmin');	
		$this->load->view('V_Admin', compact('listOnGoingReservasi', 'listDoneReservasi', 'listMakanan', 'listMinuman'));
		$this->load->view('templates/FooterAdmin');
	}
}