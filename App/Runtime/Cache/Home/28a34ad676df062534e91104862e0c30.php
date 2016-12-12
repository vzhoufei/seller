<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta content="网站关键字" name="keywords">
	<meta content="网站关键字seo" name="description">
	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/index.js"></script>

	
	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.banner.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/banner.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/lbt.css">
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/index.css">
</head>
<body>


	<!-- 头部区域 -->
<header>
	<div class="logo">
		<img width='108px' height='38px' src="<?php echo ($store["store_logo"]); ?>">
	</div>
	
	<nav class="nav">
		<ul>
			<li class="headerN"><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>">首页</a></li>
			<li><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">最新产品</a>
				<div class="navlist">
					<ul>
						<?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
                      	<li>
                      		<a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>"><?php echo ($v["cat_name"]); ?></a>
                      		<div class="navlists">
                          		<ul>
                          			<?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 -->
                             			<li>
                             				<a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>"><?php echo ($vs["cat_name"]); ?></a>
                             			</li><?php endforeach; endif; ?>
                          		</ul>
                      		</div>
                  		</li><?php endforeach; endif; ?>
					</ul>
				</div>

			</li>
			<?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
	          	<?php if(empty($vv[sn_url])): ?><a href=" 
	        	<?php if(($vv[sn_is_list])): echo U('Store/newsList',array('store_id'=>$store[store_id],'sn'=>$vv[sn_id]));?>
	        	<?php else: ?>
	        	<?php echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id])); endif; ?>" 
	        	>
	        	<?php else: ?>
	        	<a href="<?php echo ($vv["sn_url"]); ?>" title = '<?php echo ($vv["sn_keyword"]); ?>'><?php endif; ?>
	        	<?php echo ($vv["sn_title"]); ?></a>
	        </li><?php endforeach; endif; ?>
	        <!-- 分类在导航显示 -->
	        <?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li class="sp" >
	      			<a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id]));?>"><?php echo ($vz["cat_name"]); ?></a>
	      		</li><?php endforeach; endif; ?>
		<div class="cl"></div>
		</ul>
	</nav>
	<div class="cl"></div>
</header>
	<!-- 主体区域 -->

	<main class="main">

		<!-- 轮播图 -->
		  <div id="wrapper">
				<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							<?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><li data-transition="3dcurtain-horizontal" data-slotamount="15" data-masterspeed="300">
									<img src="<?php echo ($vimg); ?>" alt="" />									
								</li><?php endif; endforeach; endif; ?>					
						</ul>
					</div>
				</div>
			</div>		  
	<!-- 轮播图结束 -->
		<!-- 正文开始 -->
		<div class="s1">
			<?php echo (htmlspecialchars_decode($text[0])); ?>
		</div>

		<div class="s2">
			<div class="s2Main">
				<div><a href="#"><img src="<?php echo STYLE;?>/image/s2a.png"></a></div>
				<div class="s2goods">
					<ul>
						<?php if(is_array($new_goods)): foreach($new_goods as $key=>$v): if($key>3){break;} ?>
						<li>
						<div class="s2MainSou"><a href="#"><img src="<?php echo STYLE;?>/image/sou.png"></a></div>
							<a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><img src="<?php echo (goods_thum_images($v["goods_id"],236,250)); ?>"></a>
							<p><a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><?php echo (getSubstr($v["goods_name"],0,15)); ?></a></p>
							<p>商城价： <span>￥<?php echo ($v["shop_price"]); ?></span></p>
							<span class="s2goodSbuy"><a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>">购买</a></span>
							</li><?php endforeach; endif; ?>
						
						<div class="cl"></div>
						</ul>

				</div>

			</div>
		<div class="cl"></div>
		</div>
		
		<div class="s3">
			<div><img src="<?php echo STYLE;?>/image/s3a.png"></div>
			<div class="s3Main">
				<ul>
				<?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$v): ?><li><a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><img src="<?php echo (goods_thum_images($v["goods_id"],236,250)); ?>"></a>
					<div class="s3MainA">
						<p><?php echo (getSubstr($v["goods_name"],0,15)); ?></p>
						<p>市场价：<span>￥<?php echo ($v["market_price"]); ?></span></p>
						<p>商城价：￥<?php echo ($v["shop_price"]); ?></p>
						<a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>">购买</a>
					</div>
				</li><?php endforeach; endif; ?>
					<div class="cl"></div>
				</ul>
			</div>
		</div>

		<div class="s4">
			<div><img src="<?php echo STYLE;?>/image/s4a.png"></div>
			<div class="s4Main">
					<ul>
						<?php if(is_array($collect_goods)): foreach($collect_goods as $key=>$vo): if($key>3){break;} ?>
						<li><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><img src="<?php echo (goods_thum_images($vo["goods_id"],246,379)); ?>"></a></li><?php endforeach; endif; ?>
						<div class="cl"></div>
					</ul>
			</div>
		</div>


		<div class="cl"></div>
	</main>
		<div class="cl"></div>
<!-- 底部 -->
	<footer class="footer">
	<div class="footMain">
		<ul>
			<li><img src="<?php echo STYLE;?>/image/aixin.jpg">100%授牌正品</li>
			<li><img src="<?php echo STYLE;?>/image/songhuo.jpg">满688免运费</li>
			<li><img src="<?php echo STYLE;?>/image/qitian.jpg">七天无条件退货</li>
			<li><img src="<?php echo STYLE;?>/image/zhekou.jpg">超级折扣</li>
			<li><img src="<?php echo STYLE;?>/image/dianhua.jpg">020-12345678</li>
				<div class="cl"></div>
			</ul>


	</div>
		<h3><span style="color:grey;font-size:26px;">CLOTHING BRAND</span><span style="color:#666;margin-left:20px;font-size:26px;">DESIGN</span></h3>
		<h2><a href="#">关于我们</a><a href="#">品牌设计</a><a href="#">新闻资讯</a><a href="#">联系我</a></h2>
		<p>©2016 网站样板-服装 版权所有</p>
		<p><a href="#">手机版</a> 	| 	<a href="#">本站使用云狄建站搭建</a> 	| 	<a href="#">管理登录</a></p>
</footer>
</body>
</html>