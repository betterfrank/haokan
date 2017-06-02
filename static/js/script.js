
/**
 * User: Administrator
 * Date: 2017/3/17
 * Time: 9:54
 */
$(document).ready(function(){

    //ajax上传图片
    $(".up_pic").change(function () {
        $("#form2").ajaxSubmit({
            dataType: 'json',
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {
                $('.mask_center').append("<a href='javascript:;' class='up_show' ><img class='up_img' src=/uploads/titlepic/"+data+"></a>");
                $('.mask_center').append("<input type='hidden' class='up_hidden' name='up_hidden' value="+data+">");
            },
            error: function (xhr) {
                alert(xhr);
            }
        });
    });

    //关闭遮罩
    $('.mask_close').click(function(){
        $('.mask').hide();
        $('.mask_center').hide();
    });

    //关闭遮罩
    $('.dialog-close,.close').click(function(){
        $('.mask').hide();
        $('.mask_center').hide();
        $('#form1 input:checkbox').prop('checked',false);
    });

    //上传
    $('.up_input').click(function(){
        $('.mask').show();
        $('.mask_center').show();
    });

    //动态加载的dom 用on
    $('body').on('click','.up_show',function(){
        $('.mask').hide();
        $('.mask_center').hide();
        $('.title_pic').val($('.up_hidden').val());
    });

    //删除弹出对话框
    $('.del_single').click(function(){
        $('#mydialog').show();
        $('.dialog').show();
        //alert($(this).parent().prevAll('td:eq(1)').html());
        //alert($(this).parent().prevAll('td:eq(3)').find('input').val());
        //$('.dialog-p').html($(this).attr('alt'));
        $('.dialog-body').empty();
        $(this).parent().prevAll('td:eq(3)').find('input').prop('checked',true);
        $('.dialog-body').append(
            "<p class='dialog-p'>"+$(this).parent().prevAll('td:eq(2)').html()+"</p>");
        //$('.dialog-body').append(
        //    "<input type='hidden' name='del_id' value=' "+$(this).parent().prevAll('td:eq(3)').find('input').val()+"'>"
        //);
        //alert('1213');
    });

    //批量删除
    $('.dialogs').click(function(){
        if($('#form1 input:checked').length==0){
            alert('请先选择信息');
            return false;
        }
        $('#mydialog').show();
        $('.dialog').show();
        $('.dialog-body').empty();
        $('#form1 input:checked').each(function(){
            id = $(this).val();
            atitle = $('.title_'+id).html();
            $('.dialog-body').append("<p class='dialog-p'>"+atitle+"</p>");
        })
    });

    $('.checkall').click(function(){
        if($('#form1 input:checkbox').prop('checked') == true){
            $('#form1 input:checkbox').prop('checked',false);
        }else{
            $('#form1 input:checkbox').prop('checked',true);
        }
    });

    //确定对话框
    $('.dialog-foot>.bg-green').click(function(){
        $('#mydialog').hide();
        $('.dialog').hide()
        $('#form1').submit();
        //return true;
    })




});



