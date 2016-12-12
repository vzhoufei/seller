<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($store["store_name"]); ?></title>
    <link rel="stylesheet" href="<?php echo STYLE;?>/css/same.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLE;?>/css/main.css" type="text/css">
    <meta name="keywords" content="<?php echo ($store["seo_keywords"]); ?>" />
    <meta name="description" content="<?php echo ($store["seo_description"]); ?>"/>
    <script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo STYLE;?>/js/studio.js"></script>
</head>
<body style='overflow:scroll;overflow-x:hidden'>
<section class="warp">
<div class="logo">
       <div class="zuo">
           <?php if($store[store_logo] != ''): ?><img src="<?php echo ($store["store_logo"]); ?>" alt="<?php echo ($store["store_name"]); ?>" title="<?php echo ($store["store_name"]); ?>"/>
      <?php else: ?>
      <img src="__STATIC__/images/default_store_logo.gif" alt="<?php echo ($store["store_name"]); ?>" title="<?php echo ($store["store_name"]); ?>" /><?php endif; ?>
       </div>


     <div class="right">  <a href="#"> <img src="<?php echo STYLE;?>/images/logo1.jpg" style="float:right;"/></a></div>
    </div><!--logoover-->



<div style="width:100%;background:#000;margin-top:5px;">


    <nav class="nav">
      <ul>
          <li><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>" title='首页'>店铺首页</a><span>|</span></li>
          <li class="sybb"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>" title='产品'>所有宝贝</a><span>|</span>
              <ul class="dyj">
               <?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
                  <li class="erer"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>" title='<?php echo ($v["cat_name"]); ?>'><?php echo ($v["cat_name"]); ?></a>
                      <ul class="dej">
                       <?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 -->
                          <li><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>" title='<?php echo ($vs["cat_name"]); ?>'><?php echo ($vs["cat_name"]); ?></a> </li><?php endforeach; endif; ?>
                      </ul>
                  </li><?php endforeach; endif; ?>
              </ul>
          </li>

        <?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
          <?php if(empty($vv[sn_url])): ?><a <?php if($vv['sn_new_open']){echo 'target="_blank"';}?> href="<?php if($vv[sn_is_list] == 1): echo U('Store/NewsList',array('store_id'=>$store[store_id],'sn'=>$vv[sn_id])); else: echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id])); endif; ?>"  title = '<?php echo ($vv["sn_keyword"]); ?>'>
          <?php else: ?>
          <a href="<?php echo ($vv["sn_url"]); ?>"  title = '<?php echo ($vv["sn_keyword"]); ?>'><?php endif; ?>
          <?php echo ($vv["sn_title"]); ?></a>
          </li><?php endforeach; endif; ?>


        <?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id]));?>" title='<?php echo ($vz["cat_name"]); ?>'><?php echo ($vz["cat_name"]); ?></a><span>|</span> </li><?php endforeach; endif; ?>
    </nav><!--页头结束 -->

</div>

<style>.default p{z-index:2em;}</style>
<img src="<?php echo ($banner); ?>" style="width:100%;" />
  <div class="wrapper" ><div class='title'><h1>新闻<h1></div><ul class='news'>
 <?php if(is_array($news)): foreach($news as $key=>$v): ?><li>
		<a href="<?php echo U('Store/Newscontent',array('store_id'=>$store[store_id],'sn'=>$sn_id,'text'=>$v[id]));?>">
		<div class='n-title'>
			《<?php echo (mb_substr($v["title"],0,20,'utf-8')); ?>》
		</div>
		<div class='n-title'>
			<?php echo (mb_substr($v["description"],0,20,'utf-8')); ?>...
		</div>
		<div class='n-author'>作者：<?php echo ($v["author"]); ?></div>
		<div class='n-time'><?php echo (date('Y-m-d',$v["timer"])); ?></div>
		</a>
	</li><?php endforeach; endif; ?>
  <li class='pg'><?php echo ($page); ?></li></ul>
  </div>
<style>
	.wrapper{margin: 0 auto;width: 80%;}
	.wrapper .title{margin-top: 20px;border-left: 4px solid #000;height: 40px;line-height: 40px;padding-left: 20px;}
	.wrapper .news{margin-top: 30px;width: 100%;}
	.wrapper .news li{width: 100%;line-height: 40px;height: 40px;border-bottom: #008BB9 dotted 1px;margin-bottom: -1px;}
	.wrapper .news li .n-title{float: left;margin-left: 20px;}
	.wrapper .news li .n-author{width: 30%;float: left;margin-left: 20px;}
	.wrapper .news li .n-time{margin-right: 10px;float: right;}
	.news .pg {height: 50px !important;}
	.news .pg .paginate_button{border: none;min-width: 40px;width:auto;margin-right: 10px;float:left;}
	.news .pg .active,.news .pg .active a{background-color: #099;color:#fff;}
	.news .pg .pagination{margin: 0px auto;height:33px;margin-top: 5px;float: right;text-align: center;}
</style>
 <footer class="footer">
          <div class="pr">
              <dl>
                  <dt>帮助中心</dt>
                  <dd><a href="#" target="_blank">卖家入门</a></dd>
                  <dd><a href="#" target="_blank">咋呼管理</a></dd>
                  <dd><a href="#" target="_blank">购物指南</a></dd>
                  <dd><a href="#" target="_blank">订单操作</a></dd>
              </dl>
              <dl>
                  <dt>服务支持</dt>
                  <dd><a href="#" target="_blank">售后服务</a></dd>
                  <dd><a href="#" target="_blank">自助服务</a></dd>
                  <dd><a href="#" target="_blank">相关下载</a></dd>
                  <dd><a href="#" target="_blank">商家服务</a></dd>
              </dl>
              <dl>
                  <dt>关于云狄</dt>
                  <dd><a href="#" target="_blank">了解运狄</a></dd>
                  <dd><a href="#" target="_blank">加入云狄</a></dd>
                  <dd><a href="#" target="_blank">联系我们</a></dd>
                  <dd><a href="#" target="_blank">未来发展</a></dd>
              </dl>
              <dl>
                  <dt>关于我们</dt>
                  <dd><a href="#" target="_blank">新浪微博</a></dd>
                  <dd><a href="#" target="_blank">官方微信</a></dd>
                  <dd><a href="#" target="_blank">在线客服</a></dd>
                  <dd><a href="#" target="_blank">经营模式</a></dd>
              </dl>
              <dl class="right">
                  <h1>020-123456</h1>
                  <p>   周一至周日 9:00:18：00</p>
                  <p class="kf">24小时在线客服</p>
              </dl>
          </div>
          <h6>有情链接：<a href="#" target="_blank">百度</a>   <a href="#" target="_blank">  盛大在线</a></h6>
          <footer>
              广州云狄建站科技有限公司 版权所有<br />
              粤ICP备09116842号
          </footer>
      </footer>