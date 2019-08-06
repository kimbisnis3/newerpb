<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universe extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function insert(){
        $jumlah_data = 500;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                "judul"     =>  "Judul Ke-".$i,
                "artikel"   =>  "artikel ke-".$i,
                "ket"       =>  '089699935552');
            $this->db->insert('fartikel',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }

    function getAkses() {
        $w['iduser']    = $this->session->userdata("id");
        $w['idmenu']    = $this->input->post("idmenu");

        $r['result'] = $this->db->get_where('m_akses',$w)->row();
        echo json_encode($result);

    }

    function getMenu() {
        ($this->session->userdata("super") == "yes") ? $w['iduser']= $this->session->userdata("id") : $w['iduser'] != 0;
        $w['aktif'] = 1;

        $r['induk'] = $this->db->get_where('m_menu',$w)->row();
        $r['anak']  = $this->db->get_where('m_menu',$w)->row();
        echo json_encode($r);

    }

    

}
