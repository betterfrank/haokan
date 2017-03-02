<?php
/**
 * index.php
 * Author: kaixuan
 * Time: 2016/12/26 13:36
 */
defined('BASEPATH') OR exit('NO direct script access allowd');

class Index extends MY_Controller{

   function __construct(){
       parent::__construct();
       $this->load->helper('common');
   }

    public function index(){
        if(!$this->session->userdata('username')){
            $this->load->view('admin/login');
        }else{
            $userid=$this->session->userdata('userid');
            $data['re']=$this->db->select('*')->where('id',$userid)->get('user')->row_array();
            $this->load->view('admin/index',$data);
        };
    }





}