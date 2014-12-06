<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	    
			   <?php include template("content", "indexintro"); ?>
		  
		  <div class="main_ct box fl ml10">
		       <div class="new">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4a3ce738e0e5f900e5929a8be2a4eb75&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%289%29++order+by+id+DESC&num=3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(9)  order by id DESC LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dl>
					  <dt><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 60, false);?></a></dt>
						<dd><strong>活动内容摘要</strong>：<?php echo str_cut($r[description], 500);?>......<a href="<?php echo $r['url'];?>" class="cf60">[阅读全文]</a></dd>
					</dl>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			   </div>
			   
			   <dl class="newlist">
				    <dt><span class="fb14 fl">新闻摘要</span></dt>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9557fc727c887f5ad1480d89f848f143&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2849%29++order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(49)  order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dd><a href="<?php echo $r['url'];?>" class="fl"><?php echo str_cut($r[title], 70, false);?></a><span class="fr c999"><?php echo date("Y-m-d", $r[updatetime]);?></span></dd>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			   </dl>
		  </div>
		  
		  
		  <div class="main_rg fr">
				  <div class="box">
			    	<div class="boxtle"><span class="fb14">协会介绍</span></div>
							<div class="boxmain">
					     <dl class="about">
						     	<dt><img alt="协会介绍" src="/statics/images/founder.png" /></dt>
							 	 <dd>　 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=eb45d0d051e68c81af9c2401bf422253&sql=SELECT+%2A+FROM+v9_page+where+catid%3D6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=6 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
   <?php echo str_cut(strip_tags($val[content]),1000,'');?>...
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?><a href="http://www.ukcnetpa.org/index.php?m=content&c=index&a=lists&catid=6" class="cf60">详细>></a></dd>
							 						 </dl>
									</div>
			    </div>


			   			   
			   
			   
			   <!--div class="space"></div>
		       <div class="box">
			        <div class="tle"><b class="f14">服务业务</b></div>
					<div class="boxmain">
						
					   <div class="yewu">
						 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f465ea253c7b700bf6360d78420b27b&action=category&catid=14&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','limit'=>'12',));}?>
						 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						 <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
						 <?php $n++;}unset($n); ?>
						 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						 </div>
					</div>
			   </div-->			   

	      </div>
	 </div>
	 <div class="space"></div>
	 <div class="link friendlylinktile">
		  <div class="plink">
			   <div class="links">
			   合作伙伴:<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=346afe046985bd3e94729c5db3d64022&action=type_list&siteid=%24siteid&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
				<a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			   </div>
		  </div>
	 </div>
<?php include template("content","footer"); ?>


