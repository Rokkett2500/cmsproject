<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    public function auth_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username);
        $data = $this->db->get()->row();
        if($data==NULL){
            $this->session->set_flashdata('alert', "<div class='row'><div class='col'><div class='alert alert-danger' role='alert'>
		Username does not exist.
	  </div></div></div>");
      redirect('auth');
        }
        else if ($password==$data->password){
            $data = array(
                'id_user' => $data->id_user,
                'username' => $data->username,
                'nama' => $data->nama,
                'password' => $data->password,
                'level' => $data->level,
            );
            $this->session->set_userdata($data);
            redirect('defcon');
        }
        else {
            $this->session->set_flashdata('alert', "<div class='row'><div class='col'><div class='alert alert-danger' role='alert'>
		Password is incorrect.
	  </div></div></div>");
      redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('defcon');
    }
}
