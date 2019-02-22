<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model{

    public function alldata()
    {
        $this->db->from('paket');

        $query = $this->db->get();
        return $query->result();
    }

    public function inputpaket($tgl,$sasaran,$penerima,$isi)
    {
        $data = array(
			'tgl_dt' => $tgl, 
			'sasaran' => $sasaran,
			'penerima' => $penerima,
			'isi_paket' => $isi
        );
        
        $input = $this->db->insert('paket',$data);
        if ($input) {
			
			redirect('welcome/halutam','refresh');
			
		}
    }

    public function cekkar()
    {
        $this->db->from('karyawan');

        $query = $this->db->get();
        return $query->result();
    }

    public function allpenghuni()
    {
        $this->db->from('penghuni');

        $query = $this->db->get();
        return $query->result();
    }

    public function updatepaket($isi,$tgl_ambil,$id)
    {
        $data = array(
			'isi_paket' => $isi, 
			'tgl_ambil' => $tgl_ambil
			
        );
        $this->db->where('id_paket', $id);
       $upd = $this->db->update('paket', $data);
        if ($upd) {
            redirect('welcome/allpaket','refresh');
        }
    }

    public function inputpenghuni($namap,$unit,$ktp)
    {
        $data = array(
			'nama_p' => $namap, 
			'unit' => $unit,
			'no_ktp' => $ktp
        );
        
        $input = $this->db->insert('penghuni',$data);
        if ($input) {
			
			redirect('welcome/halutam','refresh');
			
		}
    }

    public function detailpaket($id)
    {
        $this->db->from('paket');
        $this->db->where('id_paket', $id);
        $query = $this->db->get();
        return $query->result();
        
        
        
    }

    public function detailpenghuni($id)
    {
        $this->db->from('penghuni');
        $this->db->where('no_ktp', $id);
        $query = $this->db->get();
        return $query->result();
        
        
        
    }

    public function updatepenghuni($nama,$unit,$id)
    {
        $data = array(
			'nama_p' => $nama, 
			'unit' => $unit
			
        );
        $this->db->where('no_ktp', $id);
       $upd = $this->db->update('penghuni', $data);
        if ($upd) {
            redirect('welcome/allpeng','refresh');
        }
    }
}





/* End of file filename.php */
