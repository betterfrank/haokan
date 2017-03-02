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

    public function get_one($where,$table){
        return $this->db->where($where)->get($table)->row_array();
    }

    public function insert($table,$data){
        return $this->db->insert($table,$data);
    }

}