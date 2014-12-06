<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="main_lf fl">
			   <div class="box">
          	<div class="boxtle"><span class="fb14">企业赞助</span></div>
						<div class="sponser">
							<ul> 
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=2ab9027725b2df5d47ed42a2410cc923&action=type_list&siteid=%24siteid&order=listorder+DESC&return=dat&linktype=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','linktype'=>'1','limit'=>'20',));}?> 
								<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?> 
									<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?><img src="<?php echo $v['logo'];?>" alt="<?php echo $v['title'];?>"/></a></li> 
								<?php $n++;}unset($n); ?> 
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
							</ul>
						</div>
					</div>
</div>