<?php 
class Datatraining2 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin2');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	function nampil(){
		$data['datatraining2'] = $this->m_admin2->tampildatatraining()->result();
		$this->load->view('v_admindt/table-basicdengankotak',$data, array('error' => ' ' ));
	}
	function tambah_aksilayak(){
		$dir = "gambar/hasil/data_trainingdengankotak/layakangkut/";
		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false){
					$cek=explode(".", $file);
					if ($cek[1]=="jpg") {
						$this->load->library('image_lib');
						$config['image_library']='gd2';
						$config['source_image']='./gambar/hasil/data_trainingdengankotak/layakangkut/'.$file;
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '100%';
						$config['width']= 640;
						$config['height']= 480;
						$config['new_image']= './gambar/hasil/data_trainingdengankotak/layakangkut/'.$file;
						$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$this->image_lib->resize();

						$imlayak = imagecreatefromjpeg("gambar/hasil/data_trainingdengankotak/layakangkut/".$file);	
						$rata=0;	
						$r=$g=$b=0;
						for ($i=160; $i < 318; $i+=10) { 
							for ($j=213; $j < 425; $j+=10) { 
								$rgb = imagecolorat($imlayak, $j, $i);
								$r += ($rgb >> 16) & 0xFF;
								$g += ($rgb >> 8) & 0xFF;
								$b += $rgb & 0xFF;
								$rata++;	
							}
						}
						$cek = $this->db->query("SELECT * FROM datatraining2 where namafile='".$file."'")->num_rows();
						if ($cek>0){
							echo "record sudah ada";

						}else{
							$data = array(
								'namafile' => "layakangkut/".$file,
								'r' => $r/$rata,
								'g' => $g/$rata,
								'b' => $b/$rata,
								"label" => 'Layak'
							);
							$this->m_admin2->inputdatatraining($data,'datatraining2');
						}
					}
				}
				closedir($dh);
			}
		}
	}
	function tambah_aksitidaklayak(){
		$dir = "gambar/hasil/data_trainingdengankotak/tidaklayakangkut/";
		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false){
					$cek=explode(".", $file);
					if ($cek[1]=="jpg") {
						$this->load->library('image_lib');
						$config['image_library']='gd2';
						$config['source_image']='./gambar/hasil/data_trainingdengankotak/tidaklayakangkut/'.$file;
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '100%';
						$config['width']= 640;
						$config['height']= 480;
						$config['new_image']= './gambar/hasil/data_trainingdengankotak/tidaklayakangkut/'.$file;
						$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$this->image_lib->resize();

						$imtidaklayak = imagecreatefromjpeg("gambar/hasil/data_trainingdengankotak/tidaklayakangkut/".$file);
						$rata=0;	
						$r=$g=$b=0;
						for ($i=160; $i < 318; $i+=10) { 
							for ($j=213; $j < 425; $j+=10) { 
								$rgb = imagecolorat($imtidaklayak, $j, $i);
								$r += ($rgb >> 16) & 0xFF;
								$g += ($rgb >> 8) & 0xFF;
								$b += $rgb & 0xFF;
								$rata++;	
							}
						}
						$cek = $this->db->query("SELECT * FROM datatraining2 where namafile='".$file."'")->num_rows();
						if ($cek>0){
							echo "record sudah ada";
						}
						else{
							$data = array(
								'namafile' => "tidaklayakangkut/".$file,
								'r' => $r/$rata,
								'g' => $g/$rata,
								'b' => $b/$rata,
								"label" => 'Tidak Layak'
							);
							$this->m_admin2->inputdatatraining($data,'datatraining2');
						}
					}
				}
				closedir($dh);
			}
		}
	}
	function tambahdt(){
		$this->tambah_aksilayak();
		$this->tambah_aksitidaklayak();		
		redirect('datatraining2/nampil');
	}
}