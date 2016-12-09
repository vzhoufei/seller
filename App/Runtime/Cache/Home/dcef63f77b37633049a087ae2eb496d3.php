<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($store["store_name"]); ?></title>
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

		<section class="headerM">
			<div class="headerML fl">
				<span>欢迎来到</span><a href="<?php echo C('DOMAIN');?>" class="a">云迪网络</a>
				 <?php if($user["user_id"] > 0): ?><span></span><a href="<?php echo U('User/index');?>" style="color:#FF5400;"><?php echo ($user["nickname"]); ?></a> <a href="<?php echo C('DOMAIN'); echo U('Home/user/logout');?>">安全退出</a>
				 <?php else: ?>
				<span>已有账号：</span><a href="<?php echo C('DOMAIN');?>/Home/user/login.html" class="a">登陆</a><a href="<?php echo C('DOMAIN');?>/Home/user/register.html" class="a">立即注册</a><?php endif; ?>
				</div>
			<div class="headerMR fr">
				<ul>
					<li><a href="<?php echo C('DOMAIN');?>" >云狄首页</a><span>|</span></li>
					<li class="headerMRshow"><a href="#" >我的商铺</a><i>&gt;</i><span>|</span>
						<div class="myShop">
							<dl><dt><a href="<?php echo C('DOMAIN');?>/seller/Admin/login.html">买家中心</a></dt>
						</div></li>
					<li class="headerMRshow"><a href="<?php echo C('DOMAIN');?>/Home/User/goods_collect.html">我的收藏夹</a><i>&gt;</i><span>|</span>
						<div class="favorites">
							<dl><dd><a href="<?php echo C('DOMAIN');?>/Home/User/goods_collect.html">收藏的货品</a></dd>
								<dd><a href="<?php echo C('DOMAIN');?>/Home/User/goods_collect/type/2.html">收藏的店铺</a></dd>
								<dd><a href="javascript:;" id="favoriteStore" data-id="<?php echo ($store['store_id']); ?>" target="_blank">收藏本店铺</a></dd>
								</dl>
						</div></li>
					<!-- <li class="headerMRshow"><a href="#" >诚信通服务</a><i>&gt;</i><span>|</span>
						<div class="goodService">
							<dl><dd><a href="#">免费联系我们</a></dd>
								<dd><a href="#">特权体验馆</a></dd>
								<dd><a href="#">新会员申请</a></dd>
								<dd><a href="#">老会员续费</a></dd>
								<dd><a href="#">优惠活动</a></dd>
								</dl>
						</div></li> -->
					<!-- <li class="headerMRshow"><a href="#" >实力商家</a><i>&gt;</i><span>|</span>
						<div class="merchants">
							<dl><dd><a href="#">实力品牌</a></dd>
								<dd><a href="#">实力工厂</a></dd>
								<dd><a href="#">商家入驻</a></dd>
								</dl>
						</div></li>
					<li class="headerMRshow"><a href="#" >我是供应商</a><i>&gt;</i><span>|</span>
						<div class="supplier">
							<dl><dd><a href="#">诚学堂</a></dd>
								<dd><a href="#">交易技巧</a></dd>
								<dd><a href="#">成功经验</a></dd>
								<dd><a href="#">热门活动</a></dd>
								<dd><a href="#">千牛工作台</a></dd>
								<dd><a href="#">网销宝平台</a></dd>
								</dl>
						</div></li>
					<li class="headerMRshow"><a href="#" >客服中心</a><i>&gt;</i><span>|</span>
						<div class="Customer">
							<dl><dd><a href="#">诚学堂</a></dd>
								<dd><a href="#">交易技巧</a></dd>
								<dd><a href="#">成功经验</a></dd>
								<dd><a href="#">热门活动</a></dd>
								<dd><a href="#">千牛工作台</a></dd>
								<dd><a href="#">网销宝平台</a></dd>
								</dl>
						</div></li>
					<li class="headerMRshow"><a href="#" >网站导航</a><i>&gt;</i>
						<div class="navigation">
							<dl><dt><a href="#">行业市场</a></dt>
									<dd><a href="#">服装内衣</a></dd>
									<dd><a href="#">鞋包配饰</a></dd>
									<dd><a href="#">运动户外</a></dd>
									<dd><a href="#">童装母婴</a></dd>
									<dd><a href="#">日用百货</a></dd>
									<dd><a href="#">汽车用品</a></dd>
									<dd><a href="#">电工电气</a></dd>
									<dd><a href="#">家装建材</a></dd>
									<dd><a href="#">数码家电</a></dd>
									</dl>
								
						</div></li> -->
					<div class="cl"></div>
				</ul>
				</div>
				<div class="cl"></div>
		</section>
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
           			<li><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>"  style="color:#ff5400;">首页</a> </li>
					<li

					<?php  foreach($main_cat as $v){ foreach($sub_cat[$v['cat_id']] as $vo){ if($v['cat_id'] == $_GET['cat_id'] || $vo['cat_id'] == $_GET['cat_id']){ echo 'class="top_nav_barM"'; } } } ?>
					

					><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">供应产品 ▼</a>
							<div class="SupplyProducts">
								<ul>
									 <?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
									<li onmouseover="xs(<?php echo ($v['cat_id']); ?>);"><a target="_blank" href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>
									" ><?php echo ($v["cat_name"]); ?></a></li>
									<?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 --> 
									<span style="display: none;" class="xs<?php echo ($v['cat_id']); ?> xs"><span><a target="_blank"  style="color:#008BB9;" href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>"><?php echo ($vs["cat_name"]); ?></a></span><br/></span><?php endforeach; endif; endforeach; endif; ?>
								</ul>
							</div>
					</li>
					<!-- 自定义导航 -->
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
		      	<?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li <?php if($vz['cat_id'] == $_GET['cat_id']){echo 'class="top_nav_barM"';}?>>

					<a  target="_blank" href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id]));?>"><?php echo ($vz["cat_name"]); ?></a> </li><?php endforeach; endif; ?>

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


	<!-- 轮播图部分 -->
		<section class="main_ban">
			<div class="main_visual">

				<div class="flicking_con">
 				<?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><a href="#"><?php echo ($k); ?></a><?php endif; endforeach; endif; ?>
				</div>
				<div class="main_image">
					<ul>
 						<?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><li><span><a href="<?php echo ($store[store_slide_url][ $k ]); ?>" target="_blank"><img src="<?php echo ($vimg); ?>"></a></span></li><?php endif; endforeach; endif; ?>
					</ul>
					<a href="javascript:;" id="btn_prev"></a>
					<a href="javascript:;" id="btn_next"></a>
				</div>
			</div>
	</section>
	<!-- 产品专区 -->
	<section class="main_goods">
		<!-- 产品部分开始 -->
		<div class="main_goodsO">
			<!-- <div class="mian_goodO1">
					<ul>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2569502296_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2566759631_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2569499318_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2571435845_783871151.jpg"></a></li>
						<div class="cl"></div>
					</ul>
				<p><a href="#"><img src="<?php echo STYLE;?>/images/2569508780_783871151.jpg"></a></p>
			</div>
			<div class="mian_goodO2">
				<ul>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2566783093_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2569520321_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2571456040_783871151.jpg"></a></li>
						<li><a href="#"><img src="<?php echo STYLE;?>/images/2566777409_783871151.jpg"></a></li>
						<div class="cl"></div>
					</ul>
				<p><a href="#"><img src="<?php echo STYLE;?>/images/2566795069_783871151.jpg"></a></p>				
			</div>
			<div class="mian_goodO3">
					<ul>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569532658_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2571465477_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569541186_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2571468413_783871151.jpg"></a></li>
							<div class="cl"></div>
						</ul>
					<p><a href="#"><img src="<?php echo STYLE;?>/images/2571504023_783871151.jpg"></a></p>				
				</div>
			<div class="mian_goodO3b">
					<ul>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569562936_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569583333_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569565898_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2571504496_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2566813670_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569574578_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2571498740_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569571750_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2571504701_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2566825040_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2569577635_783871151.jpg"></a></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2566819128_783871151.jpg"></a></li>
							<div class="cl"></div>
						</ul>										
				</div> -->
				<!-- <div class="mian_goodO4">
					<p>限时促销</p>
					<ul>
							<li>
								<a href="#"><img src="<?php echo STYLE;?>/images/2293515964_783871151.220x220.jpg"></a>
								<a href="#" class="mian_goodO4T">儿童玩具木制农场乐园磁性拼拼乐双面拼图画板益智玩具厂家直销</a>
								<span class="mian_goodO4M">¥<b>13.78</b></span>
								<span class="mian_goodO4N">¥14.50</span></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2762662359_783871151.220x220.jpg"></a>
								<a href="#" class="mian_goodO4T">木丸子木制拼图拼版动物拼拼乐双面木质画板儿童益智玩具厂家直销</a>
								<span class="mian_goodO4M">¥<b>13.63</b></span>
								<span class="mian_goodO4N">¥14.50</span></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2907413648_783871151.220x220.jpg"></a>
								<a href="#" class="mian_goodO4T">木丸子儿童木制积木62粒城市交通积木 木制儿童益智玩具积木批发	</a>
								<span class="mian_goodO4M">¥<b>24.00</b></span>
								<span class="mian_goodO4N">¥25.00</span></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/3537454911_783871151.220x220.jpg"></a>
								<a href="#" class="mian_goodO4T">木丸子益智玩具多米诺骨牌双面印刷汉字木制儿童玩具木制积木特价</a>
								<span class="mian_goodO4M">¥<b>16.62</b></span>
								<span class="mian_goodO4N">¥17.50</span></li>
							<div class="cl"></div>
						</ul>				
				</div> -->
				<!-- <div class="mian_goodO5">
					<p>精品推荐</p>
					<ul>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2895614828_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>1.70</b></span>
									<a href="#" class="mian_goodO5T">儿童玩具木制农场乐园磁性拼拼乐双面拼图画板益智玩具厂家直销</a>
									<span class="mian_goodO5N">成交5082笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/3537454911_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>16.63</b></span>
									<a href="#" class="mian_goodO5T">木丸子益智玩具多米诺骨牌双面印刷汉字木制儿童玩具木制积木特价</a>
									<span class="mian_goodO5N">成交1828笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/3537532886_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>17.50</b></span>
									<a href="#" class="mian_goodO5T">木丸子儿童玩具木制积木数学动物汉字学习多米诺骨牌益智玩具</a>
									<span class="mian_goodO5N">成交1142笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2762662359_783871151.230x230.jpg"></a>
								<span class="mian_goodO5M">¥<b>13.63</b></span>
								<a href="#" class="mian_goodO5T">木丸子木制拼图拼版动物拼拼乐双面木质画板儿童益智玩具厂家直销</a>
								<span class="mian_goodO5N">成交1707笔</span></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2987065464_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>11.00</b></span>
									<a href="#" class="mian_goodO5T">木丸子木制拼图大号磁性中国世界地图立体拼图拼板儿童益智玩具</a>
									<span class="mian_goodO5N">成交1142笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2895307124_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>9.50</b></span>
									<a href="#" class="mian_goodO5T">木丸子木制积木玩具四柱形状配对套柱积木儿童益智玩具厂家直销</a>
									<span class="mian_goodO5N">成交1050笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2281025586_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>8.50</b></span>
									<a href="#" class="mian_goodO5T">婴儿童音乐琴宝宝玩具益智巧琴 厂家直销</a>
									<span class="mian_goodO5N">成交1023笔</span></div></li>
							<li><a href="#"><img src="<?php echo STYLE;?>/images/2898947506_783871151.230x230.jpg"></a>
								<div class="mian_goodO5S">
									<span class="mian_goodO5M">¥<b>24.00</b></span>
									<a href="#" class="mian_goodO5T">木丸子儿童木制积木62粒城市交通积木 木制儿童益智玩具积木批发</a>
									<span class="mian_goodO5N">成交1002笔</span></div></li>
							<div class="cl"></div>
						</ul>				
				</div> -->
				<!-- 产品左右显示部分 -->
				<div class="mian_goodO6">
					<!-- 产品左边部分 -->
					
					<aside class="mian_goodO6L">
						<div class='mian_good6L1'>
							<p>产品分类</p>
							<ul>
						 		<?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
									<li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>"><?php echo ($v["cat_name"]); ?></a></li>
									<?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 -->
													<li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>"><?php echo ($vs["cat_name"]); ?></a></li><?php endforeach; endif; endforeach; endif; ?>	
							</ul>
						</div>



						<div class='mian_good6L2'>
							<p>热销排行榜</p>
							<ul>
     						<?php if(is_array($hot_goods)): foreach($hot_goods as $k=>$vo): ?><li><div><span class="mian_good6L2_numa"><?php echo ($k+1); ?></span>成交<span class="mian_good6L2_numb"><?php echo ($vo["sales_sum"]); ?></span>笔</div>
								<div class="mian_good6L2img">
									<img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>">
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><?php echo (getSubstr($vo["goods_name"],0,25)); ?></a>
									<span>￥ <font style="color:#f00;"><?php echo ($vo["shop_price"]); ?></font></span>
								</div>
								</li><?php endforeach; endif; ?>
														
							</ul>
						</div>
						<div class='mian_good6L3'>
							<p>收藏排行榜</p>
							<ul>
								<?php if(is_array($collect_goods)): foreach($collect_goods as $key=>$vo): ?><li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><img src="<?php echo (goods_thum_images($vo["goods_id"],160,160)); ?>" style="width:160px;" /></a>

									<span class="mian_goodO5M">¥<b><?php echo ($vo["shop_price"]); ?></b></span>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" class="mian_goodO5T"><?php echo (getSubstr($vo["goods_name"],0,25)); ?></a>
									<span  class="mian_goodO6R1M"></span>
									<span class="mian_goodO6R1N">收藏(<?php echo ($vo["collect_sum"]); ?>)</span></li><?php endforeach; endif; ?>
								<div class="cl"></div>
							</ul>							
						</div>
						<div class='mian_good6L4'>
							<p>在线接待</p>
							<dl class="worktime">
								<dt>工作时间:</dt>
								<dd>周一至周日   8:30-23:30</dd>
							</dl>
							<dl>
								<dt>在线接待:</dt>
								<dd>阿里旺旺 <a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($store[store_aliwangwang]); ?>&site=cntaobao&s=1&charset=utf-8" >
								<img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($store[store_aliwangwang]); ?>&site=cntaobao&s=1&charset=utf-8" alt="点击这里给我发消息" /></a></dd>
							</dl>		
							<dl>
								<dt>在线接待:</dt>
								<dd>腾讯QQ 
									<a href="http://wpa.qq.com/msgrd?V=1&Uin=<?php echo ($store[store_qq]); ?>&Site=<?php echo ($store["store_name"]); ?>&Menu=yes">
									<img border="0" src=http://wpa.qq.com/pa?p=1:<?php echo ($store[store_qq]); ?>:1 alt="点击这里给我发消息"/></a>

								</dd>
							</dl>														
						</div>

						<div class='mian_good6L5'>
							<p>联系方式</p>
							<!-- <div><a href="">阙伟平</a>先生（运营部门 经理）</div> -->
							<div><a href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($store[store_aliwangwang]); ?>&site=cntaobao&s=1&charset=utf-8"><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($store[store_aliwangwang]); ?>&site=cntaobao&s=1&charset=utf-8" alt="点击这里给我发消息" /></a></div>
							<dl><dd>电      话：<?php echo ($store[store_phone]); ?></dd></dl>
							<dl><dd>移动电话： <?php echo ($store[store_phone]); ?></dd></dl>
						</div>

						<div class='mian_good6L6'>
							<p>公司介绍</p>
							<div><?php echo ($store['seo_description']); ?></div>
							
						</div>
						

						<div class="cl"></div>
					</aside>


					<!-- 产品右边部分 -->
					<div class="mian_goodO6R">
						<div class="mian_goodO6R1">
							<p>新品</p>
							<ul>

								<?php if(is_array($new_goods)): foreach($new_goods as $key=>$v): ?><li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"></a>					
									<span class="mian_goodO5M">¥<b><?php echo ($v["shop_price"]); ?></b></span>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="mian_goodO5T"><?php echo (getSubstr($v["goods_name"],0,30)); ?></a>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="qianggoua">

										<?php if($v[prom_type] > 0): ?><div class="qianggou"><span class="qianggou2">
							                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
											</span></div><?php endif; ?>
									</a>
									<span  class="mian_goodO6R1M"><!-- <img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"> --></span>
									<span class="mian_goodO6R1N">成交<?php echo ($v["sales_sum"]); ?>笔</span></li><?php endforeach; endif; ?>
								
								<div class="cl"></div>
							</ul>
						</div>

						<div class="mian_goodO6R2">
							<p>热销</p>
							<ul>
							<?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$v): ?><li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"></a>
									<span class="mian_goodO5M">¥<b><?php echo ($v["shop_price"]); ?></b></span>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="mian_goodO5T"><?php echo (getSubstr($v["goods_name"],0,30)); ?></a>
									<a  target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="qianggoua">

										<?php if($v[prom_type] > 0): ?><div class="qianggou"><span class="qianggou2">
							                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
											</span></div><?php endif; ?>
									</a>
									<span  class="mian_goodO6R1M"><!-- <img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"> --></span>
									<span class="mian_goodO6R1N">成交<?php echo ($v["sales_sum"]); ?>笔</span></li><?php endforeach; endif; ?>
								
								<div class="cl"></div>
							</ul>
						</div>

						<div class="mian_goodO6R21">
							<p>推荐</p>
							<ul>

							<?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$v): ?><li><a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"></a>
									<span class="mian_goodO5M">¥<b><?php echo ($v["shop_price"]); ?></b></span>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="mian_goodO5T"><?php echo (getSubstr($v["goods_name"],0,30)); ?></a>
									<a target="_blank" href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="qianggoua">

										<?php if($v[prom_type] > 0): ?><div class="qianggou"><span class="qianggou2">
							                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
							                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
											</span></div><?php endif; ?>
									</a>
									<span  class="mian_goodO6R1M"><!-- <img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"> --></span>
									<span class="mian_goodO6R1N">成交<?php echo ($v["sales_sum"]); ?>笔</span></li><?php endforeach; endif; ?>
								<div class="cl"></div>
							</ul>
						</div>


<!-- 
						<div class="mian_goodO6R22">
							<p>多米诺精品</p>
							<ul>
								<li><a href="#"><img src="<?php echo STYLE;?>/images/2917225154_783871151.search.jpg"></a>
									<span class="mian_goodO5M">¥<b>24.00</b></span>
									<a href="#" class="mian_goodO5T">木丸子木制积木儿童创意玩具100粒数字字母学习...</a>
									<span  class="mian_goodO6R1M"><img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"></span>
									<span class="mian_goodO6R1N">成交1002笔</span></li>
								<div class="cl"></div>
							</ul>
						</div> -->

						<!-- <div class="mian_goodO6R23">
							<p>拼图系列精品</p>
							<ul>
								<li><a href="#"><img src="<?php echo STYLE;?>/images/2917225154_783871151.search.jpg"></a>
									<span class="mian_goodO5M">¥<b>24.00</b></span>
									<a href="#" class="mian_goodO5T">木丸子木制积木儿童创意玩具100粒数字字母学习...</a>
									<span  class="mian_goodO6R1M"><img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"></span>
									<span class="mian_goodO6R1N">成交1002笔</span></li>
								<div class="cl"></div>
							</ul>
						</div> -->
						<!-- 
						<div class="mian_goodO6R24">
							<p>益智玩具</p>
							<ul>
								<li><a href="#"><img src="<?php echo STYLE;?>/images/2917225154_783871151.search.jpg"></a>
									<span class="mian_goodO5M">¥<b>24.00</b></span>
									<a href="#" class="mian_goodO5T">木丸子木制积木儿童创意玩具100粒数字字母学习...</a>
									<span  class="mian_goodO6R1M"><img src="<?php echo STYLE;?>/images/1627336_1256177305.png"><img src="<?php echo STYLE;?>/images/logo_alipay.gif"></span>
									</li>
								
								<div class="cl"></div>
							</ul>
						</div> -->
								<div class="mian_goodO6R3">
							<p>友情链接</p>
							<ul>
								<li><a target="_blank" href="#">木丸子品牌旗舰店</a></li>
								<li><a  target="_blank" href="#">木丸子品牌专营店</a></li>
								<li><a target="_blank" href="#">丽水产业带</a></li>
								<div class="cl"></div>
							</ul>
						</div>

						<div class="mian_goodO6R4">
							<p>公司动态</p>
							<span>暂无公司动态</span>
						</div>

						<div class="cl"></div>
					</div>

				<div class="cl"></div>
				</div>

		</div>

	</section>

	</main>
						


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