<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="佛山市欧森特门窗有限公司"/>
<meta name="description" content="佛山市欧森特门窗有限公司"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link type="text/css" rel="stylesheet" href="<?php echo STYLE;?>/Css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/Css/slick.css"/>
<link rel="stylesheet" href="<?php echo STYLE;?>/Css/kefu.css">
<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/index.css">
<script type="text/javascript" src="<?php echo STYLE;?>/Scripts/jquery.js"></script> 
<script type="text/javascript" src="<?php echo STYLE;?>/Scripts/index.js"></script>
</head>
<body>

<!-- 头部开始 -->
 <header class="header">
  <!-- 顶部导航条开始 -->
    <!-- <section class="headerM">
      <div class="headerML fl">
        <span>欢迎来到</span><a href="<?php echo C('DOMAIN');?>" class="a"><?php echo ($store["store_name"]); ?></a>
        <?php if($user["user_id"] > 0): ?><span></span><a href="<?php echo C('DOMAIN'); echo U('User/index');?>" style="color:#FF5400;"><?php echo ($user["nickname"]); ?></a> <a href="<?php echo C('DOMAIN'); echo U('user/logout');?>">安全退出</a>
         <?php else: ?>
        <span>已有账号：</span><a href="<?php echo C('DOMAIN'); echo U('user/login');?>" class="a">登陆</a><a href="<?php echo C('DOMAIN'); echo U('user/register');?>" class="a">立即注册</a><?php endif; ?>
        </div>
      <div class="headerMR fr">
        <ul>
          <li><a href="<?php echo C('DOMAIN');?>" >云狄首页</a><span>|</span></li>
          <li class="headerMRshow"><a href="#" >个人中心</a><i>&gt;</i><span>|</span>
            <div class="myShop">
              <dl><dt><a href="<?php echo C('DOMAIN'); echo U('seller/Admin/login');?>">买家中心</a></dt>
                </dl>
            </div></li>
          <li class="headerMRshow"><a href="<?php echo C('DOMAIN'); echo U('User/goods_collect');?>">我的收藏夹</a><i>&gt;</i>
            <div class="favorites">
              <dl><dd><a href="<?php echo C('DOMAIN'); echo U('User/goods_collect');?>">收藏的货品</a></dd>
                <dd><a href="javascript:;" id="favoriteStore" data-id="<?php echo ($store['store_id']); ?>" target="_blank">收藏本店铺</a></dd>
                </dl>
            </div></li>
        </ul>
        </div>
        <div class="cl"></div>
    </section> -->
    <!-- 头部下的导航 -->
    <nav class="hnav">
      <div class="hnavone">
        <div class='hnavoneL'>
        <a href="#"><img width='108px' height='38px' src="<?php echo ($store["store_logo"]); ?>"></a>
        </div>
        <div class="hnavoneM">
          <!-- <div class="hnavoneMo">
            <div class="hnavoneM1"><a href="<?php if($nav_where): echo U('Store/index'); else: echo U('Store/index',array('store_id'=>$store[store_id])); endif; ?>">云迪Shop</a></div>
            <div class="hnavoneM2"><a href="<?php if($nav_where): echo U('Store/index'); else: echo U('Store/index',array('store_id'=>$store[store_id])); endif; ?>"><?php echo ($store["store_name"]); ?></a></div>
          </div> -->
            <!-- <div class="hnavoneM3">
              <a href="#">货描<?php echo ($store["store_desccredit"]); ?></a>
              <a href="#">响应<?php echo ($store["store_servicecredit"]); ?></a>
              <a href="#">发货<?php echo ($store["store_deliverycredit"]); ?></a>
            </div> -->
        </div>
        <div class="hnavoneR">
            <div class="hnavoneRo">
              <input type="hidden" value="search" id="search_act" name="act">
                <input type="text" name="q" class="ssk" value="<?php echo ($_GET['keywords']); ?>" placeholder="<?php echo ((isset($_GET['keywords']) && ($_GET['keywords'] !== ""))?($_GET['keywords']):'请输入产品关键字'); ?>" class="seach" />
                <button type="button" class="submitS" onclick="submits();">搜索</button>
              <script type="text/javascript">
              function submits()
                {
                 var keywords = $('input[name=q]').val();
                 if(!keywords){alert('请输入关键字');return;}
                 window.location.href="<?php echo U('Store/search');?>?store_id=<?php echo ($store[store_id]); ?>&keywords="+keywords;
                }
                </script>
            </div>
        </div>
      </div>
    </nav>
  </header>


<section class="top_nav">
      <div class="top_nav_bar">
        <ul>
          <li class="top_nav_barM"><a href="#" style="color:#ff5400;">首页</a></li>
          <li
          <?php  foreach($main_cat as $v){ foreach($sub_cat[$v['cat_id']] as $vo){ if($v['cat_id'] == $_GET['cat_id'] || $vo['cat_id'] == $_GET['cat_id']){ echo 'class="top_nav_barM"'; } } } ?>
          ><a href="
          <?php if($nav_where): echo U('Store/goods_list'); else: echo U('Store/goods_list',array('store_id'=>$store[store_id])); endif; ?>
          ">供应产品</a>
              <div class="SupplyProducts">
                <ul>
                   <?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
                  <li><a href="
                  <?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$v[cat_id]));?>
                  <?php else: ?>
                  <?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id])); endif; ?>
                  " ><?php echo ($v["cat_name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
              </div>
          </li>
          <!-- 自定义导航 -->
                 <?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
                <?php if(empty($vv[sn_url])): ?><a href=" 
                <?php if(($vv[sn_is_list] == 1 and $nav_where)): echo U('Store/newsList',array('sn'=>$vv[sn_id]));?>
                <?php elseif($vv[sn_is_list] == 1 and !$nav_where): ?>
                <?php echo U('Store/newsList',array('store_id'=>$store[store_id],'sn'=>$vv[sn_id]));?>
                <?php elseif($nav_where): ?>
                <?php echo U('Store/cover',array('sn_id'=>$vv[sn_id]));?>
                <?php else: ?>
                <?php echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id])); endif; ?>"
                >
                <?php else: ?>
                <a href="<?php echo ($vv["sn_url"]); ?>"><?php endif; ?>
                <?php echo ($vv["sn_title"]); ?></a>
                </li><?php endforeach; endif; ?>
        <!-- 分类在导航显示 -->
            <?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li <?php if($vz['cat_id'] == $_GET['cat_id']){echo 'class="top_nav_barM"';}?>>
          <a  target="_blank" href="

          <?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$vz[cat_id]));?>
          <?php else: ?>
          <?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id])); endif; ?>
          "><?php echo ($vz["cat_name"]); ?></a> </li><?php endforeach; endif; ?>
        <div class="cl"></div>
        </ul>
      </div>      
    </section>
<!-- 头部结束 -->
  <div class="banner">
    <script src="<?php echo STYLE;?>/Scripts/jquery.superslide.js" rel="stylesheet" type="text/javascript" ></script>
    <div class="ban_1_2_559">
      <div class="bd">
        <ul>
          <?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><li style="background:url(<?php echo ($vimg); ?>) 50% 0px no-repeat;"><a href="<?php echo ($store[store_slide_url][ $k ]); ?>"  ></a></li><?php endif; endforeach; endif; ?>
        </ul>
      </div>
      <div class="hd">
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)" style="display:none;"></a>
      <a class="next" href="javascript:void(0)" style="display:none;"></a>
    </div>
  	<script type="text/javascript">
  		$(".ban_1_2_559").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("slow",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
  		$(".ban_1_2_559").slide( { mainCell:".bd ul",titCell:".hd li", effect:"fold",autoPlay:true,mouseOverStop:true,pnLoop:true });
  	</script>
  </div>
  <!-- 模块1 -->
  <div class="center">
     <?php
 $md5_key = md5("select * from yd_store_mod where store_id = $sn_store_id limit 1"); $sql_result_mod = S("sql_".$md5_key); if(empty($sql_result_mod)) { $Model = new \Think\Model(); $result_name = $sql_result_mod = $Model->query("select * from yd_store_mod where store_id = $sn_store_id limit 1"); S("sql_".$md5_key,$sql_result_mod,TPSHOP_CACHE_TIME); } foreach($sql_result_mod as $key=>$mod): echo (htmlspecialchars_decode($mod["one"])); endforeach; ?>
  </div>
  <!-- 模块1结束 -->
  <div class="mo4">
    <div class="center">     
          <h3>推荐产品</h3>
          <p>全国数百家店每年为千百万家庭提供高端产品</p>
         <hr />
         
        <div class="mo5">             
          <script src="<?php echo STYLE;?>/Scripts/zoompic.js"></script>
                  <div id="focus_Box">
                  	<span class="prev">&nbsp;</span>
                  	<span class="next">&nbsp;</span>
                  	<ul>
                      <?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$v): ?><li>
                  			<img width="445" height="308"  src="<?php echo (goods_thum_images($v["goods_id"],445,308)); ?>" />
                  		</li>
                   	</ul><?php endforeach; endif; ?>
                  </div>                      
         <div class="clear"></div>
    </div>       
  </div>
  <div class="clear"></div>
</div>


    <!-- 产品展示 -->
    <h2 class="goodsShow">产品展示</h2>
      <div id="goodsShow">
        <ul>
          <?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$v): ?><li><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>" ></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div id="switch">
      <button class="back"></button>
      <button class="gogo"></button>
   </div>
  <div class="center">
    <?php
 $md5_key = md5("select * from yd_store_mod where store_id = $sn_store_id limit 1"); $sql_result_mod2 = S("sql_".$md5_key); if(empty($sql_result_mod2)) { $Model = new \Think\Model(); $result_name = $sql_result_mod2 = $Model->query("select * from yd_store_mod where store_id = $sn_store_id limit 1"); S("sql_".$md5_key,$sql_result_mod2,TPSHOP_CACHE_TIME); } foreach($sql_result_mod2 as $key=>$mod2): echo (htmlspecialchars_decode($mod2["two"])); endforeach; ?>
  </div>

  <div class="center">
    <div class="hua11 fl">
      <?php
 $md5_key = md5("select * from yd_store_navigation where sn_store_id = $sn_store_id and sn_is_list = 1 limit 3"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from yd_store_navigation where sn_store_id = $sn_store_id and sn_is_list = 1 limit 3"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): ?><div class="hua1 ">
        <h2><img src="<?php echo STYLE;?>/Picture/index8-02_07.jpg"/><span><?php echo ($v["sn_title"]); ?><a href="<?php echo U('Store/newsList',array('store_id'=>$sn_store_id,'sn'=>$v[sn_id]));?>">MORE+</a></span></h2>
       </div>
        <?php
 $md5_key = md5("select * from yd_store_art where sn_id = $v[sn_id] and is_show = 1 limit 11"); $sql_result_text = S("sql_".$md5_key); if(empty($sql_result_text)) { $Model = new \Think\Model(); $result_name = $sql_result_text = $Model->query("select * from yd_store_art where sn_id = $v[sn_id] and is_show = 1 limit 11"); S("sql_".$md5_key,$sql_result_text,TPSHOP_CACHE_TIME); } foreach($sql_result_text as $key=>$text): ?><p ><a href="<?php if(($nav_where)): echo U('Store/newscontent',array('text'=>$text[id]));?>
              <?php else: ?>
              <?php echo U('Store/newscontent',array('store_id'=>$sn_store_id,'sn'=>$sn_id,'text'=>$text[id])); endif; ?>"><img src="<?php echo STYLE;?>/Picture/index8-06_07.jpg"/><?php echo (mb_substr($text["title"],0,20,'utf-8')); ?>...</a></p><?php endforeach; ?>
     </div><?php endforeach; ?>
  </div>

  <footer class="footer">
  <div class="footer1">
     <?php $region = C('DB_PREFIX'); $region .= 'region';?>
        <p><?php echo ($store["store_name"]); ?> 地址:
        <?php
 $md5_key = md5("select name from $region where id=$store[province_id] limit 1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select name from $region where id=$store[province_id] limit 1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): echo ($v['name']); ?>  <!-- 省 --><?php endforeach; ?>
          <?php
 $md5_key = md5("select name from $region where id=$store[city_id] limit 1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select name from $region where id=$store[city_id] limit 1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): echo ($v['name']); ?> <!-- 市 --><?php endforeach; ?>
          <?php
 $md5_key = md5("select name from $region where id=$store[district] limit 1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select name from $region where id=$store[district] limit 1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): echo ($v['name']); ?> <!-- 区 --><?php endforeach; ?>

         <?php echo ($store["store_address"]); ?>   
  </div>
  <div class="footer2">
    <p><?php $link = C('DB_PREFIX'); $link .= 'friend_link';?>
      <?php
 $md5_key = md5("select link_name,link_url,target from $link where is_show=1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select link_name,link_url,target from $link where is_show=1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $k=>$v): if($k != 0){echo '|';}?>
      <a href="<?php echo ($v["link_url"]); ?>" target="<?php if($v['target'] == 1){echo '_blank';}?>"><?php echo ($v["link_name"]); ?></a><?php endforeach; ?>

      </p>
  </div>
  <div class="footer3">
    <?php $config = C('DB_PREFIX');$config .= 'config';?>
      <p>@2010-2015 
          <?php
 $md5_key = md5("select value from $config where name='store_name' limit 1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select value from $config where name='store_name' limit 1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): echo ($v['value']); ?> <!-- 备案号 --><?php endforeach; ?> 版权所有 
      备案号：<?php
 $md5_key = md5("select value from $config where name='record_no' limit 1"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select value from $config where name='record_no' limit 1"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $key=>$v): echo ($v['value']); ?> <!-- 备案号 --><?php endforeach; ?>
      <a href="#">著作权与商标声明 </a>| 
      <a href="#">法律声明 </a>|
      <a href="#"> 服务条款 </a>|
      <a href="#"> 隐私声明 </a>|
      <a href="#"> 关于云狄 </a>|
      <a href="#"> 联系我们 </a>|
      <a href="#"> 网站导航</a></p>
  <div class="footer4">
   <p><a href="#"><img src="<?php echo STYLE;?>/images/2493799_691191268.gif"></a></p>
  </div>


</footer>
</html>