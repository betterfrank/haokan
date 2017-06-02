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
        $this->load->model('Main_model');
    }

    public function index(){

        $this->load->vars('position','news');
        $this->load->vars('position_h','新闻');

        $this->load->library('pagination');

        $id=$this->uri->segment(4);
        if(!is_numeric($id) && $id<>'' ){
            adminshow('参数错误',myurl('admin/news/'),1);
            die();
        }
        if(!$id){$id=1;}

        $ss_title=$this->input->get('search_title');
        if($ss_title){
            $like['title']=$ss_title;
        }

        $config['base_url'] = base_url('/admin/news/all/');
        $config['total_rows'] = $this->Main_model->get_num('news',$like);
        $config['per_page'] =2;
        $config['reuse_query_string']=true;
        $config['use_page_numbers'] = TRUE;
        $start=($id-1)*$config['per_page'];

        $limit=$config['per_page'];
        $this->pagination->initialize($config);

        $links=$this->pagination->create_links();

        $re=$this->Main_model->get_page('news',$start,$limit,$like);
        $this->load->vars('all',$re);
        $this->load->vars('links',$links);
        $this->load->view('admin/news_list');
    }

//添加新闻
    public function add(){
		$this->load->library('form_validation');
        if(IS_POST && $this->form_validation->run('news')){
            $data=$this->get_news();
            $re=$this->Main_model->insert('news',$data);
            $this->load->vars('position','news');
            adminif($re,'添加信息成功',myurl('admin/news'),'添加信息失败',myurl('admin/news/add'));
        }else{
            $this->load->vars('position','news');
            $this->load->vars('position_h','新闻');
            $this->load->vars('position_zih','添加新闻');
            $this->load->vars('action','add');
            $this->load->view('admin/news');
        }
    }

    public function all()
    {
        $this->index();
        
    }
//    显示错误
    public function show(){
        $this->load->view('admin/show');
    }

//    删除新闻
    public function del(){
        $all=$this->input->post();
        $re=$this->Main_model->del_wherein('news','id',$all['id']);
        adminif($re,'删除信息成功',myurl('admin/news'),'删除信息失败',myurl('admin/news/'));

    }

//    修改信息
    public function modify(){
        $this->load->library('form_validation');
        $this->load->vars('position','news');
        $id=$this->uri->segment(4);
        if(IS_POST && $this->form_validation->run('news')){
            $data=$this->get_news();
            $re=$this->Main_model->update('news',$id,$data);
            $this->load->vars('position','news');
            adminif($re,'修改信息成功',myurl('admin/news'),'修改信息失败',myurl('admin/news/add'));
        }else{
            $this->load->vars('position_h','新闻');
            $this->load->vars('position_zih','修改');
            $re=$this->Main_model->get_one(array('id'=>$id),'news');
            $this->load->vars('re',$re);
            $this->load->vars('action','modify/'.$id);
            $this->load->view('admin/news');
        }
    }



//    获取提交内容
    public function get_news(){
        $data['title']=$this->input->post('title');
        $data['classid']=$this->input->post('classid');
        $data['status']=$this->input->post('status');
        $data['recommend']=$this->input->post('recommend');
        $data['title_pic']=$this->input->post('title_pic');
        $data['time']=time();
        $data['author']=$this->change_author($this->input->post('author'));
        $data['content']=$this->input->post('content');
        return $data;

    }

//    将用户名转换成id
    public function change_author($author){
        return $this->Main_model->change_author($author);
//        return '1';
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