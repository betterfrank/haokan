<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// +----------------------------------------------------------------------
// |　网站管理后台表单验证规则配置
// +----------------------------------------------------------------------
// | Copyright (c) 2015
// +----------------------------------------------------------------------
// | Author: baiping 125618036@qq.com http://www.webipcode.com
// +----------------------------------------------------------------------
// | 2015-6-29下午6:41:48
// +----------------------------------------------------------------------

$config = array(
		//用户登录
		'login' => array(
				array(
						'field' => 'username',
						'label' => '用户名',
						'rules' => 'trim|required|min_length[5]|max_length[12]',
					),
				array(
						'field' => 'password',
						'label' => '密码',
						'rules' => 'trim|required|min_length[5]|max_length[12]|alpha_numeric',
					),
				array(
						'field' => 'verify',
						'label' => '验证码',
						'rules' => 'trim|required',
					),
				),
		//网站后台配置设置表单验证
		'config' => array(
				array(
						'field' => 'name',
						'label' => '配置标识',
						'rules' => 'required|alpha_dash',//is_unique[config.name]|
					),
				array(
						'field' => 'title',
						'label' => '配置标题',
						'rules' => 'required',
					)
				),
		//用户中心		
		'member' => array(
				array(
						'field' => 'username',	
						'label' => '用户名',	
						'rules' => 'trim|required|min_length[5]|max_length[12]|alpha_dash|is_unique[Member.username]',
					),
				array(
						'field' => 'password',	
						'label' => '密码',	
						'rules' => 'trim|required|min_length[5]|max_length[12]|alpha_numeric',
					),
				array(
						'field' => 'confimpassword',	
						'label' => '确认密码',	
						'rules' => 'trim|required|min_length[5]|max_length[12]|alpha_numeric|matches[password]',
					),
				array(
						'field' => 'email',	
						'label' => '邮箱',	
						'rules' => 'trim|required|valid_email|is_unique[Member.email]',
					)
				
				),
		//菜单
		'menu' => array(
			array(
					'field' => 'title',
					'label' => '菜单标题',
					'rules' => 'trim|required',
			),
			array(
					'field' => 'url',
					'label' => '菜单URL',
					'rules' => 'trim|required',
			),
		),	
		//角色管理
		'authmanager' => array(
				array(
				'field' => 'title',
				'label' => '角色名称',
				'rules' => 'trim|required',
			)
		),	
		//后台商标属性添加
		'trademark' => array(
			array(
				'field' => 'title',
				'label' => '产品标题',
				'rules' => 'trim|required',
			),
			array(
				'field' => 'catid',
				'label' => '产品分类',
				'rules' => 'trim|greater_than[0]',
			),
			array(
				'field' => 'service_price',
				'label' => '服务费',
				'rules' => 'trim|required|numeric',
			),
			array(
				'field' => 'officer_price',
				'label' => '官费',
				'rules' => 'trim|required|numeric',
			)
		),
		//后台商标属性添加
		'patent' => array(
			array(
				'field' => 'title',
				'label' => '产品标题',
				'rules' => 'trim|required',
			),
			array(
				'field'=>'catid',
				'label'=>'专利类型分类',
				'rules'=>'trim|required',
			)
		),
		//后台分类管理
		'catgory' => array(
			array(
				'field' => 'title',
				'label' => '分类名称',
				'rules' => 'trim|required',
			),
		),

        'news' => array(
            array(
                'field' => 'title',
                'label' => '标题',
                'rules' => 'trim|required',
            ),
			array(
				'field' => 'content',
				'label' => '内容',
				'rules' => 'trim|required',
			),
			array(
				'field' => 'classid',
				'label' => '分类',
				'rules' => 'trim|required|numeric',
			),
        ),





);