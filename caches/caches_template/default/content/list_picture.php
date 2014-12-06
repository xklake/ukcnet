<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">  
<meta name="description" content="<?php echo $SEO['description'];?>"> 

<?php include template("content","header"); ?>
<!--main-->
<div class="container w990 photo-channel">
    <div class="conts_tle">您的位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?>列表 </div>

    <div class="bk10">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <ul class="photo-list picbig">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                <div class="img-wrap">
                <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>"/></a>
                </div>
                <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div id="pages" class="text-c"><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <?php include template("content","footer"); ?>