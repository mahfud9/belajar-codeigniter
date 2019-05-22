<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about()
	{
	// fungsi untuk me-load view about.php
		$this->load->view('about');
	}

	public function contact()
	{
	// fungsi untuk me-load view contact.php
		$this->load->view('contact');
	}
}

class Login extends CI_Controller {
    public function index() { 
        $this->load->view(‘halaman_login’); 
    } 

    public function proses_login() { 
        $user = $this->input->post(‘username’); 
        $pass = $this->input->post(‘password’); 

        $login = $this->user->cek_user($user, $pass); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url()); 
        } else { 
            // login gagal 
            $this->session->set_flashdata(‘gagal’, ‘Username atau Password Salah!’); 
            redirect(base_url(‘login’)); 
        } 
    } 
}