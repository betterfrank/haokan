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

//上传图片
    public function do_upload(){
        $config['upload_path']      = getcwd().'/uploads/titlepic/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']     = 1024000;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;
        $config['file_name']=date('Ymd',time()).'_'.time();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('up_pic'))
        {
            $data = array('error' => $this->upload->display_errors());
            echo json_encode($data['error']);
            die();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            echo json_encode($data['upload_data']['file_name']);
//            print_r($data['upload_data']);
            die();
        }

        print_r($data);
        die();
        foreach($data['upload_data'] as $k=>$v){
            $arr[$k]=urlencode($v);
        }
        echo urldecode(json_encode($arr['file_name']));
//        echo json_encode($data['error']);
        die();
    }


}