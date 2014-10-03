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
	    
			   <?php include template("content", "indexlawer"); ?>
		  
		  <div class="main_ct box fl ml10">
		       <div class="new">
			        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=57dda2358417cb2ec1a28f357c335b2c&action=position&posid=2&num=3&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'3',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dl>
					    <dt><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 60, false);?></a></dt>
						<dd><?php echo str_cut($r[description], 300);?><a href="<?php echo $r['url'];?>" class="cf60">[阅读全文]</a></dd>
					</dl>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			   </div>
			   <dl class="newlist">
				    <dt><span class="fb14 fl">最近更新</span></dt>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=89246ed58ac3bd2714046b42dd2c0323&sql=SELECT+%2A+from+v9_news+where+status%3D99+and+catid+in%2815%2C16%2C17%2C18%2C19%2C20%2C21%2C22%2C23%2C24%2C25%2C26%29++order+by+id+DESC&num=7&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from v9_news where status=99 and catid in(15,16,17,18,19,20,21,22,23,24,25,26)  order by id DESC LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dd><a href="<?php echo $r['url'];?>" class="fl"><?php echo str_cut($r[title], 70, false);?></a><span class="fr c999"><?php echo date("Y-m-d", $r[updatetime]);?></span></dd>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			   </dl>
		  </div>
		  <div class="main_rg fr">
		       <div class="box">
			        <div class="tle"><b class="f14">业务范围</b></div>
					<div class="boxmain">
					     <div class="yewu">
						 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f465ea253c7b700bf6360d78420b27b&action=category&catid=14&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','limit'=>'12',));}?>
						 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						 <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
						 <?php $n++;}unset($n); ?>
						 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						 </div>
					</div>
			   </div>
			   <div class="space"></div>
			   <div class="askimg mb10"><a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=register"></a></div>
			   <div class="box">
			        <div class="tle"><b class="f14">英国投资</b></div>
					<div class="boxmain">
					     <ul class="fagui">
						     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=30875e182fa2dac094e48de60c5b0a80&action=lists&catid=9&num=10&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder DESC','limit'=>'10',));}?>
							 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							 <li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 55, false);?></a></li>
						     <?php $n++;}unset($n); ?>
							 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						 </ul>
					</div>
			   </div>
	      </div>
	 </div>
	 <div class="space"></div>
	 <div class="banner_ad mb10"><a><img src="<?php echo IMG_PATH;?>ad/banner2.png" /></a></div>
	 <div class="column ovh">
	      <div class="column_l fl">
		       <div class="box">
			        <div class="boxtle"><span class="fb14">英国投资</span></div>
					<div class="boxmain">
					     <div class="box_in">
							  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3a7e7a90917cf65163ec840cdf08d75d&sql=SELECT+%2A+FROM+v9_news+WHERE+thumb%21%3D%27%27+%26%26+catid%3D15+ORDER+BY+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE thumb!='' && catid=15 ORDER BY id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						      <dl class="box_t">
							      <dt class="fl"><img src="<?php echo $data['0']['thumb'];?>" alt="<?php echo $data['0']['title'];?>"/></dt>
								  <dd class="fb14"><a href="<?php echo $data['0']['url'];?>" title="<?php echo $data['0']['title'];?>"><?php echo str_cut($data[0][title], 25, false);?></a></dd>
								  <dd class="c666"><?php echo str_cut($data[0][description],80);?><a href="<?php echo $data['0']['url'];?>" class="cf60">[详情]</a></dd>
							  </dl>
							  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  <ul class="boxlist">
							      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=101c212cc458dc2ea7101503cf375276&action=lists&catid=15&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','limit'=>'8',));}?>
								  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								  <li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 55, false);?></a></li> 
								  <?php $n++;}unset($n); ?>
								  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul>
						 </div>
					</div>
			   </div>
		  </div>
		  <div class="column_r fl ml10">
		       <div class="box p10">
					<dl class="box2 fl">
						<dt><a href="<?php echo $CATEGORYS['42']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=81d710a46014ba8ca15cb80d081ec916&action=lists&catid=16&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<dl class="box2 fr">
						<dt><a href="<?php echo $CATEGORYS['43']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef739fe927ebaceaa656eb4e6a34cf5a&action=lists&catid=17&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<div class="space"></div>
					<dl class="box2 fl">
						<dt><a href="<?php echo $CATEGORYS['44']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ea04585f087e24f9c9febc2bd624d87c&action=lists&catid=18&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<dl class="box2 fr">
						<dt><a href="<?php echo $CATEGORYS['45']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c344412db32df29efe300eadd260532&action=lists&catid=19&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
			   </div>
		  </div>
		  <div class="column_l fr">
		       <div class="box">
			        <div class="boxtle"><span class="fb14">英国投资</span></div>
					<div class="boxmain">
					     <div class="box_in">
						      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a1446b303abe25e890ae5ae2b5bd6c11&sql=SELECT+%2A+FROM+v9_news+WHERE+thumb%21%3D%27%27+%26%26+catid%3D20+ORDER+BY+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE thumb!='' && catid=20 ORDER BY id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						      <dl class="box_t">
							      <dt class="fl"><img src="<?php echo $data['0']['thumb'];?>" alt="<?php echo $data['0']['title'];?>"/></dt>
								  <dd class="fb14"><a href="<?php echo $data['0']['url'];?>" title="<?php echo $data['0']['title'];?>"><?php echo str_cut($data[0][title], 25, false);?></a></dd>
								  <dd class="c666"><?php echo str_cut($data[0][description], 80);?><a href="<?php echo $data['0']['url'];?>" class="cf60">[详情]</a></dd>
							  </dl>
							  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  <ul class="boxlist">
							      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=19ee5fb10fb4205fcfe173d5e8a47ce6&action=lists&catid=20&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','order'=>'listorder DESC','limit'=>'8',));}?>
								  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								  <li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 55, false);?></a></li> 
								  <?php $n++;}unset($n); ?>
								  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul>
						 </div>
					</div>
			   </div>
		  </div>
	 </div>
	 <div class="space"></div>
	 <div class="banner_ad mb10"><a><img src="<?php echo IMG_PATH;?>ad/banner2.png" /></a></div>
	 <div class="column ovh">
	      <div class="column_l fl">
		       <div class="box">
			        <div class="boxtle"><span class="fb14">英国投资</span></div>
					<div class="boxmain">
					     <div class="box_in">
						      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=36c29c52b4dcebb8f268d478b5620631&sql=SELECT+%2A+FROM+v9_news+WHERE+thumb%21%3D%27%27+%26%26+catid%3D21+ORDER+BY+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE thumb!='' && catid=21 ORDER BY id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						      <dl class="box_t">
							      <dt class="fl"><img src="<?php echo $data['0']['thumb'];?>" alt="<?php echo $data['0']['title'];?>"/></dt>
								  <dd class="fb14"><a href="<?php echo $data['0']['url'];?>" title="<?php echo $data['0']['title'];?>"><?php echo str_cut($data[0][title], 25, false);?></a></dd>
								  <dd class="c666"><?php echo str_cut($data[0][description], 80);?><a href="<?php echo $data['0']['url'];?>" class="cf60">[详情]</a></dd>
							  </dl>
							  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  <ul class="boxlist">
							      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=181c600a94245ddcb5dfb5f8bf72c492&action=lists&catid=21&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','order'=>'listorder DESC','limit'=>'8',));}?>
								  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								  <li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 55, false);?></a></li> 
								  <?php $n++;}unset($n); ?>
								  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul>
						 </div>
					</div>
			   </div>
		  </div>
		  <div class="column_r fl ml10">
		       <div class="box p10">
					<dl class="box2 fl">
						<dt><a href="<?php echo $CATEGORYS['48']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ebd9b21a58b52123bc39688cfb423097&action=lists&catid=22&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<dl class="box2 fr">
						<dt><a href="<?php echo $CATEGORYS['49']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c04cb843b0bc40eeed1b80856591611&action=lists&catid=23&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<div class="space"></div>
					<dl class="box2 fl">
						<dt><a href="<?php echo $CATEGORYS['50']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e021618fe6d8f2b5e091bbc4fcf6817f&action=lists&catid=24&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
					<dl class="box2 fr">
						<dt><a href="<?php echo $CATEGORYS['51']['url'];?>" class="fb14">英国投资</a></dt>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4aa898757c85c9dbc3f4f7d30581de61&action=lists&catid=25&num=5&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 45, false);?></a></dd>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
			   </div>
		  </div>
		  <div class="column_l fr">
		       <div class="box">
			        <div class="boxtle"><span class="fb14">英国投资</span></div>
					<div class="boxmain">
					     <div class="box_in">
						      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f40b07ebe05cad79e82277ceff920236&sql=SELECT+%2A+FROM+v9_news+WHERE+thumb%21%3D%27%27+%26%26+catid%3D26+ORDER+BY+id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news WHERE thumb!='' && catid=26 ORDER BY id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						      <dl class="box_t">
							      <dt class="fl"><img src="<?php echo $data['0']['thumb'];?>" alt="<?php echo $data['0']['title'];?>"/></dt>
								  <dd class="fb14"><a href="<?php echo $data['0']['url'];?>" title="<?php echo $data['0']['title'];?>"><?php echo str_cut($data[0][title], 25, false);?></a></dd>
								  <dd class="c666"><?php echo str_cut($data[0][description], 80);?><a href="<?php echo $data['0']['url'];?>" class="cf60">[详情]</a></dd>
							  </dl>
							  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  <ul class="boxlist">
							      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e0df0beb1f72ddf9ed6507f98c896c7&action=lists&catid=26&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','order'=>'listorder DESC','limit'=>'8',));}?>
								  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								  <li><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 55, false);?></a></li> 
								  <?php $n++;}unset($n); ?>
								  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul>
						 </div>
					</div>
			   </div>
		  </div>
	 </div>
	 <div class="space"></div>
	 <div class="link">
		  <div class="tle"><span class="fb14 fl">友情链接</span></div>
		  <div class="p10">
			   <div class="links">
			   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=346afe046985bd3e94729c5db3d64022&action=type_list&siteid=%24siteid&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
				<a href="<?php echo $v['url'];?>" target="blank"><?php echo $v['name'];?></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			   </div>
		  </div>
	 </div>
<?php include template("content","footer"); ?>
