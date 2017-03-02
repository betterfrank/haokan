<?php
/**
 * login.php
 * Author: kaixuan
 * Time: 2016/12/26 14:44
 *
 */
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登陆管理后台</title>
    <link rel="stylesheet" href="<?=base_url()?>static/css/pintuer.css">
    <link rel="stylesheet" href="<?=base_url()?>static/css/admin.css">
    <script src="<?=base_url()?>static/js/jquery.js"></script>
    <script src="<?=base_url()?>static/js/pintuer.js"></script>
    <script src="<?=base_url()?>static/js/respond.js"></script>
    <script src="<?=base_url()?>static/js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y">
                <a href="#" target="_blank"><img src="<?=base_url()?>static/images/logo.png" class="radius" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form action="<?=myurl('admin/login/check_login')?>" method="post" name="form1">
            <div class="panel">
                <div class="panel-head"><strong>登录sfdsfdsfafdsa后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="username" placeholder="登录账号" data-validate="required:请填写账号/>
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="password" placeholder="登录密码" data-validate="required:请填写密码/>
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
<!--                    <div class="form-group">-->
<!--                        <div class="field">-->
<!--                            <input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />-->
<!--                            <img src="images/passcode.jpg" width="80" height="32" class="passcode" />-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            </form>
            <div class="text-right text-small text-gray padding-top">由东营利讯电子科技有限公司提供技术支持</div>
        </div>
    </div>
</div>

</body>
</html>
