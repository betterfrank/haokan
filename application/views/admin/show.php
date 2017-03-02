<?php
/**
 * show.php
 * Author: kaixuan
 * Time: 2017/2/7 14:42
 */
include('admin_header.php');
?>

<div class="admin">

<div class="show_content">
    <div class="alert <?=$zt?>">
<!--        <strong>操作失败</strong>-->
        <p>
            <?=$news?>
        </p>
    </div>
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
