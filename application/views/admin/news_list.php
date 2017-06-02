<?php
/**
 * news_list.php
 * Author: kaixuan
 * Time: 2017/2/13 15:25
 */
include 'admin_header.php';
?>
<div id="mydialog" class="mask">
</div>
    <div class="dialog mask_center">
        <div class="dialog-head border-radius">
            <span class="close rotate-hover "></span><strong>
                是否删除选定的信息:
            </strong>
        </div>
        <div class="dialog-body">
        </div>
            <div class="dialog-foot">
                <button class="button dialog-close ">
                    取消</button>
                <button class="button bg-green">
                    确认</button>
            </div>
    </div>
<div class="admin">

        <div class="panel admin-panel">
            <div class="panel-head"><strong>内容列表</strong></div>
            <div class="padding border-bottom">
                <form action="<?=myurl('admin/news')?>" name="form2" method="get">
                <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
                <a class="button button-small border-green" href="<?=myurl('admin/news/add')?>" />添加文章</a>
                <input type="button" class="button button-small border-yellow dialogs" value="批量删除" data-toggle="click" data-target="#mydialog" data-mask="0"/>
                <input type="button" class="button button-small border-blue" value="回收站" />
                    <div class="input-inline clearfix search_title">
                        <input type="text" class="input title_pic "  name="search_title" class="title_pic" size="40" value=""/>
                        <input href="javascript:;" type="submit" name="" class="button bg-green" id="" value="搜索">
                    </div>
                </form>
            </div>
            <form action="<?=myurl('/admin/news/del')?>" name="form1" method="post" id="form1">
            <table class="table table-hover">
                <tr><th width="45">选择</th><th width="120">ID</th><th width="*">标题</th><th width="100">作者</th><th width="100">时间</th><th width="100">操作</th></tr>
                <?foreach($all as $k=>$v):?>
                <tr><td><input type="checkbox" name="id[]" value="<?=$v['id']?>" /></td><td><?=$v['id']?></td><td class="title_<?=$v['id']?>"><?=$v['title']?></td><td><?=$v['author']?></td><td><?=$v['time']?></td><td><a class="button border-blue button-little" href="<?=myurl('admin/news/modify/').$v['id']?>">修改</a> <a class="button border-yellow button-little del_single" href="javascript:;" >删除</a></td></tr>
                <?endforeach;?>
            </table>
            </form>
            <div class="panel-foot text-center">
                                <ul class="pagination pagination-group">
                <?=$links?>
                                                    </ul>
<!--                <ul class="pagination pagination-group">-->
<!--                <li><a href="#">上一页</a></li>-->
<!--                    <li><a href="#">1</a></li>-->
<!--                    <li class="active"><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                    <li><a href="#">5</a></li>-->
<!--                    <li><a href="#">下一页</a></li>-->
<!--                </ul>-->
            </div>
        </div>

</div>
