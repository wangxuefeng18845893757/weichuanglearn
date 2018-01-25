$("#skin li").on("click",function () {
    $(this).addClass("selected").siblings().removeClass("selected")
})
$("#inputSearch").focus(function () {
    if($(this).val() == this.defaultValue){
        $(this).val("");
    }
}).blur(function(){
    $(this).val(this.value==""?this.defaultValue:this.value);
});
/* 轮播图开始 */
var prevIdx = 0;
var timer;
$('#jnBtn a').on('mouseover',function(){
    $this = $(this);
    $(this).addClass('chos').siblings().removeClass('chos');

    //$('#JS_imgWrap img').eq(index).stop(true,true).fadeIn().siblings().fadeOut();
    $('#JS_imgWrap img').eq($(this).index()).stop().fadeIn().siblings().stop().fadeOut();

    prevIdx = $this.index();
});
run();
function run(){
    timer = setInterval(function(){
        prevIdx++;
        if(prevIdx == $('#JS_imgWrap img').length){
            prevIdx = 0;
        }
        $('#jnBtn a').eq(prevIdx).triggerHandler('mouseover');
    },1000);
}
$('#jnImageroll').on('mouseover',function(){
    clearInterval(timer);
}).on('mouseout',function(){
    run();
});
/* 轮播图结束 */
/* 最新动态开始 */
$(".tooltip").on("mouseover",function (e) {
    this.currTitle=this.title;
    $("<div id='tip'>"+this.currTitle+"</div>").appendTo("body").offset({
        left:e.pageX+10,
        top:e.pageY+20
    });
    $(this).attr("title","");
}).on("mousemove",function (e) {
    $("#tip").offset({
        left:e.pageX+10,
        top:e.pageY+20
    })
}).on("mouseout",function () {
    $("#tip").remove();
    $(this).attr("title",this.currTitle);
});
/* 最新动态结束 */
$("#jnBrandTab ul li").on('click',function () {
    $(this).addClass("chos").siblings().removeClass("chos");
    var idx=$(this).index();
    //$('#jnBrandList').css('left',-$('#jnBrandList li').outerWidth()*4*idx);
    $('#jnBrandList').animate({
        left :  -$('#jnBrandList li').outerWidth()*4*idx
     },1000);
}).eq(0).click();

