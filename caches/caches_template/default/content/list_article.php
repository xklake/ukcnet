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
					<div class="conts_tle">您的位置：<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?>列表 </div>
					<div class="info_in b2">
						 <!--ul class="infolist">
							 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b22291ce36e15a79267c70ea285e17a5&action=lists&catid=%24catid&num=8&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  							  							  							  							  
                       <li><a href="<?php echo $r['url'];?>" class="fl"><?php echo $r['title'];?></a><span class="c999 fr"><?php echo date('Y-m-d',$r[inputtime]);?></span>
                            <?php if($n%5 ==0) { ?></ul><ul class="infolist">	<?php } ?> >
													 <div>
													 	<?php echo str_cut($r[description], 500);?>
													 	</div>	                            
                        <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul-->


						 <div class="articlecontent">
							 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=936375e77957c364712961d644082fa1&action=lists&catid=%24catid&num=12&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  							  							  							  							  
                       <p><a href="<?php echo $r['url'];?>" class="fl"><?php echo $r['title'];?></a> <span style="margin-left:20px;">(<?php echo date('Y-m-d',$r[inputtime]);?>)</span>
                            <!-- <?php if($n%5 ==0) { ?></ul><ul class="infolist">	<?php } ?> -->
													 <div>
													 	<?php echo str_cut($r[description], 500);?>  
													 	</div>
													 	
											<div class="dotline"></div>	                            
                        <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</div>



                           <div class="page"><?php echo $pages;?></div>
					</div>
			   </div>
	      </div>
	 </div>
<?php include template("content","footer"); ?>