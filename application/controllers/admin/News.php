<?php
/**
 * News.php
 * Author: kaixuan
 * Time: 2017/2/13 15:23
 */
defined('BASEPATH') OR exit('NO direct script access allowd');

class news extends MY_Controller{

    public function __construct(){
        parent::__construct();
//        $this->load->model('news');
    }

    public function index(){
        $this->load->vars('position','news');
        $this->load->vars('position_h','新闻');
        $this->load->view('admin/news_list');
    }


    public function add(){
		$this->load->library('form_validation');
        if(IS_POST && $this->form_validation->run('news')){
            $data=$this->get_news();
            $re=$this->main->insert('news',$data);
            adminif($re,'添加信息成功',myurl('admin/news'),'添加信息失败',myurl('admin/news/add'));
        }else{
            //todo 错误显示为完成
            $this->load->vars('position','news');
            $this->load->vars('position_h','新闻');
            $this->load->vars('position_zih','添加新闻');
            $this->load->view('admin/news');
        }
    }

    public function show(){
        $this->load->view('admin/show');
    }

    public function get_news(){
        $data['title']=$this->input->post('title');
        $data['classid']=$this->input->post('classid');
        $data['status']=$this->input->post('status');
        $data['rem']=$this->input->post('rem');
        $data['title_pic']=$this->input->post('title_pic');
        $data['time']=time();
        $data['author']=$this->input->post('author');
        $data['content']=$this->input->post('content');
        return $data;

    }



}