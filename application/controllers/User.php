<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('user/login');
	}

	public function Proses_Login()
	{
            $nis = $this->input->post('nis', true);
            $password = $this->input->post('password', true);
            $test = $this->m_user->proses_login($nis,$password);
            $hasil = count($test);
            if ($hasil > 0) {

                $data_session= [
                    'nisn' => $test->nisn,
                    'nis' => $test->nis,
                    'nama' => $test->nama,
                    'status' => login
                ];
                $this->session->set_userdata($data_session);
                redirect('user/home');

            }else{
                redirect('user');
                }
	}

	public function home()
	{
		if(empty($this->session->userdata('nis'))){
			redirect('user');
		}else{
			$nisn = $this->session->userdata('nisn');

            $data['pembayaran'] = $this->m_user->Home($nisn);

            for ($i=1; $i < 13; $i++) { 

                    $data['spp_tahun1'][]	= $this->m_user->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 1);
					$data['spp_tahun2'][]	= $this->m_user->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 2);
					$data['spp_tahun3'][]	= $this->m_user->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 3);
			}
            
            $this->load->view('user/home', $data);
	    }
	}

	public function Profile(){
            $nis = $this->session->userdata('nis');
            if(empty($nis)){
                redirect('user');
            }else{
                $data['profile'] = $this->m_user->Profile($nis);
                $this->load->view('user/profile_siswa', $data);
            }
        }

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('user');
	}
}