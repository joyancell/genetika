<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (isset($_SESSION['email'])) {
			redirect('dashboard');
		}
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();
		$this->load->model("M_Guru");
		$this->load->model("M_User");
		$this->load->model("M_Ruang");
		$this->load->model("M_Admin");
		$this->load->library('pagination');
		$this->load->helper("date");
		
		$this->load->helper(array('url','download'));
		
		
	}
	public function index()
	{
        $this->load->view('login');   
	}
	
	function login(){
		if($this->session->userdata('logged_in')==TRUE) redirect('dashboard');
		
		$email = $_POST['email'];
		$password = md5($_POST['password']);
        
        $cek=$this->M_User->cek_login($email,$password);
		if($cek==true){
			foreach($cek as $a);
				$email=$a->email;
				$password=$a->password;
				$nama=$a->nama;
				$id_admin=$a->kode;
				$this->session->set_userdata(array(
								'email'=>$email,
								'nama'=>$nama,
								'password'=>$password,
								'id'=>$id_admin,
								'logged_in'=>TRUE
								));
				echo "Selamat Datang $nama";
			
        }
		else{
            echo "Email atau password salah";
			
        }
		
		
	}
	
	function logout()
	{
    	$this->session->sess_destroy();
    	redirect('admin');
	}
	
	public function index2()
	{	
		if($this->session->userdata('logged_in')==false) redirect('admin/index');
		
		$data['aside']='admin_bar';
        $this->load->view('head',$data);   
        $this->load->view('admin');   
        $this->load->view('footer');   
	}
	
	public function cek_admin($id){
		$result = $this->M_Admin->cek_admin($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	public function cek_admin_awal(){
		$result = $this->M_Admin->cek_admin_awal();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	public function simpan_admin(){
		
	        $nama= $this->input->post('nama');
	        $email= $this->input->post('email');
	        $password= md5($this->input->post('password'));
			
	        $result= $this->M_Admin->simpan_admin($email,$nama,$password);
	        echo json_encode($result);
		}
		
	public function detail_admin(){
		$result = $this->M_Admin->detail_admin();
		echo json_encode($result);
	}
	
	public function semua_admin(){
		$result = $this->M_Admin->semua_admin();
		echo json_encode($result);
	}
		
	public function simpan_edit($id){
		$result = $this->M_Admin->edit_admin($id);
		echo json_encode($result);
	}

	public function hapus_admin($id){

			$delete = $this->M_Admin->hapus_admin($id);			
			echo json_encode($delete);
	}

	public function lupa_password()
		{
			$this->load->view('lupa_password');
		}	
	
	private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'joy.ancell30@gmail.com',
            'smtp_pass' => 'hybxhgjjbayceevj',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $img = 'https://koperasikreditswastisari.files.wordpress.com/2018/02/cropped-11703025_855360677873422_5935726456927383028_n.jpg';
        $this->email->initialize($config);

        $this->email->from('joy.ancell30@gmail.com', 'Kopdit Swastisari');
        $this->email->to('joy.ancell021@gmil.com');

        $this->email->subject('Reset Password');
            $this->email->message('click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=123">Reset Password</a>');

        if ($this->email->send()) {
            return true;
            // echo "ok";
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    function kuntul()
	{
		 $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'joy.ancell30@gmail.com',  // Email gmail
            'smtp_pass'   => 'badin223461',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'smtp_timeout'   => 200,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        // $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com');

        // Email penerima
        $this->email->to('joy.ancell021@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/kirim-email-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            // echo 'Error! email tidak dapat dikirim.';
            echo $this->email->print_debugger();
        }
	}	

    function send_email($attributes) {

    $this->load->library('email');

    $this->email->set_newline("\r\n");

    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'joy.ancell30@gmail.com';
    $config['smtp_from_name'] = 'FROM NAME';
    $config['smtp_pass'] = 'hybxhgjjbayceevj';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'html';                       

    $this->email->initialize($config);

    $this->email->from($config['smtp_user'], $config['smtp_from_name']);
    $this->email->to($attributes['to']);
    $this->email->cc($attributes['cc']);
    $this->email->bcc($attributes['cc']);
    $this->email->subject($attributes['subject']);

    $this->email->message($attributes['message']);

    if($this->email->send()) {
        return true;        
    } else {
        return false;
    }       
}
}
?>