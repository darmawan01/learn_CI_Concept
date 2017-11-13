<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('ModelsCustome');
    }
	public function index(){
        $data['list'] = $this->ModelsCustome->data_view('user','id_user');
		$this->load->view('user/User_view', $data);
    }
    public function insert_view(){
		$this->load->view('user/User_add');
    }
    
    public function insert_act(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tlp = $this->input->post('telephone');
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        if(isset($_POST['submit'])){
            if(empty($nama) || empty($alamat) || empty($tlp) || empty($user) || empty($pass)){
                $this->session->set_flashdata('message','Any Field Null !!');
                redirect('user/Users/insert_view');
            }else{
                $result = $this->ModelsCustome->insert('user',array(
                    'nama'      => $nama,
                    'alamat'    => $alamat,
                    'telephone' => $tlp,
                    'username'  => $user,
                    'password'  => md5($pass)

                ));

                if($result >= 1){
                    $this->session->set_flashdata('message','Data was inserted !!');
                    redirect('user/Users');
                }else{
                    $this->session->set_flashdata('message','Data can not inserted !!');
                    redirect('user/Users/insert_view');
                }
            }
        }
    }
	
}
