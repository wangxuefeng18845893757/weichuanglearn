var oPrev=document.getElementsByClassName('prev')[0];
var oNext=document.getElementsByClassName('next')[0];
var oPrev1=document.getElementsByClassName('client-prev')[0];
var oNext1=document.getElementsByClassName('client-next')[0];
var oImgbox=document.getElementsByClassName('img-box')[0];
var oClientimg=document.getElementsByClassName('client-img')[0];
var oContainer=document.getElementsByClassName('container')[0];
var aA=oImgbox.getElementsByTagName("a");
var aLi=oClientimg.getElementsByTagName("li");
var count=0;
var count1=0
var timer;
oNext.onclick=function () {
    count++;
    if(count>=aA.length){
        count=0;
    }
    animate(oImgbox,{left:-count * 1003});
}
oPrev.onclick=function () {
    count--;
    if(count<0){
        count=aA.length-1;
    }
    animate(oImgbox,{left:-count * 1003});
}
function run() {
    timer=setInterval(function () {
        oNext.onclick();
    },4000)}
run();
oContainer.onmouseover=function () {
    clearInterval(timer);
}
oContainer.onmouseout=function () {
    run();
}
oNext1.onclick=function () {
    count1++;
    if(count1>=5){
        count1=0;
    }
    animate(oClientimg,{left:-count1 * 250});
}
oPrev1.onclick=function () {
    count1--;
    if(count1<0){
        count1=4
    }
    animate(oClientimg,{left:-count1 * 250});
}
