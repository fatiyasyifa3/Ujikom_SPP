<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_petugas');
	}

	public function admin()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('admin/admin');
			$this->load->view('profile/home');
		}else{
			redirect('c_login');
		}
	}

	public function petugas_home()
	{
		if ($this->session->userdata('level') == 'petugas') {
			$this->load->view('petugas');
			$this->load->view('profile/home');
		}else{
			redirect('c_login');
		}
	}

	public function profile()
	{
		$id_petugas = $this->session->userdata('id_petugas');

		if($this->session->userdata('level') == 'admin'){

			$data['profile'] = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row();

            $this->load->view('admin/admin');
            $this->load->view('profile/profile_petugas', $data);

		}else if($this->session->userdata('level') == 'petugas'){

            $data['profile'] = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row();
            $this->load->view('petugas');
            $this->load->view('profile/profile_petugas', $data);
		}else{
			redirect('C_Petugas');
		}
		
	}

	public function bayar()
	{
		if ($this->session->userdata('level') == 'petugas') {
			$this->load->view('petugas');
			$this->load->view('pembayaran/cari_data');
		}else{
			redirect('c_login');
		}
		
	}

	public function home()
	{
		if($this->session->userdata('level') == 'admin'){

            $this->load->view('admin/admin');
            $this->load->view('profile/home');
           

		}else if($this->session->userdata('level') == 'petugas'){
            
            $this->load->view('petugas');
            $this->load->view('profile/home');
     
        }
		
	}

}