<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembayaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembayaran');
	} 

	public function Data_Pembayaran()
	{
		$nis = $this->input->post('nis', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$tb = $this->input->post('tb', true);
		$tgl = $this->input->post('tgl', true);

		$data_cari = array('siswa.nis' => $nis,
						   'siswa.nama' => $nama,
						   'pembayaran.tahun_bayar' => $tb,
						   'pembayaran.tgl_bayar' => $tgl);

		if ($this->session->userdata('level') == 'petugas') {

			
			$data['pembayaran'] = $this->m_pembayaran->join_table($data_cari);
			$this->load->view('petugas');
			$this->load->view('pembayaran/datapembayara', $data);

		}elseif ($this->session->userdata('level') == 'admin') {
			
			$data['pembayaran'] = $this->m_pembayaran->join_table($data_cari);
			$this->load->view('admin/admin');
			$this->load->view('pembayaran/datapembayara', $data);
		}else{
			redirect('c_login');
		}
	}

	public function pembayaran_tuntas()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('pembayaran/datapembayara',$data);
		}
		if ($this->session->userdata('level') == 'petugas') {
			$this->load->view('pembayaran/datapembayara',$data);
		}
	}

	public function cari_siswa()
	{
		$nis = $this->input->post('nis', true);
		redirect('C_pembayaran/Bayar_SPP/'.$nis);
	}

	public function Bayar_SPP($nis)
	{
		$data['siswa'] = $this->m_pembayaran->proses_cari($nis);

		$test = count($data);
		if ($test > 0) {
			for ($i=1; $i < 13 ; $i++) { 
				 
				 $data['ambil1'][] = $this->m_pembayaran->data_pembayaran($i, $tahun = 1, $data['siswa']->nisn);
				 $data['ambil2'][] = $this->m_pembayaran->data_pembayaran($i, $tahun = 2, $data['siswa']->nisn);
				 $data['ambil3'][] = $this->m_pembayaran->data_pembayaran($i, $tahun = 3, $data['siswa']->nisn);
			}

				$data['numrows_1'] = $this->m_pembayaran->hitung_pembayaran($data['siswa']->nisn, $id_spp = 1);
				$data['numrows_2'] = $this->m_pembayaran->hitung_pembayaran($data['siswa']->nisn, $id_spp = 2);
				$data['numrows_3'] = $this->m_pembayaran->hitung_pembayaran($data['siswa']->nisn, $id_spp = 3);

			if ($this->session->userdata('level') == 'petugas') {
				$this->load->view('petugas');
				$this->load->view('pembayaran/pembayaran', $data);
			}elseif ($this->session->userdata('level') == 'admin') {
				$this->load->view('admin/admin');
				$this->load->view('pembayaran/pembayaran', $data);
			}else{
				redirect('c_login');
			}

		}else{
			echo 'NIS yang anda Masukan tidak ditemukan';
		}
	}

	public function Proses_Bayar()
	{
		$id_petugas = $this->session->userdata('id_petugas');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$bulan = $this->input->post('bulan');
		$id_spp = $this->input->post('id_spp');

		$max_bulan_bayar = $this->m_pembayaran->hitung_pembayaran($nisn, $id_spp);
		$ambil_total_bayar = $this->db->get_where('spp', array('id_spp' => $id_spp))->row();
		$harga_perbulan = $ambil_total_bayar->nominal/12;

		if ($id_spp == 1) {
			if ($max_bulan_bayar+1 == $bulan) {
				$data = array('id_petugas' => $id_petugas,
				  			  'nisn' => $nisn,
							  'tgl_bayar' => date('y-m-d'),
							  'bulan_bayar' => $bulan,
							  'tahun_bayar' => $id_spp,
							  'id_spp' => $id_spp,
							  'jumlah_bayar' => $harga_perbulan);

				$data_update = array('id_spp' => '1');
				$update_siswa = $this->m_pembayaran->update_siswa($nisn, $data_update);

				$bayar = $this->db->insert('pembayaran', $data);
				if ($bayar) {
					redirect('C_pembayaran/Bayar_SPP/' .$nis);
				}else{
					echo 'Gagal Melakukan Pembayaran';
				}
			}else{
				echo 'Pembayaran SPP tidak Boleh Acak';
			}
		}elseif ($id_spp == 2) {
			 if($max_bulan_bayar+1 == $bulan){ 
                $data = array('id_petugas' 	=> $id_petugas,
                            'nisn'			=> $nisn,
                            'tgl_bayar' 	=> date('y-m-d'),
                            'bulan_bayar'	=> $bulan,
                            'tahun_bayar'	=> $id_spp,
                            'id_spp'		=> $id_spp,
                            'jumlah_bayar'	=> $harga_perbulan);
                            

                $data_update  = ['id_spp' => '2'];
                $update_siswa = $this->m_pembayaran->update_siswa($nisn, $data_update);

                $bayar = $this->db->insert('pembayaran', $data);
                if($bayar){
                    redirect('C_pembayaran/Bayar_SPP/'.$nis);
                }else{
                    echo('Gagal melakukan Pembayaran!');
                }
            }else{
                echo "Pembayaran SPP tidak boleh acak!";
            }
		}elseif ($id_spp == 3) {

			if ($max_bulan_bayar+1 == $bulan) {
				$data = array('id_petugas' => $id_petugas,
				  			  'nisn' => $nisn,
							  'tgl_bayar' => date('y-m-d'),
							  'bulan_bayar' => $bulan,
							  'tahun_bayar' => $id_spp,
							  'id_spp' => $id_spp,
							  'jumlah_bayar' => $harga_perbulan);

				$data_update = array('id_spp' => '3');
				$update_siswa = $this->m_pembayaran->update_siswa($nisn, $data_update);

				$bayar = $this->db->insert('pembayaran', $data);
				if ($bayar) {
					redirect('C_pembayaran/Bayar_SPP/' .$nis);
				}else{
					echo 'Gagal Melakukan Pembayaran';
				}
			}else{
				echo 'Pembayaran SPP tidak Boleh Acak';
			}
		}
	}
	
}