<?php
/**
 * news_list.php
 * Author: kaixuan
 * Time: 2017/2/13 15:25
 */
include 'admin_header.php';
?>
<div class="admin">

    <form method="post">
        <div class="panel admin-panel">
            <div class="panel-head"><strong>内容列表</strong></div>
            <div class="padding border-bottom">
                <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
                <input type="button" class="button button-small border-green" value="添加文章" />
                <input type="button" class="button button-small border-yellow dialogs" value="批量删除" data-toggle="click" data-target="#mydialog" data-mask="1"/>
                <input type="button" class="button button-small border-blue" value="回收站" />
            </div>
            <div id="mydialog">
                <div class="dialog">
                    <div class="dialog-head">
                        <span class="close rotate-hover"></span><strong>对话框标题</strong>
                    </div>
                    <div class="dialog-body">
                        是否删除选定的信息</div>
                    <div class="dialog-foot">
                        <button class="button dialog-close">
                            取消</button>
                        <button class="button bg-green">
                            确认</button>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <tr><th width="45">选择</th><th width="120">分类</th><th width="*">名称</th><th width="100">时间</th><th width="100">操作</th></tr>
                <tr><td><input type="checkbox" name="id" value="1" /></td><td>起步</td><td>下载拼图框架</td><td>2014-10-1</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="2" /></td><td>起步</td><td>框架包含的文件</td><td>2014-9-20</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="3" /></td><td>起步</td><td>浏览器支持</td><td>2014-9-10</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="4" /></td><td>起步</td><td>移动优先、跨屏响应</td><td>2014-9-1</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="5" /></td><td>起步</td><td>基本页面</td><td>2014-8-20</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="6" /></td><td>起步</td><td>第三方应用支持</td><td>2014-8-10</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="7" /></td><td>起步</td><td>业务合作</td><td>2014-8-1</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="8" /></td><td>起步</td><td>使用许可</td><td>2014-7-20</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="9" /></td><td>CSS</td><td>文本</td><td>2014-7-10</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
                <tr><td><input type="checkbox" name="id" value="11" /></td><td>CSS</td><td>边界、填充</td><td>2014-6-20</td><td><a class="button border-blue button-little" href="#">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
            </table>
            <div class="panel-foot text-center">
                <ul class="pagination"><li><a href="#">上一页</a></li></ul>
                <ul class="pagination pagination-group">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
                <ul class="pagination"><li><a href="#">下一页</a></li></ul>
            </div>
        </div>
    </form>

</div>
