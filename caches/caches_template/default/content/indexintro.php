<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="main_lf fl">
		       		        <div class="box">
			        <div class="boxtle"><span class="fb14">协会介绍</span></div>
					<div class="boxmain">
					     <dl class="about">
						     	<dt><img alt="协会介绍" src="/statics/images/founder.png" /></dt>
							 	 <dd>　 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=eb45d0d051e68c81af9c2401bf422253&sql=SELECT+%2A+FROM+v9_page+where+catid%3D6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=6 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
  <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
   <?php echo str_cut(strip_tags($val[content]),636,'');?>...
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?><a href="" class="cf60">详细>></a></dd>
							 						 </dl>
					</div>
			    </div>

			   <div class="space"></div>
			   <div class="box">
          <div class="boxtle"><span class="fb14">联系方式</span></div>
					<div class="boxmain">
					     <dl class="ziliao">
							 <dd>电话：(44)845 224 3185</dd>
							 <dd>电邮：<a href="mailto:info@ukcnetpa.org">info@ukcnetpa.org</a></dd>
							 <dd>传真：(44)20 203 2505</dd>							 
							 <dd>邮编：WC2H 0NE</dd>
							 <dd>工作时间：9am - 6pm (Monday - Friday)</dd>
							 <dd>地址：71-73 Charing Cross Road, London, WC2H 0NE,UK(英国)</dd>
							</dl>
					</div>
        </div>          

			   <div class="space"></div>
			   <div class="box">
                    <div class="boxtle"><span class="fb14">企业赞助</span></div>
					<div class="boxmain">
                        
						</dl>
                       
					</div>
                </div>          
                
                </div>