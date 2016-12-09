<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($newslist["sn_title"]); ?></title>
	 <meta name="keywords" content="<?php echo ($newslist["sn_keyword"]); ?>" />
    <meta name="description" content="<?php echo ($newslist["sn_description"]); ?>"/>
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


<div style="width:100%;margin-top: 10px;">

	<?php if(is_array($news)): foreach($news as $key=>$v): ?><div style="margin-top:10px;">
		<a href="<?php echo U('newscontent',array('store_id'=>$storeid,'sn'=>$v['sn_id'],'text'=>$v['id']));?>" title="<?php echo ($v["title"]); ?>"><img src="<?php echo ($v["newsimg"]); ?>" alt="" style="width:30%;float:left;">
		<h1 style="width:70%;float:left;font-size:13px;padding-right:1em;color:#000;"><?php echo ($v["title"]); ?></h1>
		<p style="text-indent: 2em;margin-right:1em;margin-top:5px;"><?php echo ($v["description"]); ?></p></a>
		<div style="width:70%;float:right;margin-top:5px;">作者：<?php echo ($v["author"]); ?> | 文章来源：<?php echo ($v["rep"]); ?> | 发布时间：<?php echo (date("Y-m-d",$v["timer"])); ?></div>
	</div>
	<br style="clear:both;" /><?php endforeach; endif; ?>

</div>


<br style="clear:both;" />

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