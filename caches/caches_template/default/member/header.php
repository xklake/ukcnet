<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo L('member','','member').L('manage_center');?></title>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>member.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
<?php if(isset($show_validator)) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<?php } ?>
</head>
<body>
<div class="header">
    <div class="top">

        <div class="w990">
            <div class="logo fl"><a href="<?php echo APP_PATH;?>"><img src="<?php echo IMG_PATH;?>logo.png" /></a></div>

            <div class="login">
                <div class="langu"><a href="http://www.ukcnetpa.org" target="_self"><img src="<?php echo IMG_PATH;?>chinese.png" /><span>中文</span></a>&nbsp;<a target="_self" href="http://www.ukcnetpa.org/" target="_blank"><img src="<?php echo IMG_PATH;?>enlish.png" /><span>ENGLISH</span></a></div>
                <div class="loginentry"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="300" height="24" frameborder="0" scrolling="no"></iframe>')</script></div>
            </div>


        </div>
    </div>
    <div class="nav">
        <ul class="navmain">
            <li><a href="<?php echo APP_PATH;?>"<?php if(!$catid && $_GET['m']!=guestbook) { ?> class="hover"<?php } ?>>网站首页</a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a4df8c5e5edc2c954bf45481ccd8b7ba&action=category&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'8',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

            <li><a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?>class="hover"<?php } ?>><?php echo $r['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8604e6ed0413308810472820e76f0310&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC&return=da\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$da = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php if($da) { ?>  <!--开始循环二级导航 如果有数据-->
                <ul class="subnav">
                    <?php $n=1;if(is_array($da)) foreach($da AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>" > <?php echo $v['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php } ?>   <!--二级导航循环结束-->
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
    </div>

    <div class="banner"><a href="<?php echo APP_PATH;?>"><img src="<?php echo IMG_PATH;?>ad/banner.jpg" /></a></div>
</div>