var msg_box =""; function dis_rightclickIE(){
if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3))
alert(msg_box)
}
function dis_rightclickNS(e){
if ((document.layers||document.getElementById&&!document.all) && (e.which==2||e.which==3))
{
alert(msg_box)
return false;
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=dis_rightclickNS;
}
else if (document.all&&!document.getElementById){
document.onmousedown=dis_rightclickIE;
}
document.oncontextmenu=new Function("return false")

