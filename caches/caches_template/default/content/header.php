<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" type="text/css" />
</head>

<body>
<div class="header">
     <div class="top">
	      <div class="w990">
	           <div class="logo fl"><a href="<?php echo APP_PATH;?>"><img src="<?php echo IMG_PATH;?>logo.png" /></a></div>
		       <div class="fr">
		  	        <p class="topmenu"><a href="javascript:void(0)" onClick="myhomepage()" name="homepage">设为首页</a>|<a href="javascript:void(0)" onClick="addfavorite()">加入收藏</a>|<a href="http://www.lawcqg.net/" target="_blank">ENGLISH</a></p>
					
			        <!--p class="phone"><img src="<?php echo IMG_PATH;?>phone.png" /></p-->
		       </div>
		  </div>
	 </div>
	 <div class="nav">
	      <ul class="navmain">
		      <li><a href="<?php echo APP_PATH;?>"<?php if(!$catid && $_GET['m']!=guestbook) { ?> class="hover"<?php } ?>>网站首页</a></li>   
			  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a4df8c5e5edc2c954bf45481ccd8b7ba&action=category&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'8',));}?>
			  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			  <li><a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?>class="hover"<?php } ?>><?php echo $r['catname'];?></a></li>    
			  <?php $n++;}unset($n); ?>
			  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			  
		  </ul>
	 </div>
	 <!--div class="subnav">
	      <div class="w990"><b>热门内容：</b>
		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db83783eb87175b23c97262969cdf11d&action=category&catid=14\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','limit'=>'20',));}?>
		  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
          <?php if($n !== count($data)) { ?>|<?php } ?>
          <?php $n++;}unset($n); ?>
		  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		  </div>
	 </div-->
	 <div class="banner"><a href="<?php echo APP_PATH;?>"><img src="<?php echo IMG_PATH;?>ad/banner.jpg" /></a></div>
</div>
