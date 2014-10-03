<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="space"></div>
	 <div class="copyright">
		  <p class="btp"><a class="cfff" href="<?php echo $CATEGORYS['6']['url'];?>">联系我们</a> | <a  class="cfff" href="<?php echo $CATEGORYS['10']['url'];?>">加入会员</a> | <a class="cfff" href="<?php echo $CATEGORYS['11']['url'];?>">近期活动</a> | <a  class="cfff"href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=register">协会介绍</a> </p>
		  <!--p>联系地址：71-73 Charing Cross Road, London, WC2H 0NE,UK(英国）</p>
		  <p>电话：0845 224 3185&nbsp;&nbsp; 电邮:<a href="mailto:info@ukchetpa.org">info@ukchetpa.org </a>&nbsp;&nbsp;传真:020 203 2505</p-->
			<p>Copyright @ 2014 英中经贸交流促进会，版权所有</p>
 </div>

<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&img=0&pos=left&uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->


</div>
<!--在线客服 begin -->
<div class="QQbox" style="display:none" id="divQQbox" >
     <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display:none;">
          <ul>
              <li><a href="http://wpa.qq.com/msgrd?v=3&uin=910459407&site=qq&menu=yes" target="_blank"><img src="<?php echo IMG_PATH;?>kefu/floatServiceQq.gif" alt="QQ咨询"></a></li>
              <li><a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=register"><img src="<?php echo IMG_PATH;?>kefu/floatServiceWeb.gif" alt="网上咨询"></a></li>
			  <li class="phone_tle"><img src="<?php echo IMG_PATH;?>kefu/floatServiceTel.gif" /></li>
              <li class="phone"><b>13917226198</b></li>
          </ul>
     </div>
     <div id="divMenu" onmouseover="OnlineOver();"><img src="<?php echo IMG_PATH;?>kefu/floatService.gif" class="press" ></div>
</div>
<script language="JavaScript" type="text/JavaScript">
var tips; var theTop = 200/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "131px";

}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
</body>
</html>