<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
		
		$this->load->helper(array('url','download'));
		$this->load->model('M_Guru');
		$this->load->model('M_Mapel');
		$this->load->model('M_Ruang');
		$this->load->model('M_Kelas');
		
	}
	public function index()
	{	
		if($this->session->userdata('logged_in')==false) redirect('admin/index');
        $data['aside']='dashboard_bar';
        $data['dosen']= $this->M_Guru->total_guru();
        $data['mapel']= $this->M_Mapel->total_mapel();
        $data['ruang']= $this->M_Ruang->total_ruang();
        $data['kelas']= $this->M_Kelas->total_kelas();
        $this->load->view('head',$data);   
        $this->load->view('dashboard');   
        $this->load->view('footer');   
	}
	
	function logout()
	{
    	$this->session->sess_destroy();
    	redirect('/');
	}
	
	
}
?>