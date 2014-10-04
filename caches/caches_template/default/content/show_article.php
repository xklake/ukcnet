<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">  
<meta name="description" content="<?php echo $SEO['description'];?>"> 
<?php include template("content","header"); ?>
<!--main-->
<div class="container w990">
     <div class="main ovh">
	       <?php include template("content", "lawer"); ?> 
		  <div class="info fr">
			   <div class="conts">
					<div class="conts_tle">您的位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?>正文</div>
					<div class="info_in b2">
						 <div class="wenzhang">
							  <div class="wztle">
			                       <h1><?php echo $title;?></h1>
					               <p>来源：<?php echo $copyfrom;?>&nbsp; 人气：<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>&nbsp; 时间：<?php echo $inputtime;?></p>
							  </div>
					          <div class="wztext">
						           <?php echo $content;?>
							  </div>
                              <div class="page"><?php echo $pages;?>
					     </div>
                         <div style="clear:both">
                         <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a>
                         <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
                         </div>
					</div>
			   </div>
	      </div>
	 </div>
<?php include template("content","footer"); ?>