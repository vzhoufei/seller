<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($store["store_name"]); ?></title>
<meta name="keywords" content="TPshop,搜豹网络," />
<meta name="description" content="TPshop,搜豹网络," />
<link href="__STATIC__/css/store_base.css" rel="stylesheet" type="text/css">
<link href="__STATIC__/css/store_header.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="__STATIC__/css/common.min.css">
<!--[if IE 6]>
<script src="/Public/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
	try{
		document.execCommand("BackgroundImageCache", false, true);
	}
	catch(e){}
// ]]>
</script>
<![endif]-->
<script>
var _CHARSET = 'utf-8';
//var SITEURL = 'http://www.xiaomi.com/shop';
//var SHOP_SITE_URL = 'http://www.xiaomi.com/shop';
</script>
<script src="__STATIC__/js/jquery-1.11.0.min.js"></script>
<script src="__STATIC__/js/common.js" charset="utf-8"></script>
<script src="/Public/js/layer/layer.js"></script>
<script type="text/javascript">
var PRICE_FORMAT = '&yen;%s';
$(function(){
	$('#button').click(function(){
	    if ($('#keyword').val() == '') {
		    return false;
	    }
	});
});

$(function(){
	//search
	var act = "show_store";
	if (act == "store_list"){
		$("#search").children('ul').children('li:eq(1)').addClass("current");
		$("#search").children('ul').children('li:eq(0)').removeClass("current");
		}
	$("#search").children('ul').children('li').click(function(){
		$(this).parent().children('li').removeClass("current");
		$(this).addClass("current");
		$('#search_act').attr("value",$(this).attr("act"));
		$('#keyword').attr("placeholder",$(this).attr("title"));
	});
	$("#keyword").blur();
});
</script>
</head>
<body>
<!-- PublicTopLayout Begin --
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="vToolbar" class="nc-appbar">
  <div class="nc-appbar-tabs" id="appBarTabs">
    <div class="user TA_delay" nctype="a-barUserInfo">
      <div class="avatar"><img src="http://www.xiaomi.com/data/upload/shop/common/default_user_portrait.gif"/></div>
      <?php if($user["user_id"] > 0): ?><p>我</p>
	      <?php else: ?>
	      <p class="TA">未登录</p><?php endif; ?>
    </div>
    <div class="user-info" nctype="barUserInfo" style="display:none;"><i class="arrow"></i>
      <div class="avatar"><img src="http://www.xiaomi.com/data/upload/shop/common/default_user_portrait.gif"/>
        <div class="frame"></div>
      </div>
      <dl>
        <dt>Hi, wyp003</dt>
        <dd>当前等级：<strong nctype="barMemberGrade">V0</strong></dd>
        <dd>当前经验值：<strong nctype="barMemberExp">50</strong></dd>
      </dl>
    </div>
    <ul class="tools">
      	<li><a href="javascript:void(0);" id="chat_show_user" class="chat TA_delay"><div class="tools_img TA"></div><span class="TA">聊天</span><i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
        <li><a href="javascript:void(0);" id="rtoolbar_cart" class="cart TA_delay"><div class="tools_img TA"></div><span class="TA">购物车</span><i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i></a></li>
        <li><a href="javascript:void(0);" id="compare" class="compare TA_delay"><div class="tools_img TA"></div><span class="TA">对比</span></a></li>
        <li><a href="javascript:void(0);" id="gotop" class="gotop TA_delay"><div class="tools_img TA"></div><span class="TA">顶部</span></a></li>
    </ul>
    <div class="content-box" id="content-compare">
      <div class="top">
        <h3>商品对比</h3>
        <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
      <div id="comparelist"></div>
    </div>
    <div class="content-box" id="content-cart">
      <div class="top">
        <h3>我的购物车</h3>
        <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
      <div id="rtoolbar_cartlist"></div>
    </div>
    <a id="activator" href="javascript:void(0);" class="nc-appbar-hide TA"></a> </div>
  <div class="nc-hidebar" id="ncHideBar">
    <div class="nc-hidebar-bg">
            <div class="user-avatar"><img src="http://www.xiaomi.com/data/upload/shop/common/default_user_portrait.gif"/></div>
            <div class="frame"></div>
      <div class="show"></div>
    </div>
  </div>
</div>-->
<div class="public-top-layout w">
  <div class="topbar wrapper">
    <div class="user-entry">
	    <?php if($user["user_id"] > 0): ?>您好 <span><a href="<?php echo U('User/index');?>"><?php echo ($user["nickname"]); ?></a>
	   		<div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go();">V0</div></span> 
	   		欢迎回来，<a href="<?php echo U('Index/index');?>"  title="首页" alt="首页">
	   		<span>搜豹网络</span></a> <span>[<a href="<?php echo U('User/logout');?>">退出</a>] </span>
	   <?php else: ?>
	    	Hi，欢迎来 <a href="<?php echo U('Index/index');?>" title="首页" alt="首页">搜豹网络</a>
	 		<a href="<?php echo U('User/login');?>">请登录</a></span> <span><a href="<?php echo U('User/register');?>">免费注册</a></span><?php endif; ?>
   </div>
    <div class="quick-menu">
		<dl class="down_app">
	        <dt><em class="ico_tel"></em><a href="<?php echo U('Mobile/Index/index');?>">手机移动端</a><i></i></dt>
	        <dd>
	       	<div class="qrcode"><img src="__STATIC__/images/app.png"></div>
	        <div class="hint"><h4>扫描二维码</h4> 下载手机客户端</div>
	        <div class="addurl">
	              <a href="http://fir.im/tpshopAndroid" target="_blank"><i class="icon-android"></i>Android</a>
	              <a href="https://itunes.apple.com/cn/app/sou-bao-shang-cheng/id1119059153?mt=8" target="_blank"><i class="icon-apple"></i>iPhone</a>
	        </div>
	    	</dd>
    	</dl>
    	<dl>
        <dt><em class="ico_shop"></em><a href="<?php echo U('Newjoin/index');?>" title="商家管理">商家管理</a><i></i></dt>
        <dd>
          <ul>
		    <li><a href="<?php echo U('Newjoin/index');?>" title="招商入驻">招商入驻</a></li>
            <li><a href="<?php echo U('Seller/Admin/login');?>" target="_blank" title="登录商家管理中心">商家登录</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><em class="ico_order"></em><a href="<?php echo U('User/order_list');?>">我的订单</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo U('User/order_list',array('type'=>'WAITPAY'));?>">待付款订单</a></li>
            <li><a href="<?php echo U('User/order_list',array('type'=>'WAITRECEIVE'));?>">待确认收货</a></li>
            <li><a href="<?php echo U('User/order_list',array('type'=>'WAITCCOMMENT'));?>">待评价交易</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><em class="ico_store"></em><a href="<?php echo U('User/goods_collect');?>">我的收藏</a><i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo U('User/goods_collect');?>">商品收藏</a></li>
            <li><a href="<?php echo U('User/store_collect');?>">店铺收藏</a></li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><em class="ico_service"></em>客户服务<i></i></dt>
        <dd>
          <ul>
            <li><a href="<?php echo U('Article/detail',array('article_id'=>1));?>">帮助中心</a></li>
            <li><a href="<?php echo U('Article/detail',array('article_id'=>2));?>">售后服务</a></li>
            <li><a href="<?php echo U('Article/detail',array('article_id'=>3));?>">客服中心</a></li>
          </ul>
        </dd>
      </dl>
      	  <dl class="weixin">
        <dt>关注我们<i></i></dt>
        <dd>
          <h4>扫描二维码<br/>关注商城微信号</h4>
          <img src="__STATIC__/images/weixin.png" > </dd>
        </dl>
    </div>
  </div>
</div>
<script type="text/javascript">
//返回顶部
/*
backTop=function (btnId){
	var btn=document.getElementById(btnId);
	var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	window.onscroll=set;
	btn.onclick=function (){
		//btn.style.opacity="0.5";
		window.onscroll=null;
		this.timer=setInterval(function(){
		    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
			scrollTop-=Math.ceil(scrollTop*0.1);
			if(scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
			if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop=scrollTop;
			if (document.body.scrollTop > 0) document.body.scrollTop=scrollTop;
		},10);
	};
	function set(){
	    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	    //btn.style.opacity=scrollTop?'1':"0.5";
	}
};
backTop('gotop');
*/
//动画显示边条内容区域
$(function() {
	$(function() {
		$('#activator').click(function() {
			$('#content-cart').animate({'right': '-250px'});
			$('#content-compare').animate({'right': '-250px'});
			$('#vToolbar').animate({'right': '-60px'}, 300,
			function() {
				$('#ncHideBar').animate({'right': '59px'},	300);
			});
	        $('div[nctype^="bar"]').hide();
		});
		$('#ncHideBar').click(function() {
			$('#ncHideBar').animate({
				'right': '-86px'
			},
			300,
			function() {
				$('#content-cart').animate({'right': '-250px'});
				$('#content-compare').animate({'right': '-250px'});
				$('#vToolbar').animate({'right': '6px'},300);
			});
		});
	});
    $("#compare").click(function(){
    	if ($("#content-compare").css('right') == '-250px') {
 		   loadCompare(false);
 		   $('#content-cart').animate({'right': '-250px'});
  		   $("#content-compare").animate({right:'0px'});
    	} else {
    		$(".close").click();
    		$(".chat-list").css("display",'none');
        }
	});
    $("#rtoolbar_cart").click(function(){
        if ($("#content-cart").css('right') == '-250px') {
         	$('#content-compare').animate({'right': '-250px'});
    		$("#content-cart").animate({right:'0px'});
    		if (!$("#rtoolbar_cartlist").html()) {
    			$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
    		}
        } else {
        	$(".close").click();
        	$(".chat-list").css("display",'none');
        }
	});
	$(".close").click(function(){
		$(".content-box").animate({right:'-250px'});
      });

	$(".quick-menu dl").hover(function() {
		$(this).addClass("hover");
	},
	function() {
		$(this).removeClass("hover");
	});

	    // 右侧bar用户信息
	    /*
	    $('div[nctype="a-barUserInfo"]').click(function(){
	        $('div[nctype="barUserInfo"]').toggle();
	    });
	    // 右侧bar登录
	    $('div[nctype="a-barLoginBox"]').click(function(){
	        $('div[nctype="barLoginBox"]').toggle();
	        document.getElementById('codeimage').src='http://www.xiaomi.com/shop/index.php?act=seccode&op=makecode&nchash=a8011a99&t=' + Math.random();
	    });
	    $('a[nctype="close-barLoginBox"]').click(function(){
	        $('div[nctype="barLoginBox"]').toggle();
	    });
	    */
    });

</script> 
<!-- PublicHeadLayout Begin -->
<div class="header-wrap">
  <header class="public-head-layout wrapper">
    <h1 class="site-logo"><a href="<?php echo U('Index/index');?>"><img src="__STATIC__/images/newLogo.png" class="pngFix"></a></h1>
	<div class="heade_store_info">
    	<div class="slogo">
        	<a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>" title="搜豹网络" class="store_name"><?php echo ($store["store_name"]); ?></a>
            <br>
        </div>
        <div class="pj_info">
        	<div class="shopdsr_item">
                <div class="shopdsr_title">描述相符</div>
                <div class="shopdsr_score"><?php echo ($store["store_desccredit"]); ?></div>
            </div>
            <div class="shopdsr_item">
                <div class="shopdsr_title">服务态度</div>
                <div class="shopdsr_score"><?php echo ($store["store_servicecredit"]); ?></div>
            </div>
            <div class="shopdsr_item">
                <div class="shopdsr_title">发货速度</div>
                <div class="shopdsr_score"><?php echo ($store["store_deliverycredit"]); ?></div>
            </div>
        </div>
		<div class="sub">
		 <div class="store-logo">
		 	<?php if($store[store_logo] != ''): ?><img src="<?php echo ($store["store_logo"]); ?>" alt="<?php echo ($store["store_name"]); ?>" title="<?php echo ($store["store_name"]); ?>">
		 	<?php else: ?>
		 	<img src="__STATIC__/images/default_store_logo.gif" alt="<?php echo ($store["store_name"]); ?>" title="<?php echo ($store["store_name"]); ?>"><?php endif; ?>
		 </div>
		 <!--店铺基本信息 S-->
		<div class="ncs-info">
		  <div class="title">
		    <h4><?php echo ($store["store_name"]); ?></h4>
		  </div>
		  <div class="content">
		  		<?php if($store[is_own_shop] != 1): ?><dl class="all-rate">
			      <dt>综合评分：</dt>
			      <dd>
			        <div class="rating"><span style="width: 100%"></span></div>
			        <em>5</em>分</dd>
			    </dl>
			    <div class="ncs-detail-rate">
			      <h5><strong>店铺动态评分</strong>与行业相比</h5>
				      <ul>
				           <li> 描述相符<span class="credit">5 分</span> <span class="equal"><i></i>持平<em>----</em></span> </li>
				           <li> 服务态度<span class="credit">5 分</span> <span class="equal"><i></i>持平<em>----</em></span> </li>
				           <li> 发货速度<span class="credit">5 分</span> <span class="equal"><i></i>持平<em>----</em></span> </li>
				      </ul>
			    </div><?php endif; ?>
		        <dl class="messenger">
		      <dt>联系方式：</dt>
		      <dd><span member_id="2">
		         <?php if(!empty($store["store_qq"])): ?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($store["store_qq"]); ?>;?>&site=qq&menu=yes" title="QQ:<?php echo ($store["store_qq"]); ?>"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($store["store_qq"]); ?>:52" style=" vertical-align: middle;"/></a><?php endif; ?>
		      </span></dd>
		    </dl>
		      <!--只有实名认证实体店认证后才显示保障体系 by haoid.cn -->	  
		      <!--保证金金额-->
			  <!--保障体系 by haoid.cn-->
			<?php if(!empty($store["company_name"])): ?><dl class="no-border">
		        <dt>公司名称：</dt><dd><?php echo ($store["company_name"]); ?></dd>
		    </dl><?php endif; ?>
		    <dl>
		        <dt>所&nbsp;在&nbsp;地：</dt>
		        <dd><?php echo ($store["store_address"]); ?></dd>
		    </dl>	        	
		    <div class="goto"><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>" >进入商家店铺</a>
		    	<a href="javascript:collect_store('<?php echo ($store[store_id]); ?>')">收藏店铺<em nctype="store_collect"></em></a>
		    </div>
		    <div class="shop-other" id="shop-other">
			    <ul>
			      <li class="ncs-info-btn-map"><a href="javascript:void(0)" class="pngFix"><span>店铺地图</span><b></b><!-- 店铺地图 -->
			        <div class="ncs-info-map" id="map_container" style="width:208px;height:208px;"></div>
			        </a></li>
			      <li class="ncs-info-btn-qrcode"><a href="javascript:void(0)" class="pngFix"><span>店铺二维码</span><b></b>
			        <p class="ncs-info-qrcode"><img src="<?php echo U('Store/store_ma',array('store_id'=>$store[store_id]));?>" title="店铺原始地" style="width:208px;height:208px"></p>
			        </a></li>
			    </ul>
		    </div> 
		  </div>
		</div>
		<!--店铺基本信息 E--> 
		<script type="text/javascript">
		var cityName = "南山区西丽镇留仙大道1001号";
		var address = "天津 天津市 河东区";
		var store_name = "深圳搜豹"; 
		function initialize() {
			map = new BMap.Map("map_container");
			localCity = new BMap.LocalCity();
			map.enableScrollWheelZoom(); 
			localCity.get(function(cityResult){
			  if (cityResult) {
			  	var level = cityResult.level;
			  	if (level < 13) level = 13;
			    map.centerAndZoom(cityResult.center, level);
			    cityResultName = cityResult.name;
			    if (cityResultName.indexOf(cityName) >= 0) cityName = cityResult.name;
			    	    getPoint();
			   	}
			});
		}
		 
		function loadScript() {
			var script = document.createElement("script");
			script.src = "http://api.map.baidu.com/api?v=1.2&callback=initialize";
			document.body.appendChild(script);
		}
		function getPoint(){
			var myGeo = new BMap.Geocoder();
			myGeo.getPoint(address, function(point){
			  if (point) {
			    setPoint(point);
			  }
			}, cityName);
		}
		function setPoint(point){
			  if (point) {
			    map.centerAndZoom(point, 16);
			    var marker = new BMap.Marker(point);
			    map.addOverlay(marker);
			  }
		}
		
		// 当鼠标放在店铺地图上再加载百度地图。
		$(function(){
			$('.ncs-info-btn-map').one('mouseover',function(){
				loadScript();
			});
			$('.ncs-info-btn-map').one('click',function(){
				loadScript();
			});
		});
		
		//收藏店铺
		function collect_store(store_id){
			if(getCookie('user_id') == ''){
				pop_login();
			}else{
				$.ajax({
					type:'post',
					dataType:'json',
					data:{store_id:store_id},
					url:"<?php echo U('/Store/collect_store');?>", 
					success:function(res){
						if(res.status == 1){
							layer.msg('成功添加至收藏夹', {icon: 1});
						}else{
							layer.msg(res.msg, {icon: 3});
						}
					}
				});
			}
		}
		
		function pop_login(){
		    layer.open({
		        type: 2,
		        title: '<b>登陆TPshop网</b>',
		        skin: 'layui-layer-rim',
		        shadeClose: true,
		        shade: 0.5,
		        area: ['490px', '460px'],
		        content: "<?php echo U('/User/pop_login');?>", 
		    });
		}
		</script> 
		</div>
	</div>
    <div class="heade_service_info">
        <div class="displayed">
            <i></i>在线客服
            <div class="sub">
			  <div class="ncs-message-bar">
			  	<div class="default">
			    	<h5><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>" title="进入店铺"><?php echo ($store["store_name"]); ?></a></h5>
			    	<span member_id="1"></span>
			    </div>
			    <div class="service-list" store_id="1" store_name="<?php echo ($store["store_name"]); ?>">
				     <dl>
					<?php if(is_array($store[store_presales])): $i = 0; $__LIST__ = $store[store_presales];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dt>售前客服：</dt>
						<dd><span><?php echo ($vo["name"]); ?></span><span>
							<?php if($vo['type'] == 'qq'): ?><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo["account"]); ?>&site=qq&menu=yes" title="QQ:<?php echo ($vo["account"]); ?>" target="_blank">
									<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($vo["account"]); ?>:52" alt="点击这里给我发消息" style=" vertical-align: middle;">
								</a>
								<?php else: ?>
								<a href="http://amos1.taobao.com/msg.ww?v=2&amp;uid=<?php echo ($vo["account"]); ?>&amp;s=2" target="_blank">
									<img border="0" src="__STATIC__/images/T1B7m.XeXuXXaHNz_X-16-16.gif" alt="点击这里给我发消息" style=" vertical-align: middle;">
								</a><?php endif; ?>
			                </span>
						</dd><?php endforeach; endif; else: echo "" ;endif; ?>
					 </dl>
				     <dl>
						 <?php if(is_array($store[store_aftersales])): $i = 0; $__LIST__ = $store[store_aftersales];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dt>售后客服：</dt>
							 <dd><span><?php echo ($vo["name"]); ?></span><span>
							<?php if($vo['type'] == 'qq'): ?><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo["account"]); ?>&site=qq&menu=yes" title="QQ:<?php echo ($vo["account"]); ?>" target="_blank">
									<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($vo["account"]); ?>:52" alt="点击这里给我发消息" style=" vertical-align: middle;">
								</a>
								<?php else: ?>
								<a href="http://amos1.taobao.com/msg.ww?v=2&amp;uid=<?php echo ($vo["account"]); ?>&amp;s=2" target="_blank">
									<img border="0" src="__STATIC__/images/T1B7m.XeXuXXaHNz_X-16-16.gif" alt="点击这里给我发消息" style=" vertical-align: middle;">
								</a><?php endif; ?>
			                </span>
							 </dd><?php endforeach; endif; else: echo "" ;endif; ?>
				      </dl>
			    </div>
			  </div>
            </div>
        </div>
   </div>
    <div id="search" class="head-search-bar">
	<!--商品和店铺-->
      <!--<ul class="tab">
        <li title="请输入您要搜索的商品关键字" act="search" class="current">商品</li>
        <li title="请输入您要搜索的店铺关键字" act="store_list">店铺</li>
      </ul>-->
      <form class="search-form" method="get" action="<?php echo U('Goods/search');?>">
        <input type="hidden" value="search" id="search_act" name="act">
         <input placeholder="请输入您要搜索的商品关键字" name="q" id="q" type="text" class="input-text" value="" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" />
        <input type="submit" id="button" value="搜索" class="input-submit">
      </form>
	  <!--搜索关键字-->
      <!--<div class="keyword">热门搜索：    
          <ul>
             <li><a href="http://www.xiaomi.com/shop/index.php?act=search&op=index&keyword=%E5%A5%BD%E5%95%86%E5%9F%8EV4">好商城V4</a></li>
             <li><a href="http://www.xiaomi.com/shop/index.php?act=search&op=index&keyword=%E5%86%85%E8%A1%A3">内衣</a></li>
             <li><a href="http://www.xiaomi.com/shop/index.php?act=search&op=index&keyword=%E7%AC%94%E8%AE%B0%E6%9C%AC">笔记本</a></li>
             <li><a href="http://www.xiaomi.com/shop/index.php?act=search&op=index&keyword=%E6%89%8B%E6%9C%BA">手机</a></li>
           </ul>
      </div>-->
    </div>
  </header>
</div>
<!-- PublicHeadLayout End -->
<link href="__STATIC__/css/shop.css" rel="stylesheet" type="text/css">
<link href="__STATIC__/css/shop_custom.css" rel="stylesheet" type="text/css">
<link href="__STATIC__/style/<?php echo ($store["store_theme"]); ?>/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__STATIC__/js/shop.js" charset="utf-8"></script>
<div id="header" class="ncs-header">
</div>
<div id="store_decoration_content" class="background" style="<?php echo $output['decoration_background_style'];?>">
<?php if(!empty($output['decoration_nav'])) {?>
<style><?php echo $output['decoration_nav']['style'];?></style>
<?php } ?>   
   <div class="ncsl-nav">
      <?php if(isset($output['decoration_banner'])) { ?>
     <!-- 启用店铺装修 -->
     <?php if($output['decoration_banner']['display'] == 'true') { ?>
     <div id="decoration_banner" class="ncsl-nav-banner">
         <img src="<?php echo $output['decoration_banner']['image'];?>" alt="">
     </div>
     <?php } ?>
     <?php } else { ?>
    <!-- 不启用店铺装修 -->
	<!-- <div class="banner">
		<a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>" class="img">
       	  <?php if(!empty($store['store_banner'])){?>
	      	<img src="<?php echo $store['store_banner'];?>" alt="<?php echo $store['store_name'];?>" title="<?php echo $store['store_name'];?>" class="pngFix">
	      <?php }else{?>
	      <div class="ncs-default-banner"></div>
	      <?php }?>
        </a>
    </div> -->
    <?php } ?>
    <div id="nav" class="ncs-nav">
      <ul>
        <li <?php if($action == 'index'): ?>class="active" <?php else: ?>class="normal"<?php endif; ?> ><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>"><span>店铺首页<i></i></span></a></li>
        <li <?php if($action == 'dynamic'): ?>class="active" <?php else: ?>class="normal"<?php endif; ?> ><a href="<?php echo U('Store/dynamic',array('store_id'=>$store[store_id]));?>"><span>店铺动态<i></i></span></a></li>
        <?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($action == 'store_news'): ?>class="active" <?php else: ?>class="normal"<?php endif; ?> >
        	<?php if(empty($vv[sn_url])): ?><a href="<?php echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id]));?>">
        	<?php else: ?>
        	<a href="<?php echo ($vv["sn_url"]); ?>"><?php endif; ?>
        	<span><?php echo ($vv["sn_title"]); ?><i></i></span></a>
        	</li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div>
  <?php if($store['store_decoration_switch'] > 0): ?><script type="text/javascript" src="__STATIC__/js/tp_slider.js" charset="utf-8"></script>
	<script type="text/javascript">
	//图片延迟加载
	(function($) {
	    $.fn.nc_lazyload_init = function() {
	        this.each(function() {
	            $(this).after($(this).val().replace(/src=/gi, 'data-src='));
	        }).remove();
	    };
	})(jQuery);
	
	//图片延迟加载
	(function($) {
	    $.fn.nc_lazyload = function() {
	        var lazy_items = [];
	        this.each(function() {
	            if($(this).attr("data-src") !== undefined){
	                var lazy_item = {
	                    object: $(this),
	                    url: $(this).attr("data-src")
	                };
	                lazy_items.push(lazy_item);
	            }
	        });
	
	        var load_img = function() {
	            var window_height = $(window).height();
	            var scroll_top = $(window).scrollTop();
	
	            $.each(lazy_items, function(i, lazy_item) {
	                if(lazy_item.object) {
	                    item_top = lazy_item.object.offset().top - scroll_top;
	                    if(item_top >= 0 && item_top < window_height) {
	                        if(lazy_item.url) {
	                            lazy_item.object.attr("src",lazy_item.url);
	                        }
	                        lazy_item.object = null;
	                    }
	                }
	            });
	        };
	        load_img();
	        $(window).bind("scroll", load_img);
	    };
	})(jQuery);
	</script>
	<script type="text/javascript">
	//图片延迟加载
	(function($) {
	    $.fn.nc_lazyload_init = function() {
	        this.each(function() {
	            $(this).after($(this).val().replace(/src=/gi, 'data-src='));
	        }).remove();
	    };
	})(jQuery);
	
	//图片延迟加载
	(function($) {
	    $.fn.nc_lazyload = function() {
	        var lazy_items = [];
	        this.each(function() {
	            if($(this).attr("data-src") !== undefined){
	                var lazy_item = {
	                    object: $(this),
	                    url: $(this).attr("data-src")
	                };
	                lazy_items.push(lazy_item);
	            }
	        });
	
	        var load_img = function() {
	            var window_height = $(window).height();
	            var scroll_top = $(window).scrollTop();
	
	            $.each(lazy_items, function(i, lazy_item) {
	                if(lazy_item.object) {
	                    item_top = lazy_item.object.offset().top - scroll_top;
	                    if(item_top >= 0 && item_top < window_height) {
	                        if(lazy_item.url) {
	                            lazy_item.object.attr("src",lazy_item.url);
	                        }
	                        lazy_item.object = null;
	                    }
	                }
	            });
	        };
	        load_img();
	        $(window).bind("scroll", load_img);
	    };
	})(jQuery);
	</script>
	<div id="store_decoration_area" class="store-decoration-page">
	<textarea class="lazyload_container" rows="10" cols="30" style="display:none;">
	    <?php if(is_array($output[block_list])): foreach($output[block_list] as $key=>$block): endforeach; endif; ?>
	</textarea>
	</div>
	<script type="text/javascript">
	    $(document).ready(function(){
	        //图片延迟加载
	        $(".lazyload_container").nc_lazyload_init();
	        $("img").nc_lazyload();
	        //幻灯片
	        $('[nctype="store_decoration_slide"]').nc_slider();
	    });
	</script><?php endif; ?>
  <?php if(($store[store_decoration_only] == 0) OR ($store[store_decoration_switch] == 0)): ?><div class="wrapper mt10">
  <div class="ncs-main">
    <div class="flexslider">
      <ul class="slides">
      	 <?php if(is_array($store[store_slide])): foreach($store[store_slide] as $key=>$vimg): if(!empty($vimg)): ?><li><a href=""><img src="<?php echo ($vimg); ?>"></a></li><?php endif; endforeach; endif; ?>
      </ul>
    </div>
    <div class="ncs-main-container">
      <div class="title"> <span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'is_recommend'));?>" class="more">更多</a></span>
        <h4>推荐商品</h4>
      </div>
      <div class="content ncs-goods-list">
      	<?php if(!empty($recomend_goods)): ?><ul>
	        <?php if(is_array($recomend_goods)): foreach($recomend_goods as $key=>$vo): ?><li>
	            <dl>
	              <dt><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" class="goods-thumb" target="_blank">
	              <img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>" alt="<?php echo ($vo["goods_name"]); ?>"/></a>
	                <ul class="goods-thumb-scroll-show">
	                <?php $i = '0'; ?>
	                <?php if(is_array($goods_images)): foreach($goods_images as $k2=>$v2): if($v2[goods_id] == $vo[goods_id]): ?><li <?php if($i == 0): ?>class="selected"<?php endif; ?>><a href="javascript:void(0); rel=<?php echo ($i++); ?>"><img src="<?php echo ($v2[image_url]); ?>"/></a></li><?php endif; endforeach; endif; ?>
	                 </ul>
	              </dt>
	              <dd class="goods-name"><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" title="<?php echo ($vo["goods_name"]); ?>" target="_blank"><?php echo (getSubstr($vo["goods_name"],0,30)); ?></a></dd>
	              <dd class="goods-info"><span class="price"><i>&yen;</i> <?php echo ($vo["shop_price"]); ?> </span> <span class="goods-sold">已售：<strong><?php echo ($vo["sales_sum"]); ?></strong> 件</span></dd>
	              <?php if($vo[prom_type] > 0): ?><dd class="goods-promotion">
		              		<span>
		              		<?php if($vo[prom_type] == 1): ?>抢购商品<?php endif; ?>
		              		<?php if($vo[prom_type] == 2): ?>团购商品<?php endif; ?>
		              		<?php if($vo[prom_type] == 3): ?>限时折扣<?php endif; ?>
		              		</span>
		              </dd><?php endif; ?>
	            </dl>
	          </li><?php endforeach; endif; ?>
            </ul>
         <?php else: ?>
         <div class="nothing"><p>很抱歉! 没有找到相关商品</p></div><?php endif; ?>   
        </div>
    </div>
    <div class="ncs-main-container">
      <div class="title"><span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'is_new'));?>" class="more">更多</a></span>
        <h4>新品</h4>
      </div>
      <div class="content ncs-goods-list">
      		<?php if(!empty($new_goods)): ?><ul>
			<?php if(is_array($new_goods)): foreach($new_goods as $key=>$vo): ?><li>
	            <dl>
	              <dt><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" class="goods-thumb" target="_blank"><img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>" alt="<?php echo ($vo["goods_name"]); ?>"/></a>
	                <ul class="goods-thumb-scroll-show">
	                <?php $i = '0'; ?>
	                <?php if(is_array($goods_images)): foreach($goods_images as $k2=>$v2): if($v2[goods_id] == $vo[goods_id]): ?><li <?php if($i == 0): ?>class="selected"<?php endif; ?>><a href="javascript:void(0); rel=<?php echo ($i++); ?>"><img src="<?php echo ($v2[image_url]); ?>"/></a></li><?php endif; endforeach; endif; ?>
	                 </ul>
	              </dt>
	              <dd class="goods-name"><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" title="<?php echo ($vo["goods_name"]); ?>" target="_blank"><?php echo (getSubstr($vo["goods_name"],0,30)); ?></a></dd>
	              <dd class="goods-info"><span class="price"><i>&yen;</i> <?php echo ($vo["shop_price"]); ?> </span> <span class="goods-sold">已售：<strong><?php echo ($vo["sales_sum"]); ?></strong> 件</span></dd>
	              <?php if($vo[prom_type] > 0): ?><dd class="goods-promotion">
		              		<span><?php if($vo[prom_type] == 1): ?>抢购商品<?php endif; if($vo[prom_type] == 2): ?>团购商品<?php endif; if($vo[prom_type] == 3): ?>限时折扣<?php endif; ?></span>
		              </dd><?php endif; ?>
	            </dl>
	          </li><?php endforeach; endif; ?>
            </ul>
            <?php else: ?>
            <div class="nothing"><p>很抱歉! 没有找到相关商品</p></div><?php endif; ?>
       </div>
    </div>
  </div>
  <div class="ncs-sidebar">
    
<div class="ncs-sidebar-container ncs-class-bar">
  <div class="title">
    <h4>商品分类</h4>
  </div>
  <div class="content">
    <p>
	    <span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'is_new'));?>">按新品</a></span>
	    <span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'shop_price'));?>">按价格</a></span>
	    <span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'sales_sum'));?>">按销量</a></span>
	    <span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'is_recommend'));?>">按人气</a></span>
    </p>
    <div class="ncs-search">
      <form id="" name="searchShop" method="get" action="" >
        <input type="hidden" name="act" value="show_store" />
        <input type="hidden" name="op" value="goods_all" />
        <input type="hidden" name="store_id" value="<?php echo ($store["store_id"]); ?>" />
        <input type="text" class="text w120" name="inkeyword" value="" placeholder="搜索店内商品">
        <a href="javascript:document.searchShop.submit();" class="ncs-btn">搜索</a>
      </form>
    </div>
    <ul class="ncs-submenu">
      <li><span class="ico-none"><em>-</em></span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">全部商品</a></li>
      <?php if(is_array($main_cat)): foreach($main_cat as $key=>$vo): ?><li><span class="ico-none"  onclick="class_list(this);" span_id="<?php echo ($vo["cat_id"]); ?>"><em>-</em></span>
      		<a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vo[cat_id]));?>"><?php echo ($vo["cat_name"]); ?></a>
      		<?php if($sub_cat[$vo[cat_id]] != ''): ?><ul id="stc_<?php echo ($vo["cat_id"]); ?>" style="display: block;">
      			<?php if(is_array($sub_cat[$vo[cat_id]])): foreach($sub_cat[$vo[cat_id]] as $key=>$v2): ?><li><span class="ico-sub">&nbsp;</span><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v2[cat_id]));?>"><?php echo ($v2["cat_name"]); ?></a></li><?php endforeach; endif; ?>
            </ul><?php endif; ?>
      </li><?php endforeach; endif; ?>
    </ul> 
  </div>
</div>

<div class="ncs-sidebar-container ncs-top-bar">
  <div class="title">
    <h4>商品排行</h4>
  </div>
  <div class="content">
    <ul class="ncs-top-tab pngFix">
      <li id="hot_sales_tab" class="current"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'sales_sum'));?>">热销商品排行</a></li>
      <li id="hot_collect_tab"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'key'=>'collect_sum'));?>">收藏商品排行</a></li>
    </ul>
    <div id="hot_sales_list" class="ncs-top-panel">
        <ol>
        <?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$vo): ?><li>
          <dl>
            <dt><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><?php echo (getSubstr($vo["goods_name"],0,30)); ?></a></dt>
            <dd class="goods-pic"><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><span class="thumb size40"><i></i><img src="<?php echo (goods_thum_images($vo["goods_id"],60,60)); ?>"  onload="javascript:DrawImage(this,40,40);"></span></a>
              <p><span class="thumb size100"><i></i><img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>" onload="javascript:DrawImage(this,100,100);" title="<?php echo ($vo["goods_name"]); ?>"><big></big><small></small></span></p>
            </dd>
            <dd class="price pngFix"><?php echo ($vo["shop_price"]); ?></dd>
            <dd class="selled pngFix">售出：<strong><?php echo ($vo["sales_sum"]); ?></strong>笔</dd>
          </dl>
         </li><?php endforeach; endif; ?>
       </ol>
    </div>
    <div id="hot_collect_list" class="ncs-top-panel hide">
        <ol>
        	<?php if(is_array($collect_goods)): foreach($collect_goods as $key=>$vo): ?><li>
	          <dl>
	            <dt><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><?php echo (getSubstr($vo["goods_name"],0,30)); ?></a></dt>
	            <dd class="goods-pic"><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" title=""><span class="thumb size40"><i></i> <img src="<?php echo (goods_thum_images($vo["goods_id"],60,60)); ?>" onload="javascript:DrawImage(this,40,40);"></span></a>
	              <p><span class="thumb size100"><i></i><img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>" onload="javascript:DrawImage(this,100,100);" title="<?php echo ($vo["goods_name"]); ?>"><big></big><small></small></span></p>
	            </dd>
	            <dd class="price pngFix"><?php echo ($vo["shop_price"]); ?></dd>
	            <dd class="collection pngFix">收藏人气：<strong><?php echo ($vo["collect_sum"]); ?></strong></dd>
	          </dl>
	        </li><?php endforeach; endif; ?>
         </ol>
    </div>
    <p><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">查看本店其他商品</a></p>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //热销排行切换
        $('#hot_sales_tab').on('mouseenter', function() {
            $(this).addClass('current');
            $('#hot_collect_tab').removeClass('current');
            $('#hot_sales_list').removeClass('hide');
            $('#hot_collect_list').addClass('hide');
        });
        $('#hot_collect_tab').on('mouseenter', function() {
            $(this).addClass('current');
            $('#hot_sales_tab').removeClass('current');
            $('#hot_sales_list').addClass('hide');
            $('#hot_collect_list').removeClass('hide');
        });
    });
    /** left.php **/
    // 商品分类
    function class_list(obj){
    	var stc_id=$(obj).attr('span_id');
    	var span_class=$(obj).attr('class');
    	if(span_class=='ico-block') {
    		$("#stc_"+stc_id).show();
    		$(obj).html('<em>-</em>');
    		$(obj).attr('class','ico-none');
    	}else{
    		$("#stc_"+stc_id).hide();
    		$(obj).html('<em>+</em>');
    		$(obj).attr('class','ico-block');
    	}
    }
</script> 
  </div>
</div><?php endif; ?>
<!-- 引入幻灯片JS --> 
<script type="text/javascript" src="__STATIC__/js/jquery.flexslider-min.js"></script> 
<!-- 绑定幻灯片事件 --> 
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider();
	    // 图片切换效果
	    $('.goods-thumb-scroll-show').find('a').mouseover(function(){
	        $(this).parents('li:first').addClass('selected').siblings().removeClass('selected');
	        var _src = $(this).find('img').attr('src');
	        _src = _src.replace('_60.', '_240.');
	        $(this).parents('dt').find('.goods-thumb').find('img').attr('src', _src);
	    });
	});
</script>
  <div class="clear">&nbsp;</div>
</div>
<div id="faq">
  <div class="faq-wrapper">
    <ul>
           <li> <dl class="s1">
      <dt>
        帮助中心      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=10" title="查看已购买商品"> 查看已购买商品 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=7" title="如何搜索"> 如何搜索 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=40" title="积分兑换说明"> 积分兑换说明 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=9" title="我要买"> 我要买 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=6" title="如何注册成为会员"> 如何注册成为会员 </a></dd>
                </dl></li>
               <li> <dl class="s2">
      <dt>
        店主之家      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=13" title="如何发货"> 如何发货 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=15" title="如何申请开店"> 如何申请开店 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=12" title="查看售出商品"> 查看售出商品 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=14" title="商城商品推荐"> 商城商品推荐 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=11" title="如何管理店铺"> 如何管理店铺 </a></dd>
                </dl></li>
               <li> <dl class="s3">
      <dt>
        支付方式      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=16" title="如何注册支付宝"> 如何注册支付宝 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=28" title="分期付款"> 分期付款 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=30" title="公司转账"> 公司转账 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=17" title="在线支付"> 在线支付 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=29" title="邮局汇款"> 邮局汇款 </a></dd>
                </dl></li>
               <li> <dl class="s4">
      <dt>
        售后服务      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=33" title="返修/退换货"> 返修/退换货 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=26" title="联系卖家"> 联系卖家 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=32" title="退换货流程"> 退换货流程 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=34" title="退款申请"> 退款申请 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=31" title="退换货政策"> 退换货政策 </a></dd>
                </dl></li>
               <li> <dl class="s5">
      <dt>
        客服中心      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=21" title="修改收货地址"> 修改收货地址 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=18" title="会员修改密码"> 会员修改密码 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=20" title="商品发布"> 商品发布 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=19" title="会员修改个人资料"> 会员修改个人资料 </a></dd>
                </dl></li>
               <li> <dl class="s6">
      <dt>
        关于我们      </dt>
                  <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=24" title="招聘英才"> 招聘英才 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=23" title="联系我们"> 联系我们 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=25" title="合作及洽谈"> 合作及洽谈 </a></dd>
            <dd><i></i><a href="http://www.xiaomi.com/shop/index.php?act=article&op=show&article_id=22" title="关于我们"> 关于我们 </a></dd>
                </dl></li>
        	    	
	</ul>	
<div class="help">
		<div class="w1190 clearfix">
    		<div class="contact f-l">
    			<div class="contact-border clearfix">
        			<span class="ic tel t20">0755-86140485</span>
        			<span class="ic mail">soubao@163.cn</span>
        			<div class="attention cleafix">
        				<div class="weixin f-l">						
    						<img src="http://www.xiaomi.com/data/upload/shop/common/04781087584534013.png" class="f-l jImg img-error">
	   					<p class="f-l">
        						<span>扫一扫</span>
        						<span>关注我们</span>
        					</p>
        				</div>
        				<div class="weibo f-l">
        					<div class="ic qq" style="padding-left: 0px;"><ul><li><a target="_blank" >腾讯微博</a></li></ul></div>
        					<div class="ic sina" style="padding-left: 0px;"><ul><li><a target="_blank" >新浪微博</a></li></ul></div>
        				</div>
        			</div>
    			</div>
    		</div>
		</div>
	</div>			
      </div>
</div>
<div id="footer" class="wrapper">
  <p><a href="http://www.xiaomi.com/shop">首页</a>
                | <a  href="http://www.xiaomi.com/index.php?act=article&article_id=24">招聘英才</a>
                | <a  href="http://www.xiaomi.com/index.php?act=article&article_id=25">合作及洽谈</a>
                | <a  href="http://www.xiaomi.com/index.php?act=article&article_id=23">联系我们</a>
                | <a  href="http://www.xiaomi.com/index.php?act=article&article_id=22">关于我们</a>
                | <a  href="http://www.xiaomi.com/delivery">物流自取</a>
                | <a  href="http://www.xiaomi.com/index.php?act=link">友情链接</a>
              </p>
  Copyright 2015 <a href="http://www.haoid.cn" target="_blank">好商城</a> All rights reserved.<br />本演示来源于<a href="http://www.haoid.cn" target="_blank">www.haoid.cn</a><br/></div>
<script type="text/javascript" src="http://www.xiaomi.com/data/resource/js/jquery.cookie.js"></script>
<link href="http://www.xiaomi.com/data/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://www.xiaomi.com/data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://www.xiaomi.com/data/resource/js/qtip/jquery.qtip.min.js"></script>
<link href="http://www.xiaomi.com/data/resource/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script src="http://www.xiaomi.com/shop/resource/js/compare.js"></script>
<script type="text/javascript">
$(function(){
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
function fade() {
	$("img[rel='lazy']").each(function () {
		var $scroTop = $(this).offset();
		if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
			$(this).hide();
			$(this).attr("src", $(this).attr("data-url"));
			$(this).removeAttr("rel");
			$(this).removeAttr("name");
			$(this).fadeIn(500);
		}
	});
}
if($("img[rel='lazy']").length > 0) {
	$(window).scroll(function () {
		fade();
	});
};
fade();
</script>
<script type="text/javascript">
$(function(){
	$('a[nctype="search_in_store"]').click(function(){
		if ($('#keyword').val() == '') {
			return false;
		}
		$('#search_act').val('show_store');
		$('<input type="hidden" value="1" name="store_id" /> <input type="hidden" name="op" value="goods_all" />').appendTo("#formSearch");
		$('#formSearch').submit();
	});
	$('a[nctype="search_in_shop"]').click(function(){
		if ($('#keyword').val() == '') {
			return false;
		}
		$('#formSearch').submit();
	});
	$('#keyword').css("color","#999999");

	var storeTrends	= true;
	$('.favorites').mouseover(function(){
		var $this = $(this);
		if(storeTrends){
			$.getJSON('index.php?act=show_store&op=ajax_store_trend_count&store_id=1', function(data){
				$this.find('li:eq(2)').find('a').html(data.count);
				storeTrends = false;
			});
		}
	});

	$('a[nctype="share_store"]').click(function(){
		ajax_form('sharestore', '分享店铺', 'index.php?act=member_snsindex&op=sharestore_one&inajax=1&sid=1');
	});
});
</script>
</body>
</html>