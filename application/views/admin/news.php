<?php
/**
 * news.php
 * Author: kaixuan
 * Time: 2017/2/16 13:10
 */
include('admin_header.php');
?>
<div class="mask">
</div>
<div class="mask_center">
    <a href="javascript:;" class="mask_close">&times;关闭</a>
    <form action="<?= base_url()?>/admin/news/do_upload" enctype="multipart/form-data" method="post" name="form2" id="form2">
        <a class="button input-file bg-sub mt10" href="javascript:void(0);" >+ 浏览文件<input  class="up_pic" size="100" id="up_pic" type="file" name="up_pic" data-validate="regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" /></a>
    </form>
</div>
<div class="admin">
<div class="tab">
    <strong style="display:block;margin-bottom:5px;"><?=$position_zih?>新闻</strong>
    <div class="tab-body">
        <br />
        <div class="tab-panel active" id="tab-set">
            <form method="post" class="form-x" action="<?=myurl('admin/news/'.$action)?>">
                <div class="form-group">
                    <div class="label"><label for="title">新闻标题</label></div>
                    <div class="field">
                        <input type="text" class="input" id="title" name="title" size="50" placeholder="新闻标题" data-validate="required:请填写新闻的标题" value="<?=$re['title']?$re['title']:set_value('title')?>"/>
<!--                        <input type="text" class="input" id="title" name="title" size="50" placeholder="新闻标题" data-validate="required:请填写新闻的标题" />-->
                        <?=form_error('title','<div class="input_error">','</div>')?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="classid">分类</label></div>
                    <div class="field">
                        <select class="input" id="classid" name="classid" data-validate="" >
<!--                            <select class="input" id="classid" name="classid" data-validate="required:请选择新闻的类型" >-->
                            <option value="">请选择分类</option>
                            <option value="1" <?=$re['classid']==1?'selected':''?> <?=set_value('classid')==1?'selected':''?>>起步</option>
                            <option value="2" <?=$re['classid']==2?'selected':''?> <?=set_value('classid')==2?'selected':''?>>CSS</option>
                            <option value="3" <?=$re['classid']==3?'selected':''?> <?=set_value('classid')==3?'selected':''?>>jq</option>
                            <option value="4" <?=$re['classid']==4?'selected':''?> <?=set_value('classid')==4?'selected':''?>>php</option>
                            <option value="5" <?=$re['classid']==5?'selected':''?> <?=set_value('classid')==5?'selected':''?>>数组</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label>是否审核</label></div>
                    <div class="field">
                        <div class="button-group button-group-small radio border-main">
                            <label class="button <?=$re['status']==1?'active':''?><?=set_value('status')==1?'active':''?>"><input name="status" value="1"  type="radio"><span class="icon icon-check"></span> 是</label>
                            <label class="button <?=$re['status']==0?'active':''?><?=set_value('status')===0?'active':''?>"><input name="status" value="0" <?=set_value('status')==0?'checked':''?> type="radio"><span class="icon icon-times"></span> 否</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label>是否推荐</label></div>
                    <div class="field">
                        <div class="button-group button-group-small radio border-red">
                            <label class="button <?=set_value('recommend')==1?'active':''?>"><input name="recommend" value="1" <?= set_checkbox('recommend','1',true)?>checked="checked" type="radio"><span class="icon icon-check"></span> 是</label>
                            <label class="button <?=set_value('recommend')==0?'active':''?>"><input name="recommend" value="0" <?=set_checkbox('recommend','0')?> type="radio"><span class="icon icon-times"></span> 否</label>
                        </div>
                        <span class="text-gray">sfsfd</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="title_pic">标题图片</label></div>
                    <div class="input-inline clearfix">
                        <input type="text" class="input title_pic "  name="title_pic" class="title_pic" size="50" value="<?=set_value('title_pic')?>"/>
                        <a href="javascript:;" type="input" name="up_input" class="up_input button bg-green" id="" >上传图片</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="readme">发表时间</label></div>
                    <div class="field">
                        <input type="text" class="input" id="time" name="time" size="20" value="<?=date('Y-m-d',time());?>" readonly />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="author">作者</label></div>
                    <div class="field">
                        <input type="text" class="input" id="author" name="author" size="50" value="<?=$this->session->userdata('truename')?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="desc">描述</label></div>
                    <div class="field">
                        <script id="content" name="content" type="text/plain">
                        <?=html_entity_decode(set_value('content'))?>
                        <?=$re['content']?>
                        </script>
                    </div>
                </div>
                <div class="form-button"><button class="button bg-main" type="submit"><?=$position_zih?></button></div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>
<script type="text/javascript" src="<?=base_url()?>static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/js/jquery.form.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/ueditor/ueditor.all.js"></script>
<script>
    var ue = UE.getEditor('content');
</script>
</body>
</html>
