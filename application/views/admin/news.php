<?php
/**
 * news.php
 * Author: kaixuan
 * Time: 2017/2/16 13:10
 */
include('admin_header.php');
?>
<div class="admin">
<div class="tab">
    <strong style="display:block;margin-bottom:5px;"><?=$position_zih?></strong>
    <div class="tab-body">
        <br />
        <div class="tab-panel active" id="tab-set">
            <form method="post" class="form-x" action="<?=myurl('admin/news/add')?>">
                <div class="form-group">
                    <div class="label"><label for="title">新闻标题</label></div>
                    <div class="field">
                        <input type="text" class="input" id="title" name="title" size="50" placeholder="新闻标题" data-validate="" />
<!--                        <input type="text" class="input" id="title" name="title" size="50" placeholder="新闻标题" data-validate="required:请填写新闻的标题" />-->
                        <?=form_error('title','<div class="input_error">','</div>')?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="classid">分类</label></div>
                    <div class="field">
                        <select class="input" id="classid" name="classid" data-validate="required:请选择新闻的类型" >
                            <option value="">请选择分类</option>
                            <option value="1">起步</option>
                            <option value="2">CSS</option>
                            <option>元件</option>
                            <option>模块</option>
                            <option>javascript组件</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label>是否审核</label></div>
                    <div class="field">
                        <div class="button-group button-group-small radio border-main">
                            <label class="button active"><input name="status" value="1" checked="checked" type="radio"><span class="icon icon-check"></span> 是</label>
                            <label class="button"><input name="status" value="0" type="radio"><span class="icon icon-times"></span> 否</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label>是否推荐</label></div>
                    <div class="field">
                        <div class="button-group button-group-small radio border-red">
                            <label class="button "><input name="rem" value="1" <?= set_checkbox('rem','1',true)?>checked="checked" type="radio"><span class="icon icon-check"></span> 是</label>
                            <label class="button active"><input name="rem" value="0" <?=set_checkbox('rem','0')?> type="radio"><span class="icon icon-times"></span> 否</label>
                        </div>
                        <span class="text-gray">sfsfd</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="title_pic">标题图片</label></div>
                    <div class="field">
                        <a class="button input-file" href="javascript:void(0);">+ 浏览文件<input size="100" type="file" name="title_pic" data-validate="regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" /></a>
                        <span class="text-gray">当需要显示为轮播时才需要上传图片</span>
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
                        <input type="text" class="input" id="author" name="author" size="50" value="admin" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="desc">描述</label></div>
                    <div class="field">
                        <script id="content" name="content" type="text/plain"></script>
                    </div>
                </div>
                <div class="form-button"><button class="button bg-main" type="submit">添加</button></div>
            </form>
        </div>
    </div>
</div>
    </div>
<script type="text/javascript" src="<?=base_url()?>static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?=base_url()?>static/ueditor/ueditor.all.js"></script>
<script>
    var ue = UE.getEditor('content');
</script>
</body>
</html>
