<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($store["store_name"]); ?></title>
	 <meta name="keywords" content="<?php echo ($store["seo_keywords"]); ?>" />
    <meta name="description" content="<?php echo ($store["seo_description"]); ?>"/>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/index.js"></script>
	<script type="text/javascript" src="<?php echo STYLE;?>/js/lbt.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/lbt.css">

	<link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/index.css">

	
</head>
<body>
	<!-- 头部区域 -->
	<header>
	<div class="logo">
		<span class="logo1"><img width='108px' height='38px' src="<?php echo ($store["store_logo"]); ?>"></span>
	</div>
	<div class="seach">
		<input type="text" name="seach" class="seachA"><input type="image" name="sub" src='<?php echo STYLE;?>/images/soso.jpg' onclick='submits()' class='seachB'>
	</div>
	<script type="text/javascript">
	function submits()
	{
	 var keywords = $('input[name=seach]').val();
	 if(!keywords){alert('请输入关键字');return;}
	 window.location.href="<?php echo U('Store/search');?>?store_id=<?php echo ($store[store_id]); ?>&keywords="+keywords;
	}	
	</script>
	<div class="cl"></div>
</header>
	<!-- 主体区域 -->

	<main class="main">

		<nav class="main_nav">
			<ul>				
				<li style="color:#fff;background:#2B2B2B;width:200px;" class="mainmore"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">所有食品分类</a>
					<div class="mainAll">
						<?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): if($key>3){break;} ?>
						<dl>
							<dt><a style='color:#000;' href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>"><?php echo ($v["cat_name"]); ?></a></dt>
							 <?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): if($key>3)break; ?>
							<dd><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>"><?php echo ($vs["cat_name"]); ?></a></dd><?php endforeach; endif; ?>
						</dl><?php endforeach; endif; ?>
					</div>
				</li>


				<li class="headerN"><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>">首页</a></li>
				<?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
		        	<?php if(empty($vv[sn_url])): ?><a href=" 
		        	<?php if(($vv[sn_is_list] == 1 and $nav_where)): echo U('Store/article_list',array('sn'=>$vv[sn_id]));?>
		        	<?php elseif($vv[sn_is_list] == 1 and !$nav_where): ?>
		        	<?php echo U('Store/newsList',array('store_id'=>$store[store_id],'sn'=>$vv[sn_id]));?>
		        	<?php elseif($nav_where): ?>
		        	<?php echo U('Store/cover',array('sn_id'=>$vv[sn_id]));?>
		        	<?php else: ?>
		        	<?php echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id])); endif; ?>" 
					title = '<?php echo ($vv["sn_keyword"]); ?>'
		        	>
		        	<?php else: ?>
		        	<a href="<?php echo ($vv["sn_url"]); ?>" title = '<?php echo ($vv["sn_keyword"]); ?>'><?php endif; ?>
		        	<?php echo ($vv["sn_title"]); ?></a>
		        	</li><?php endforeach; endif; ?>
		      	<?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li <?php if($vz['cat_id'] == $_GET['cat_id']){echo 'class="top_nav_barM"';}?>>
				<a href="
				<?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$vz[cat_id]));?>
				<?php else: ?>
				<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id])); endif; ?>
				" title='<?php echo ($vz["cat_name"]); ?>'><?php echo ($vz["cat_name"]); ?></a> </li><?php endforeach; endif; ?>
			<div class="cl"></div>
			</ul>
		</nav>
		<!-- 轮播图 -->
		   <div class="banner" id="banner" >
				<?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><a href="#" class="d1" style="background:url(<?php echo ($vimg); ?>) center no-repeat;background-size:100%;"></a><?php endif; endforeach; endif; ?>
				<div class="d2" id="banner_id">
					<ul>
						<?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><li></li><?php endif; endforeach; endif; ?>
					</ul>
				</div>
				<script type="text/javascript">banner()</script>
			</div>
		    <!--case_box-->
	<!-- 轮播图结束 -->
		<div class="s1">
			<?php echo (htmlspecialchars_decode($text[0])); ?>
			<div class='cl'></div>
		</div>
		
		<div  class="s2">
			<div class="s2Top">
				<ul>
					<?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><li class="s2TopM  s2NaN " i='.list<?php echo ($vs[cat_id]); ?>' num = '<?php echo ($vs[cat_id]); ?>'><a href="<?php if($nav_where): echo U('Store/goods_list',array('cat_id'=>$vs[cat_id]));?>
									<?php else: ?>
									<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id])); endif; ?>"><?php echo ($vs["cat_name"]); ?></a></li><?php endforeach; endif; endforeach; endif; ?>
				<div class="cl"></div>
				</ul>
			</div>
			
			<?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><div class="banjia list<?php echo ($vs[cat_id]); ?>"></div><?php endforeach; endif; endforeach; endif; ?>
			<script type="text/javascript">

			function Getgoods(type,obj){
				$.ajax({
					url: '<?php echo U("Store/getshop",array("store_id"=>$_GET[store_id]));?>',
					type: 'POST',
					dataType: 'json',
					data: {type:type,size:6},
					success:function(result){
						var html = '<ul>';
						for (var i = 0; i < result.length; i++) {
							html+='<li><a href="#"><img width="100%" src="'+result[i]['original_img']+'"></a><h4>'+result[i]['goods_name']+'</h4><p><span class="nowM">￥<b>'+result[i]['shop_price']+'</b>.80</span><span class="before"><del>￥'+result[i]['market_price']+'</del></span></p><p class="buy"><a href="#">购买</a></p></li>';
						};
						html+='</ul>';
						obj.html(html).show();
					}
				});
			}

			Getgoods($($('.s2Top > ul li')[0]).attr('num'),$($($('.s2Top > ul li')[0]).attr('i')));
			$($('.s2Top > ul li')[0]).removeClass('s2TopM').addClass('s2Nav');

			$('.s2Top >ul li').bind('mouseover',function(){


				$('.s2Top > ul li').each(function(){				
					$($(this).attr('i')).css('display','none');				
					$($(this).attr('i')).hide();	
					$(this).removeClass('s2Nav');
					$(this).addClass('s2TopM');			

				})
				if($($(this).attr('i')).html()==''){
					Getgoods($(this).attr('num'),$($(this).attr('i')));
				}
				$(this).removeClass('s2TopM');
				$(this).addClass('s2Nav');
				$($(this).attr('i')).show();

			});
			</script>
		</div>
		<?php if(is_array($recommend)): foreach($recommend as $key=>$recomend_goods): ?><hr>
			<div class='s3Top'><p><?php echo ($recomend_goods["cat_name"]); ?><span class="s3tMoll"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$recomend_goods[cat_id]));?>">更多优惠>></a></span></p></div>
			<div class='s3'>
				<div class="s3L">
					<a href="#"><img width="493px" height='374px' src="<?php echo ($recomend_goods["img"]); ?>"></a>
				</div>
				<div class="s3R">
					<ul>
						<?php if(is_array($recomend_goods[cat_id_goods])): foreach($recomend_goods[cat_id_goods] as $key=>$vvv): ?><li><p><?php echo (getSubstr($vvv["goods_name"],0,30)); ?></p>
						<a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$vvv[goods_id]));?>"><img src="<?php echo (goods_thum_images($vvv["goods_id"],240,240)); ?>"></a></li><?php endforeach; endif; ?>
					<div class="cl"></div>
					</ul>
				</div>
			<div class='cl'></div>
			</div><?php endforeach; endif; ?>


		<div class="s5"><?php echo (htmlspecialchars_decode($text[1])); ?></div>
		<div class="cl"></div>
	</main>
		<div class="cl"></div>
<!-- 底部 -->
	<footer class="footer">
		

		<!-- <h3><span style="color:grey;font-size:26px;">CLOTHING BRAND</span><span style="color:#fff;margin-left:20px;font-size:26px;">DESIGN</span></h3> -->
		<h2><a href="#">关于我们</a><a href="#">品牌设计</a><a href="#">新闻资讯</a><a href="#">联系我</a></h2>
		<p>©2016 网站样板-服装 版权所有</p>
		<p><a href="#">手机版</a> 	| 	<a href="#">本站使用云狄建站搭建</a> 	| 	<a href="#">管理登录</a></p>

</footer>
</body>
</html>