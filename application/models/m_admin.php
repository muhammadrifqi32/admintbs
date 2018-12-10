<?php 

class M_admin extends CI_Model{	
	function tampil_data(){
		return $this->db->get('admin');
	}
	function edit_data($where,$table){		
		return $this->db->get_where('admin',$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update('admin',$data);
	}
	function tampildatatraining(){
		return $this->db->get('datatraining');
	}
	function inputdatatraining($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($namafile){
		  $this->db->where('namafile', $namafile);
	
		        $this->db->delete('datatraining', array('namafile' => $namafile));
		        	   chmod("./gambar/hasil/data_trainingtanpakotak/".$namafile, 0777);
                         unlink("./gambar/hasil/data_trainingtanpakotak/".$namafile);
              //  chmod("./gambar/hasil/data_trainingtanpakotak/".$namafile, 0777);

          
		// $row = $this->db->where('ID',$id)->get('gambar/hasil/data_trainingtanpakotak/')->row();
		// $this->db->where($where);
		// $this->db->delete($table);
		// unlink('gambar/hasil/data_trainingtanpakotak/'.$row->namafile);

		// $row = $this->db->where('id',$id)->get('namafile')->row();
        // unlink('gambar/hasil/data_trainingtanpakotak/layakangkut/'.$row->picture);
        // $this->db->where('id', $id);
        // $this->db->delete($this->table);
        // return true; 

		// try {
		// 	$this->db->where('id',$id)->delete('tb_gambar');
		// 	return true;
		// }
  //   //catch exception
		// catch(Exception $e) {
		// 	echo $e->getMessage();
		// }
	}
}	