<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style type="text/css" >
.photo_prev a{cursor:url(<?php echo IMG_PATH;?>v9/prev.cur), auto;}
.photo_next a{cursor:url(<?php echo IMG_PATH;?>v9/next.cur), auto;}

</style>
<div class="container w990  photo-channel">
<div class="conts_tle">您的位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?>列表 </div>
	
    <div id="Article">
        	<h1><?php echo $title;?><br />
			<span><?php echo $inputtime;?>&nbsp;&nbsp;&nbsp;来源：<?php echo $copyfrom;?>&nbsp;&nbsp;&nbsp;评论：<a href="#comment_iframe" id="comment">0</a></span></h1>
<div class="tool">
		<a name="pic"></a>
        <a class="up" href="javascript:;" title="上一张" onclick="showpic('pre')"><span>上一张</span></a><a class="next" href="javascript:;" onclick="showpic('next')" title="下一张"><span>下一张</span></a><span class="stat" id="picnum"></span>
        <div class="Article-Tool"><span id='favorite'><a href="javascript:;" onclick="add_favorite('<?php echo $title;?>');" class="t6">收藏</a></span>
</div>
    <div class="big-pic" style="height:650px;">
		<div id="big-pic"></div>
    	<div class="photo_prev"><a id="photoPrev" title="&lt;上一页" class="btn_pphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('pre');"></a></div>
        <div class="photo_next"><a id="photoNext" title="下一页&gt;"class="btn_nphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('next')"></a></div>
        <a href="javascript:;" class="max" onclick="showpic('big');">查看原图</a>
        
        <div id="endSelect" style="display: none;">
			<div id="endSelClose" onclick="$('#endSelect').hide();"></div>
			<div class="bg"></div>
			<div class="E_Cont">
				<p>您已经浏览完所有图片</p>
				<p><a id="rePlayBut" href="javascript:void(0)" onclick="showpic('next', 1);"></a><a id="nextPicsBut" href="<?php echo $next_page['url'];?>"></a></p>	
			</div>
		</div>
        
    </div>

    <div class="list-pic">
        <div class="pre picbig">
        	<div class="img-wrap"><a href="<?php echo $previous_page['url'];?>"><img src="<?php echo thumb($previous_page[thumb], 100, 137, 0);?>" title="<?php echo $previous_page['title'];?>"></a></div><a href="<?php echo $previous_page['url'];?>">&lt;上一组</a>
<a href="<?php echo $next_page['url'];?>">下一组&gt;</a>        	
        </div>
        <a href="javascript:;" onclick="showpic('pre')" class="pre-bnt"><span></span></a>
		<div class="cont" style="position:relative">
			<ul class="cont picbig" id="pictureurls"  style="position:absolute">
			<?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
			 <li><div class="img-wrap"><a href="javascript:;" hidefocus="true"><img src="<?php echo thumb($r[url], 100, 137, 0);?>" alt="<?php echo $r['alt'];?>" rel="<?php echo $r['url'];?>"/></a></div></li>
			<?php $n++;}unset($n); ?>
			</ul>
		</div>
        <a href="javascript:;" onclick="showpic('next')" class="next-bnt"><span></span></a>
        <div class="next picbig">
        	<div class="img-wrap"><a href="<?php echo $next_page['url'];?>" title="<?php echo $next_page['title'];?>"><img src="<?php echo thumb($next_page[thumb], 100, 137, 0);?>"></a></div>
        </div>
    </div>
            <div class="text" id="picinfo"></div>
	<div class="content">
		<?php echo $content;?>
	</div>
  </div>
  <div class="bk10"></div>
</div>
<div id="load_pic" style="display:none;" rel="<?php echo IMG_PATH;?>msg_img/loading_d.gif">
</div>
<script language="JavaScript">
<!--
	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}
//-->
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>show_picture.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

<script type="text/javascript">
$(function(){
$(".picbig").each(function(i){
var cur = $(this).find('.img-wrap').eq(0);
var w = cur.width();
var h = cur.height();
$(this).find('.img-wrap img').LoadImage(true, w, h,'http://www.demo.com/statics/images/msg_img/loading.gif');
});
})
</script>
<?php include template("content","footer"); ?>

