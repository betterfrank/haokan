<?php
/**
 * main_model.php
 * Author: kaixuan
 * Time: 2017/2/6 16:24
 */

class Main_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    private function _where($where){
        if ( is_array( $where ) ){
            foreach ( $where as $key => $val ){
                if ( is_array( $val ) ){
                    $this->db->where_in($key, $val);
                    unset($where[$key]);
                }else{
                    $this->db->where($key, $val);
                }
            }
        }
        return true;
    }

//    获取一条信息
    public function get_one($where,$table){
        return $this->db->where($where)->get($table)->row_array();
    }

//    获取信息数量
    public function get_num($table,$like)
    {
        if($like){
            return $this->db->like($like)->from($table)->count_all_results();
        }else{
            return $this->db->count_all($table);
        }
    }

//分页获取活动
    public function get_page($table,$start,$limit,$like,$where=array()){

        $this->db->from($table);
        if($like){
            $this->db->like($like);
        }
        if($where){
            $this->db->where($where);
        }
        $this->db->limit($limit,$start);
//        与普通的sql limit 相反
        $this->db->order_by('time','desc');
        return $this->db->get()->result_array();
    }


//    插入
    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }

//    将作者名转换为id
    public function change_author($author){
        $arr=array('truename'=>$author);
        $this->_where($arr);
        $re=$this->db->select('id')->get('users')->row_array();
        return $re['id'];
    }

    //删除多个信息
    public function del_wherein($table,$title,$arr) {
        return $this->db->where_in($title,$arr)->delete($table);

    }

    public function get_all($table){
        return $this->db->get($table)->result_array();
    }

//修改
    public function update($table,$id,$data){
        return $this->db->where('id',$id)->update($table,$data);

    }

}