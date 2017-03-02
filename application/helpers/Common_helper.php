<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /**
 * common_helper.php
 * Author: kaixuan
 * Time: 2015/5/4 14:27
 */
function myurl($some,$state=1){
    if($state==1){
        return base_url($some);
    }else{
        return base_url('index.php/'.$some);
    }
}

function alertit($news){
    echo "<script type='text/javascript' charset='gb2312' >alert('$news');history.back();</script>";
}

function alerturl($news,$url){
    echo "<script type='text/javascript' charset='gb2312' >alert('$news');location.href='$url';</script>";
}

function show($news,$url){
    $CI =& get_instance();
    $data['news']=$news;
    $data['url']=$url;
    $CI->load->view('show',$data);
}

//显示正确或者错误
function adminshow($news,$url='',$zt=''){
    $CI =& get_instance();
    $data['news']=$news;
    $data['url']=$url;
    $data['zt']=$zt?'alert-red':'alert-green';
    $CI->load->view('admin/show',$data);
    if($zt){$CI->output->_display();die();}
}

//判断是否有返回值
function adminif($arr,$sucess,$url1,$error,$url2){
    if(!$url2){
        $url2=$url1;
    }
    if($arr){
        adminshow($sucess,$url1);
    }else{
        adminshow($error,$url2,1);
    }
}



//格式化数组
function pp($arr) {
    echo "<pre>";htmlspecialchars(print_r($arr));echo "<pre>";
}

//打印数组
function p($vars, $label = '') {
    if (ini_get('html_errors')) {
        $content = "<pre>\n";
        if ($label != '') {
            $content .= "<strong>{$label} :</strong>\n";
        }
        $content .= (print_r($vars,true));
        $content .= "\n</pre>\n";
    } else {
        $content = $label . " :\n" . print_r($vars, true);
    }
    echo $content;
    return null;
}

//获取ip
function get_ip()
{
    global $ip;

    if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else
        $ip = "Unknow";

    return $ip;
}
