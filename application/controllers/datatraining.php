<?php 
class Datatraining extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	function index(){
		$data['datatraining'] = $this->m_admin->tampildatatraining()->result();
		$this->load->view('v_admindt/table-basic',$data, array('error' => ' ' ));
	}
	function tambah_aksilayak(){
		$dir = "gambar/hasil/data_trainingtanpakotak/layakangkut/";
		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false){
					$cek=explode(".", $file);
					if ($cek[1]=="jpg") {
						$this->load->library('image_lib');
						$config['image_library']='gd2';
						$config['source_image']='./gambar/hasil/data_trainingtanpakotak/layakangkut/'.$file;
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '100%';
						$config['width']= 640;
						$config['height']= 480;
						$config['new_image']= './gambar/hasil/data_trainingtanpakotak/layakangkut/'.$file;
						$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$this->image_lib->resize();

						$imlayak = imagecreatefromjpeg("gambar/hasil/data_trainingtanpakotak/layakangkut/".$file);
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
						$cek = $this->db->query("SELECT * FROM datatraining where namafile like '%".$file."%'")->num_rows();
						if ($cek>0){
							$error = array('error' => $this->session->set_flashdata('eror', 'error message.'));
							$this->load->view('v_admindt/table-basic', $error);

						}else{
							$data = array(
								'namafile' => "layakangkut/".$file,
								'r' => $r/$rata,
								'g' => $g/$rata,
								'b' => $b/$rata,
								"label" => 'Layak'
							);
							$this->m_admin->inputdatatraining($data,'datatraining');
						}
					}
				}
				closedir($dh);
			}
		}
	}
	function tambah_aksitidaklayak(){
		$dir = "gambar/hasil/data_trainingtanpakotak/tidaklayakangkut/";
		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false){
					$cek=explode(".", $file);
					if ($cek[1]=="jpg") {
						$this->load->library('image_lib');
						$config['image_library']='gd2';
						$config['source_image']='./gambar/hasil/data_trainingtanpakotak/tidaklayakangkut/'.$file;
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '100%';
						$config['width']= 640;
						$config['height']= 480;
						$config['new_image']= './gambar/hasil/data_trainingtanpakotak/tidaklayakangkut/'.$file;
						$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$this->image_lib->resize();

						$imtidaklayak = imagecreatefromjpeg("gambar/hasil/data_trainingtanpakotak/tidaklayakangkut/".$file);	
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
						$cek = $this->db->query("SELECT * FROM datatraining where namafile like '%".$file."%'")->num_rows();
						if ($cek>0){
							$error = array('error' => $this->session->set_flashdata('eror', 'error message.'));
							$this->load->view('v_admindt/table-basic', $error);
						}
						else{
							$data = array(
								'namafile' => "tidaklayakangkut/".$file,
								'r' => $r/$rata,
								'g' => $g/$rata,
								'b' => $b/$rata,
								"label" => 'Tidak Layak'
							);
							$this->m_admin->inputdatatraining($data,'datatraining');
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
		redirect('datatraining');
	}
	function hapus($namafile){
        // $id = $this->input->get('namafile');
        // $this->m_admin->hapus_data($id);
        // redirect('datatraining');
	$id = $this->input->post('namafile');
          //  $group_picture = $this->input->post('group_picture');
            $this->m_admin->hapus_data($namafile);
         //   $file = $data['upload_data']['full_path'];
           //chmod('./secure/'.$data['row']->videothumbnail, 0777); chmod($file,0777);
	}
	public function tes()
	{
		$imtidaklayak = imagecreatefromjpeg("gambar/hasil/data_trainingtanpakotak/tidaklayakangkut/IMG_20181009_163001.jpg");	
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
		// echo $r/$rata."".$g/$rata."".$b/$rata;
		echo $r/$rata."<br>"; 
		echo $g/$rata."<br>";
		echo $b/$rata."<br>";
	}	
}