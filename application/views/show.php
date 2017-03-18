<?php
/**
 * show.php
 * Author: kaixuan
 * Time: 2017/2/7 14:42
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
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>

<div class="show_content">
    <div class="alert alert-red">
        <strong>操作失败</strong>
        <p>
            <?=$news?>
        </p>
    </div>
</div>
<script type="text/javascript" language="javascript">
    function reloadyemian()
    {
        window.location.href="<?=$url?>";
    }
    window.setTimeout("reloadyemian();",3000);
</script>
</body>
</html>
