<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('MPembayaran');
	}

	public function Data_Pembayaran(){
		
		$nis = $this->input->post('nis', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$tahun_bayar = $this->input->post('tahun_bayar', true);
		$tgl_bayar = $this->input->post('tgl_bayar', true);

		$dataCari = ['siswa.nis' => $nis,
					 'siswa.nama' => $nama,
					 'pembayaran.tahun_bayar' => $tahun_bayar,
					 'pembayaran.tgl_bayar' => $tgl_bayar];

		 	if($this->session->userdata('level') == 'petugas'){
		 			$this->load->view('petugas');
		 			$data['pembayaran'] = $this->MPembayaran->joinTable($dataCari);
		 			$this->load->view('pembayaran/DataPembayaran', $data);
		 		}else if($this->session->userdata('level') == 'admin'){

		 			$data['pembayaran'] = $this->MPembayaran->joinTable($dataCari);

		 			$this->load->view('admin/admin');
		 			$this->load->view('pembayaran/DataPembayaran', $data);
		 		}else{
		 			redirect('c_login');
		 		}
	}

	public function pembayaran_tuntas() {
		if ($this->session->userdata('level') == 'petugas') {
			$this->load->view('petugas');
			$this->load->view('pembayaran/datapembayara', $data);
		}
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('admin/admin');
			$this->load->view('pembayaran/datapembayara', $data);
		}
	}

	public function cari(){

		if ($this->session->userdata('level') == 'admin') {
			
			$this->load->view('admin/home');
			$this->load->view('petugas/homePetugas');
		}else if ($this->session->userdata('level') == 'petugas') {
			
			$this->load->view('petugas/home');
			$this->load->view('petugas/homePetugas');
		}else{
			$this->load->view('admin/login');
		}
	}
	public function cari_siswa(){
		
		$nis = $this->input->post('nis', true);
		redirect('Pembayaran/Bayar_SPP/'.$nis);
	}

	public function Bayar_SPP($nis){
		
		$data['siswa'] = $this->MPembayaran->cariDataSiswa($nis);

		$cek = count($data);

		if ($cek > 0) {

			for($i=1; $i < 13; $i++){

				$data['ambil1'][] = $this->MPembayaran->dataPembayaran($i, $tahun = 1, $data['siswa']->nisn);
				$data['ambil2'][] = $this->MPembayaran->dataPembayaran($i, $tahun = 2, $data['siswa']->nisn);
				$data['ambil3'][] = $this->MPembayaran->dataPembayaran($i, $tahun = 3, $data['siswa']->nisn);	
			}
				$data['numrows_1'] = $this->MPembayaran->hitungPembayaran($data['siswa']->nisn, $id_spp = 1);
				$data['numrows_2'] = $this->MPembayaran->hitungPembayaran($data['siswa']->nisn, $id_spp = 2);
				$data['numrows_3'] = $this->MPembayaran->hitungPembayaran($data['siswa']->nisn, $id_spp = 3);

				
			if ($this->session->userdata('level') == 'admin') {
				
				$this->load->view('admin/admin');
				$this->load->view('pembayaran/Pembayaran', $data);
			}else if ($this->session->userdata('level') == 'petugas') {
				
				$this->load->view('petugas');
				$this->load->view('pembayaran/Pembayaran', $data);
			}else{
				redirect('c_login');
			}
	}
}

	public function Proses_Bayar(){
		
		$id_petugas = $this->session->userdata('id_petugas');
		$nisn  		= $this->input->post('nisn');
		$nis        = $this->input->post('nis');
		$bulan 		= $this->input->post('bulan');
		$id_spp 	= $this->input->post('id_spp');

		$max_bulan_bayar = $this->MPembayaran->hitungPembayaran($nisn, $id_spp);
		$ambil_total_bayar = $this->db->get_where('spp', ['id_spp' => $id_spp])->row();
		$harga_perbulan = $ambil_total_bayar->nominal/12;

		if ($id_spp == 1) {
			if ($max_bulan_bayar+1 == $bulan) {
				$data = ['id_petugas' => $id_petugas,
						 'nisn' => $nisn,
						 'tgl_bayar' => date('y-m-d'),
						 'bulan_bayar' => $bulan,
						 'tahun_bayar' => $id_spp,
						 ' id_spp' => $id_spp,
						 'jumlah_bayar' => $harga_perbulan];

				$dataUpdate = ['id_spp' => '1'];
				$updateSiswa = $this->MPembayaran->updateSiswa($nisn, $dataUpdate);

				$bayar = $this->db->insert('pembayaran', $data);
				if ($bayar) {
					redirect('Pembayaran/bayarSpp/'.$nis);
				}else{
					echo('Gagal melakukan Pembayaran!');
				}
			}else{
					echo "Pembayaran SPP tidak boleh diacak!";
				}
			}else if($id_spp == 2) {
				
				if ($max_bulan_bayar+1 == $bulan) {
					$data = ['id_petugas' => $id_petugas,
						 'nisn' => $nisn,
						 'tgl_bayar' => date('y-m-d'),
						 'bulan_bayar' => $bulan,
						 'tahun_bayar' => $id_spp,
						 ' id_spp' => $id_spp,
						 'jumlah_bayar' => $harga_perbulan];

				$dataUpdate = ['id_spp' => '2'];
				$updateSiswa = $this->MPembayaran->updateSiswa($nisn, $dataUpdate);

				$bayar = $this->db->insert('pembayaran', $data);
                if($bayar){
                    redirect('Pembayaran/bayarSpp/'.$nis);
                }else{
                    echo('Gagal melakukan Pembayaran!');
                }
            }else{
                echo "Pembayaran SPP tidak boleh acak!";
            }

		 	}else if($id_spp == 3) {

		 		if ($max_bulan_bayar+1 == $bulan) {
		 			$data = ['id_petugas' => $id_petugas,
		 				 'nisn' => $nisn,
		 				 'tgl_bayar' => date('y-m-d'),
		 				 'bulan_bayar' => $bulan,
		 				 'tahun_bayar' => $id_spp,
		 				 ' id_spp' => $id_spp,
		 				 'jumlah_bayar' => $harga_perbulan];
		 		$dataUpdate = ['id_spp' => '3'];
		 		$updateSiswa = $this->MPembayaran->updateSiswa($nisn, $dataUpdate);

		 		$bayar = $this->db->insert('pembayaran', $data);
                 if($bayar){
                     redirect('Pembayaran/bayarSpp/'.$nis);
                 }else{
                     echo('Gagal melakukan Pembayaran!');
                 }
             }else{
               echo "Pembayaran SPP tidak boleh acak!";

		 	}
		 }

	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['pembayaran'] = $this->MPembayaran->dataTampil();
		$this->load->view('pembayaran/laporan_pembayaran', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pembayaran_spp.pdf", array('Attachment' => 0));

	}

}
