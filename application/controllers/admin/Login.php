<?php
/**
 * Login.php
 * Author: kaixuan
 * Time: 2016/12/26 15:59
 */

class Login extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if(!$this->session->userdata('username')){
            $this->load->view('admin/login');
        }else{
            $userid=$this->session->userdata('userid');
            $this->load->vars('position','index');
            $this->load->view('admin/index');
        };
    }


    public function check_login(){
        $name=$this->input->post('username');
        $pwd=$this->input->post('password');
        $re=$this->check_all($name,$pwd);
        if($re){
            $this->session->set_userdata(array('username'=>$name));
            header('location:'.myurl('admin/'));
        }else{
            show('用户名或者密码错误','/admin/');
        }
    }

    //检查用户名和密码
    public function check_all($name,$pwd){
        $this->load->model('Main_model');
        $arr=array('username'=>$name);
        $re=$this->Main_model->get_one($arr,'users');
        if($re && md5($re['salt'].$pwd)==$re['password']){
            return true;
        }else{
            return false;
        }

    }

    public function loginout(){
        $this->session->unset_userdata('username');
        header('location:'.myurl('admin/'));
    }




}