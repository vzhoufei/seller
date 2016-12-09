<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($store["store_name"]); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($store["seo_keywords"]); ?>" />
<meta name="description" content="<?php echo ($store["seo_description"]); ?>"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="<?php echo STYLE;?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo STYLE;?>/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="<?php echo STYLE;?>/css/ken-burns.css" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo STYLE;?>/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- pop-up-box -->
<script src="<?php echo STYLE;?>/js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
<!-- web-fonts -->  
<link href='http://fonts.useso.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body class="bg">
	<div class="agile-main"> 
		<div class="menu-wrap" id="style-1"> 
			<nav class="top-nav">
				<ul class="icon-list">


					<li class="menu-title"><?php echo ($store["store_name"]); ?></li>
					<li><a class="active" href="<?php echo U('Mobile/Store/index',array('store_id'=>$store[store_id]));?>"><i class="glyphicon glyphicon-home"></i> 首页 </a></li>


					<?php if(is_array($navigation)): foreach($navigation as $key=>$vo): ?><li>
				<?php if($vo[sn_is_list] == 1): ?><a href="<?php echo U('newsList',array('store_id'=>$store[store_id],'sn'=>$vo[sn_id]));?>"><i class="glyphicon glyphicon-info-sign"></i><?php echo ($vo["sn_title"]); ?></a>
				<?php elseif(empty($vo[sn_url]) and $vo[sn_is_list] == 0): ?>
					<a href="<?php echo U('store_news',array('store_id'=>$store[store_id],'sn_id'=>$vo[sn_id]));?>"><i class="glyphicon glyphicon-info-sign"></i> <?php echo ($vo["sn_title"]); ?></a>
				
				<?php else: ?>
				<a href="<?php echo ($vo["sn_url"]); ?>"><i class="glyphicon glyphicon-info-sign"></i><?php echo ($vo["sn_title"]); ?></a><?php endif; ?>

					</li><?php endforeach; endif; ?>
					<?php if(is_array($goods_class)): foreach($goods_class as $key=>$vo): ?><li><a href="<?php echo U('goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vo[cat_id]));?>"><i class="glyphicon glyphicon-info-sign"></i> <?php echo ($vo["cat_name"]); ?> </a></li><?php endforeach; endif; ?>
				</ul>
			</nav>
			<button class="close-button" id="close-button">C</button>
		</div> 
		<div class="content-wrap">
			<div class="header"> 
				<div class="menu-icon">   
					<button class="menu-button" id="open-button">O</button>
				</div>
				<div class="logo">
					<h2><a href="<?php echo U('Mobile/Store/index',array('store_id'=>$store[store_id]));?>"><?php echo ($store["store_name"]); ?></a></h2>
				</div>
				<div class="login">
					<a href="<?php echo U('Mobile/User/index');?>" ><span class="glyphicon glyphicon-user"></span></a> 
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="content">
				<!-- banner -->
				<div class="banner">
					<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
						<!-- Wrapper-for-Slides -->
						<div class="carousel-inner" role="listbox"> 
							<!-- First-Slide -->

							<?php if(is_array($store['mb_slide'])): foreach($store['mb_slide'] as $k=>$v): ?><div class="item <?php if($k == 0): ?>active<?php endif; ?>">
								<div class="banner-img banner-img<?php echo ($k+1); ?>" style="background-image:url(<?php echo ($v); ?>);"> 
									<div class="carousel-caption kb_caption">
										<!-- <h3 data-animation="animated flipInX"><?php echo ($v); ?></h3>   -->
									</div>
								</div>
							</div><?php endforeach; endif; ?>
							
							
						</div> 
						<!-- Left-Button -->
						<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
							<span class="glyphicon  back" aria-hidden="true"></span>
							<span class="sr-only">上一张</span>
						</a> 
						<!-- Right-Button -->
						<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
							<span class="glyphicon  next" aria-hidden="true"></span>
							<span class="sr-only">下一张</span>
						</a> 
					</div>
					<script src="<?php echo STYLE;?>/js/custom.js"></script>
				</div>
					
				<!-- //banner -->
				<!-- welcome -->
				<div class="welcome"> 
					<form action="<?php echo U('search',array('store_id'=>$store['store_id']));?>" method="get">
						<input type="text" style="width:90%" placeholder="请输入关键字" name="keywords" />
						<input type="submit" value="搜索" >
					</form>
				</div> 
				<!-- //welcome -->
				<!-- properties -->
				<div class="w3agile properties">
					<div class="properties-top">
						<h3 class="w3ls-title">热门商品</h3>
					</div> 
					<?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$v): ?><div class="properties-bottom">
						<div class="properties-img">
							<img src="<?php echo ($v["original_img"]); ?>" alt="">
							</div>
						<div class="w3ls-text">
							<h5 style="height: 30px;"><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><?php echo mb_substr($v['goods_name'],0,26,'utf-8');?></a></h5>
							<h6>￥<?php echo ($v["shop_price"]); ?></h6>
							<p><b>已卖出</b><?php echo ($v["click_count"]); ?>件</p>
							<p><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="lijigoumai">立即购买</a></p>
						</div>
					</div><?php endforeach; endif; ?>
					<div class="clearfix"> </div>
				</div> 

				<div class="w3agile properties">
					<div class="properties-top">
						<h3 class="w3ls-title">新品</h3>
					</div> 
					<?php if(is_array($new_goods)): foreach($new_goods as $key=>$v): ?><div class="properties-bottom">
						<div class="properties-img">
							<img src="<?php echo ($v["original_img"]); ?>" alt="">
							</div>
						<div class="w3ls-text">
							<h5 style="height: 30px;"><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><?php echo mb_substr($v['goods_name'],0,26,'utf-8');?></a></h5>
							<h6>￥<?php echo ($v["shop_price"]); ?></h6>
							<p><b>已卖出</b><?php echo ($v["click_count"]); ?>件</p>
							<p><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="lijigoumai">立即购买</a></p>
						</div>
					</div><?php endforeach; endif; ?>
					<div class="clearfix"> </div>
				</div> 

				<div class="w3agile properties">
					<div class="properties-top">
						<h3 class="w3ls-title">推荐</h3>
					</div> 
					<?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$v): ?><div class="properties-bottom">
						<div class="properties-img">
							<img src="<?php echo ($v["original_img"]); ?>" alt="">
							</div>
						<div class="w3ls-text">
							<h5 style="height: 30px;"><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>"><?php echo mb_substr($v['goods_name'],0,26,'utf-8');?></a></h5>
							<h6>￥<?php echo ($v["shop_price"]); ?></h6>
							<p><b>已卖出</b><?php echo ($v["click_count"]); ?>件</p>
							<p><a href="<?php echo C('DOMAIN'); echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" class="lijigoumai">立即购买</a></p>
						</div>
					</div><?php endforeach; endif; ?>
					<div class="clearfix"> </div>
				</div> 
				<!-- //properties -->
				<!-- brands -->
				
				<!-- //brands -->
				<!-- footer -->
				<div class="w3agile footer"> 
					<div class="social-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="tel:13539993040" class="fb"> </a></li>
							<li><a href="#" class="gp"> </a></li>
							<li><a href="#" class="drb"> </a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-nav">
						<ul>  
					<li><a class="active" href="<?php echo U('Mobile/Store/index',array('store_id'=>$store[store_id]));?>"><i class="glyphicon glyphicon-home"></i> 首页 </a></li>

					<?php if(is_array($navigation)): foreach($navigation as $key=>$vo): ?><li><a href="<?php echo U('store_news',array('store_id'=>$store[store_id],'sn_id'=>$vo[sn_id]));?>"><i class="glyphicon"></i> <?php echo ($vo["sn_title"]); ?> </a></li><?php endforeach; endif; ?>
						</ul> 
						<div class="clearfix"> </div>
					</div> 
					<div class="footer-text">
						<p><?php echo ($store["copyright"]); ?></p>
					</div>
				</div> 
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="<?php echo STYLE;?>/js/classie.js"></script>
	<script src="<?php echo STYLE;?>/js/main.js"></script>
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="<?php echo STYLE;?>/js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo STYLE;?>/js/bootstrap.js"></script>
	<script src="http://www.mycodes.net/js/tongji.js"></script>
<!-- <script src="http://www.mycodes.net/js/youxia.js" type="text/javascript"></script> -->

</body>
</html>