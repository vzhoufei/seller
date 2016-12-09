<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ($newslist["sn_title"]); ?></title>
     <meta name="keywords" content="<?php echo ($newslist["sn_keyword"]); ?>" />
    <meta name="description" content="<?php echo ($newslist["sn_description"]); ?>"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo STYLE;?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/demo-2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE;?>/css/style.css">
</head>
<body>
	
	
		<div class="screen">
        	<div class="navbar">
        		<a href="<?php echo U('Mobile/Store/index',array('store_id'=>$store[store_id]));?>" class="logo">
        			<img src="<?php echo ($store['store_logo']); ?>" alt="">
        		</a>
        	</div>
           <section class="news">
                     <div>
                     	 <h2>
                 	  		<em></em><?php echo ($newslist["sn_title"]); ?>
                 	  	</h2>
                     </div>
                 	<ul style="margin-top: 12px;">

    <?php if(is_array($news)): foreach($news as $key=>$v): ?><li >
                 		<a href="<?php echo U('newscontent',array('store_id'=>$storeid,'sn'=>$v['sn_id'],'text'=>$v['id']));?>" title="<?php echo ($v["title"]); ?>" style="color:#000;">
                 			<div>
                 				<img src="<?php echo ($v["newsimg"]); ?>" style="width:100%" />
                 			</div>
                 			<div>
                 				<div class="news_tle">
                 					<h2 style="margin-top:0px;margin-bottom:0px;height:12px;"><?php echo mb_substr($v['title'],0,16,'utf-8');?></h2>
                 				</div>
                 				<div class="news_text">
                 					 <?php echo mb_substr($v['description'],0,50,'utf-8');?>...
                 				</div>
                               
                 			</div>
                 		</a>
                        <div style="width:70%;float:right;margin-top:5px;">作者：<?php echo ($v["author"]); ?> | 文章来源：<?php echo ($v["rep"]); ?> | 发布时间：<?php echo (date("Y-m-d",$v["timer"])); ?></div>
                 		</li><?php endforeach; endif; ?>
                 	</ul>
                 </section>
<br style="clear:both;" />
                <section class="page_c" style="width:100%;height:30px;line-height:30px;text-align: center;">
                <div style="width:30%;float:left;height:30px;line-height:30px;text-align: center;">
                <a <?php if($_GET['p'] <= 1){echo 'style="display:none;"';};?> href="<?php echo ($prev); ?>">上一页</a></div>
                <div style="width:40%;float:left;height:30px;line-height:30px;text-align:center;"><?php echo ($current); ?>/<?php echo ($num); ?></div>
                <div style="width:30%;float:right;height:30px;line-height:30px;text-align:center;">
                <a <?php if($_GET['p'] >= $num){echo 'style="display:none;"';};?> href="<?php echo ($next); ?>">下一页</a></div>
            
        </section>
<br style="clear:both;" />

                  <section class="Gotop">
                </section>

               <section class="footer">
     
						<div><span class="footer_f"><?php echo ($store['copyright']); ?></span></div>
                </section>
                  <section class="pub_nav">
                      <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo ($store['store_qq']); ?>&amp;site=qq&amp;menu=yes">
                       <img src="<?php echo STYLE;?>/images/qq.png" alt="">
                       <span>QQ</span>   
                      </a>
                      <a href="tel:<?php echo ($store['store_phone']); ?>">
                      <img src="<?php echo STYLE;?>/images/tell.png" alt="">
                      <span>电话</span>
                      </a>
                      <a  id="btn"><img src="<?php echo STYLE;?>/images/001.png" alt=""><span>返回顶部</span> </a>
                  </section>

            </div><!-- list1 -->

        <!-- 导航 -->
	    <div class="circle" id="circle"></div>
			<div class="menu" id="menu">
            <div class="subNavBox">
            <div class="subNav">产品中心</div>
                <ul class="navContent">
                        <?php if(is_array($goods_class1)): foreach($goods_class1 as $key=>$class1): ?><li class="subNav1"> <a href="<?php echo U('goods_list',array('store_id'=>$store[store_id],'cat_id'=>$class1[cat_id]));?>"><?php echo ($class1["cat_name"]); ?></a></li>
                           <ul>
                            <?php if(is_array($goods_class2[$class1['cat_id']])): foreach($goods_class2[$class1['cat_id']] as $key=>$class2): ?><li><a href="<?php echo U('goods_list',array('store_id'=>$store[store_id],'cat_id'=>$class2[cat_id]));?>"><?php echo ($class2["cat_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul><?php endforeach; endif; ?>
                </ul>
            
            <?php if(is_array($navigation)): foreach($navigation as $key=>$v): ?><div class="subNav">
            <?php if($v[sn_is_list] == 1): ?><a href="<?php echo U('newsList',array('store_id'=>$store[store_id],'sn'=>$v[sn_id]));?>"><?php echo ($v["sn_title"]); ?></a>
            <?php elseif(empty($v[sn_url]) and $v[sn_is_list] == 0): ?>
            <a href="<?php echo U('store_news',array('store_id'=>$store[store_id],'sn_id'=>$v['sn_id']));?>"><?php echo ($v["sn_title"]); ?></a>
            <?php else: ?>
            <a href="<?php echo ($v["sn_url"]); ?>"><?php echo ($v["sn_title"]); ?></a><?php endif; ?>
            </div><?php endforeach; endif; ?>
            <?php if(is_array($goods_class_nav)): foreach($goods_class_nav as $key=>$vo): ?><div class="subNav"><a href="<?php echo U('goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vo[cat_id]));?>"><?php echo ($vo["cat_name"]); ?></a></div><?php endforeach; endif; ?>
       </div>
			</div>
			<div class="burger" id="burger">
				<div class="x"></div>
				<div class="y"></div>
        <div class="z"></div>
			</div>  
		</div>	
	<script src="<?php echo STYLE;?>/js/stopExecutionOnTimeout.js?t=1"></script>
    <script src="<?php echo STYLE;?>/js/jquery-1.9.1.min.js"></script>
  <script src="<?php echo STYLE;?>/js/index.js"></script>
   <script src="<?php echo STYLE;?>/js/lb.js"></script>
<script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.glide.min.js"></script>
<script type="text/javascript">
      var glide = $('.slider').glide({
          //autoplay:true,//是否自动播放 默认值 true如果不需要就设置此值
          animationTime:500, //动画过度效果，只有当浏览器支持CSS3的时候生效
          arrows:true, //是否显示左右导航器
          arrowsWrapperClass: "arrowsWrapper",//滑块箭头导航器外部DIV类名
          arrowMainClass: "slider-arrow",//滑块箭头公共类名
          arrowRightClass:"slider-arrow--right",//滑块右箭头类名
          arrowLeftClass:"slider-arrow--left",//滑块左箭头类名
          arrowRightText:">",//定义左右导航器文字或者符号也可以是类
          arrowLeftText:"<",

          nav:true, //主导航器也就是本例中显示的小方块
          navCenter:true, //主导航器位置是否居中
          navClass:"slider-nav",//主导航器外部div类名
          navItemClass:"slider-nav__item", //本例中小方块的样式
          navCurrentItemClass:"slider-nav__item--current" //被选中后的样式
        }); 
    </script>
</body>
</html>