<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($cat_name); ?></title>
	 <meta name="keywords" content="<?php echo ($store["seo_keywords"]); ?>" />
    <meta name="description" content="<?php echo ($store["seo_description"]); ?>"/>

	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery-1.7.1.min.js"></script>

	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.touchSlider.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/index.js"></script>
	<script src="/Public/js/layer/layer.js"></script> 

	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/public.css">
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/index.css.css">
	
</head>
<body>
	<!-- 右侧边栏开始 -->
	<div class="sidebar">
		<div class="sidebarA">
			<div class="sidebarAa">
				<img src="<?php echo STYLE;?>/images/1881149_2071302863.png"><a href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($store[store_aliwangwang]); ?>&site=yundi&s=1&charset=utf-8">我</a></div>
			<ul>
				<li><img src="<?php echo STYLE;?>/images/2172383_1513159559.png" class="sidebarAb"><a href="#">权益</a></li>
				<li><img src="<?php echo STYLE;?>/images/2174403_1513159559.png" class="sidebarAb"><a href="#">上新</a></li>
				<li><img src="<?php echo STYLE;?>/images/2182371_1513159559.png" class="sidebarAb"><a href="#">足迹</a></li>
				<li><img src="<?php echo STYLE;?>/images/2175353_1513159559.png" class="sidebarAb"><a href="#">市场</a></li>
			</ul>
		</div>
		<div class="sidebarB">
			<a href="#top">
				<ul>				
					<li><img src="<?php echo STYLE;?>/images/2192303_1513159559.png" class="sidebarBb"></li>				
				</ul>
			</a>			
		</div>

	</div>
	
<!-- 头部开始 -->
	<header class="header">
	<!-- 顶部导航条开始 -->
		
		<!-- 头部下的导航 -->
		<nav class="hnav">

			<div class="hnavone">
				<div class='hnavoneL'>
				<a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>"><img src="<?php echo ($store["store_logo"]); ?>" style="width:150px;"></a>  <!-- logo -->
				</div>
				<div class="hnavoneM">
					<div class="hnavoneMo">
						<div class="hnavoneM1" style="line-height:60px;"><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>"><?php echo ($store["store_name"]); ?></a></div>
					</div>
				</div>
				<div class="hnavoneR">
						<div class="hnavoneRo">
 							<form method="get" action="<?php echo C('DOMAIN'); echo U('Goods/search');?>">
 							<input type="hidden" value="search" id="search_act" name="act">
   							<input type="text" name="q" class="ssk" value="<?php echo ($_GET['keywords']); ?>" placeholder="<?php echo ((isset($_GET['keywords']) && ($_GET['keywords'] !== ""))?($_GET['keywords']):'请输入产品关键字'); ?>" class="seach" />

							<button type="button" class="submitS" onclick="submits();">搜本旺铺</button>
							<div class="hnavoneRo1">
								<ul>
									<li><a href="#">服装</a></li>
									<li><a href="#">包包</a></li>
									<li><a href="#">家具</a></li>
									<li><a href="#">家电</a></li>
								</ul>
				
							</div>

						</div>
						<div class="hnavoneRt">
   							<button type="submit"><b>搜全站</b></button>
						</div>
				</div>
			</div>
		</nav>
		<div class="Myinformation" style="background-image:url(<?php echo ($store["store_banner"]); ?>);"></div>  <!-- 店铺logo -->
	</header>
	<main class="main">
		<section class="top_nav">
			<div class="top_nav_bar">
				<ul>
           			<li><a href="

					<?php if($nav_where): echo U('Store/index'); else: echo U('Store/index',array('store_id'=>$store[store_id])); endif; ?>

           			"  style="color:#ff5400;">首页</a> </li>
					<li

					<?php  foreach($main_cat as $v){ foreach($sub_cat[$v['cat_id']] as $vo){ if($v['cat_id'] == $_GET['cat_id'] || $vo['cat_id'] == $_GET['cat_id']){ echo 'class="top_nav_barM"'; } } } ?>
					

					><a href="
					<?php if($nav_where): echo U('Store/goods_list'); else: echo U('Store/goods_list',array('store_id'=>$store[store_id])); endif; ?>
					">供应产品 ▼</a>
							<div class="SupplyProducts">
								<ul>
									 <?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
									<li onmouseover="xs(<?php echo ($v['cat_id']); ?>);"><a target="_blank" href="
									<?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$v[cat_id]));?>
									<?php else: ?>
									<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id])); endif; ?>
									" ><?php echo ($v["cat_name"]); ?></a></li>
									
									<?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 --> 
									<span style="display: none;" class="xs<?php echo ($v['cat_id']); ?> xs"><span><a target="_blank"  style="color:#008BB9;" href="
										<?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$vs[cat_id]));?>
									<?php else: ?>
									<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id])); endif; ?>
									"><?php echo ($vs["cat_name"]); ?></a></span><br/></span><?php endforeach; endif; endforeach; endif; ?>
								</ul>
							</div>
					</li>
					<!-- 自定义导航 -->
			           <?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
			        	<?php if(empty($vv[sn_url])): ?><a href=" 
			        	<?php if(($vv[sn_is_list] == 1 and $nav_where)): echo U('Store/article_list',array('sn'=>$vv[sn_id]));?>
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
<script>


// 本店搜索 js
function submits()
{
 var keywords = $('input[name=q]').val();
 if(!keywords){alert('请输入关键字');return;}
 window.location.href="<?php echo U('Store/search');?>?store_id=<?php echo ($store[store_id]); ?>&keywords="+keywords;
}
   function xs(id){
      $('.xs').css('display','none');
      $('.xs' + id).css('display','');
   }






   //收藏店铺
$('#favoriteStore').click(function () {
   var user_id = "<?php echo session('user.user_id');?>";
  if (!user_id) {
    alert('请先登陆!');
  } else {
    $.ajax({
      type: 'post',
      dataType: 'json',
      data: {store_id: $(this).attr('data-id')},
      url: "<?php echo U('Store/collect_store');?>",
      success: function (res) {
        if (res.status == 1) {
          layer.msg('成功添加至收藏夹', {icon: 1});
        } else {
          layer.msg(res.msg, {icon: 3});
        }
      }
    });
  }
});
</script>

 
<style>.default p{text-indent:2em;}</style>
<img src="<?php echo ($news["sn_pic"]); ?>" style="width:100%;"  />
  <div class="wrapper" style="margin-top: 10px;" >
    <div class="ncs-article">
      <div class="ncs-main-container">
        <div class="title">
          <h2 style="width:1200px;margin:0 auto;text-align:center;margin-bottom:10px;"><?php echo ($news["sn_title"]); ?></h2>
        </div>
        <div class="content">
          <div class="default" style="width:1200px;margin:0 auto;overflow: hidden;"><?php echo (htmlspecialchars_decode($news["sn_content"])); ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear">&nbsp;</div>
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

				 <?php echo ($store["store_address"]); ?>  <!-- 详细地址 -->
				 技术支持：<a href="<?php echo C('DOMAIN'); echo U('seller/Admin/login');?>">旺铺管理入口</a> |
				  <a href="#">免责声明 </a>|
				  <a href="#">客服中心</a></p>		
		</div>
		<div class="footer2">  <!-- 友情链接 -->
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
		</div>
		<div class="footer4">
			<p><a href="#"><img src="<?php echo STYLE;?>/images/2493799_691191268.gif"></a></p>
		</div>


	</footer>
	

	
</body>
</html>
</body>
</html>