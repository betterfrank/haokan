<?php
/**
 * admin_header.php
 * Author: kaixuan
 * Time: 2017/2/6 16:08
 */
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台登陆管理</title>
    <link rel="stylesheet" href="<?=base_url()?>static/css/pintuer.css">
    <link rel="stylesheet" href="<?=base_url()?>static/css/admin.css">
    <script src="<?=base_url()?>static/js/jquery.js"></script>
    <script src="<?=base_url()?>static/js/pintuer.js"></script>
    <script src="<?=base_url()?>static/js/respond.js"></script>
    <script src="<?=base_url()?>static/js/script.js"></script>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo">后台管理</div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="<?=base_url();?>" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="<?=myurl('admin/login/loginout')?>">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="<?=$position=='index'?'active':'';?>"><a href="" class="icon-home"> 首页</a>
                    <ul><li><a href="system.html">系统设置</a></li><li><a href="<?=myurl('admin/news')?>">新闻管理</a></li><li ><a href="#">会员管理</a></li><li><a href="#">文件管理</a></li><li><a href="#">栏目管理</a></li></ul>
                </li>
                <li class="<?=$position=='system'?'active':'';?>"><a href="system.html" class="icon-cog"> 系统</a>
                    <ul><li><a href="#">全局设置</a></li><li class="active"><a href="#">系统设置</a></li><li><a href="#">会员设置</a></li><li><a href="#">积分设置</a></li></ul>
                </li>
                <li class="<?=$position=='news'?'active':'';?>"><a href="<?=myurl('admin/news')?>" class="icon-file-text"> 新闻</a>
                    <ul><li><a href="<?=myurl('admin/news/add');?>">添加新闻</a></li><li ><a href="<?=myurl('admin/news/')?>">新闻管理</a></li><li><a href="#">分类设置</a></li><li><a href="#">链接管理</a></li></ul>
                </li>
                <li><a href="#" class="icon-shopping-cart"> 订单</a></li>
                <li><a href="#" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 广告</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="<?=myurl('admin');?>" class="icon-home"> 开始</a></li>
                <li><a href="<?=myurl('admin/'.$position)?>"><?=$position_h?></a></li>
                <?if($position_zih){?>
                <li><?=$position_zih?></li>
                <?}?>
            </ul>
        </div>
    </div>
</div>
