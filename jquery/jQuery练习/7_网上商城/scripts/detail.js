$(".color_change img").on("click",function () {
    $(this).addClass("hover").parent().siblings().find('img').removeClass('hover');
    var $src=$(this).attr('src');
    var i=$src.indexOf('.');
    var $path=$src.substring(0,i);
    var $format=$src.substring(i);
    $('#bigImg').attr('src',$path+'_one_small'+$format);

    var j=$src.indexOf('_')+5;
   var $color=$src.substring(j,i);
   $('.imgList li').addClass('hide');
   $('.imgList_'+$color).removeClass('hide');
})
$('.imgList li img').on('click',function(){
    //images/pro_img/yellow_two.jpg  ==> images/pro_img/yellow_two_small.jpg
    var $src = $(this).attr('src');//images/pro_img/yellow_two.jpg
    var i = $src.indexOf('.');
    var $path = $src.substring(0,i)//images/pro_img/yellow_two
    var format = $src.substring(i);//.jpg
    $('#bigImg').attr('src',$path+'_small'+format);

});