/**
 * User: Administrator
 * Date: 2017/3/17
 * Time: 9:54
 */
$(document).ready(function(){

    $(".up_pic").change(function () {
        $("#form2").ajaxSubmit({
            dataType: 'json',
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {
                $('.mask_center').append("<a href='javascript:;' class='up_show' ><img src=/uploads/titlepic/"+data+"></a>");
                $('.mask_center').append("<input type='hidden' class='up_hidden' name='up_hidden' value="+data+">");
            },
            error: function (xhr) {
                alert(xhr);
            }
        });
    });

    $('.mask_close').click(function(){
        $('.mask').hide();
        $('.mask_center').hide();
    });

    $('.up_input').click(function(){
        $('.mask').show();
        $('.mask_center').show();
    });

    $('body').on('click','.up_show',function(){
        $('.mask').hide();
        $('.mask_center').hide();
        $('.title_pic').val($('.up_hidden').val());
    })






});

function aa(){
    alert('132');
}