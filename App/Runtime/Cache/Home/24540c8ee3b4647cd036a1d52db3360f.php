<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($store["store_name"]); ?></title>
    <link rel="stylesheet" href="<?php echo STYLE;?>/css/same.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLE;?>/css/main.css" type="text/css">
    <script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo STYLE;?>/js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo STYLE;?>/js/studio.js"></script>
</head>
<body style='overflow:scroll;overflow-x:hidden'>
<section class="warp">
      <header class="head">
      <?php if($user["user_id"] > 0): ?><div class="left">Hi，你好  <a href="<?php echo U('/User/index');?>" style="color:#fff;"><?php echo ($user["nickname"]); ?></a></div><?php endif; ?>
          <nav class="fir">
              <ul>
                  <?php if($user["user_id"] == 0): ?><li><a href="<?php echo U('User/register');?>" target="_blank">注册</a></li>
                   <li><a href="<?php echo U('User/login');?>" target="_blank">登录</a></li><span>|</span><?php endif; ?>
                  <li><img src="<?php echo STYLE;?>/images/index1.jpg" width="15" height="30"  alt=""/>&nbsp;&nbsp;<a href="<?php echo U('/User/order_list');?>" target="_blank">我的订单</a></li><span>|</span>
                  <li><a href="<?php echo U('/Cart/cart');?>" target="_blank">购物车</a></li><span>|</span>
                  <li><a href="#" target="_blank">投诉举报</a></li><span>|</span>
                  <li><a href="#" target="_blank">客服中心</a></li><span>|</span>
                  <li><a href="#" target="_blank">帮助</a></li>
              </ul>
          </nav>
      </header>

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
          <li><a href="<?php echo U('Store/index',array('store_id'=>$store[store_id]));?>">店铺首页</a><span>|</span></li>
          <li class="sybb"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id]));?>">所有宝贝</a><span>|</span>
              <ul class="dyj">
               <?php if(is_array($main_cat)): foreach($main_cat as $key=>$v): ?><!-- 商品分类 -->
                  <li class="erer"><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$v[cat_id]));?>"><?php echo ($v["cat_name"]); ?></a>
                      <ul class="dej">
                       <?php if(is_array($sub_cat[ $v['cat_id'] ])): foreach($sub_cat[ $v['cat_id'] ] as $key=>$vs): ?><!-- 二级分类 -->
                          <li><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vs[cat_id]));?>"><?php echo ($vs["cat_name"]); ?></a> </li><?php endforeach; endif; ?>
                      </ul>
                  </li><?php endforeach; endif; ?>
              </ul>
          </li>

        <?php if(is_array($navigation)): foreach($navigation as $kk=>$vv): ?><li <?php if($vv['sn_id'] == $_GET['sn_id']){echo 'class="top_nav_barM"';}?> >
          <?php if(empty($vv[sn_url])): ?><a <?php if($vv['sn_new_open']){echo 'target="_blank"';}?> href="<?php if($vv[sn_is_list] == 1): echo U('Store/NewsList',array('store_id'=>$store[store_id],'sn'=>$vv[sn_id])); else: echo U('Store/store_news',array('store_id'=>$store[store_id],'sn_id'=>$vv[sn_id])); endif; ?>">
          <?php else: ?>
          <a href="<?php echo ($vv["sn_url"]); ?>"><?php endif; ?>
          <?php echo ($vv["sn_title"]); ?></a>
          </li><?php endforeach; endif; ?>


        <?php if(is_array($link_cat)): foreach($link_cat as $key=>$vz): ?><li><a href="<?php echo U('Store/goods_list',array('store_id'=>$store[store_id],'cat_id'=>$vz[cat_id]));?>"><?php echo ($vz["cat_name"]); ?></a><span>|</span> </li><?php endforeach; endif; ?>
    </nav><!--页头结束 -->

</div>

    <link href="<?php echo STYLE;?>/css/page.css" type="text/css" rel="stylesheet">

<style>.selected{background:#f00;}</style>
 <?php if(($goods_list)): ?><div style="width:1200px;height:20px;margin:0 auto;margin-top:50px;border-bottom: 1px solid #DADADA;">

      <?php if(is_array($link_arr)): foreach($link_arr as $key=>$link): ?><li style="width:50px;float:left;text-align:center;" <?php if($link[key] == $keys): ?>class='selected'<?php endif; ?>>
            <a  <?php if($link[key] == $keys): ?>class="<?php echo ($sort); ?>"<?php endif; ?> href="<?php echo ($link["url"]); ?>"><?php echo ($link["name"]); ?></a>
            </li><?php endforeach; endif; ?>
</div>

    <section class="bbcl">
         <?php if(is_array($goods_list)): foreach($goods_list as $key=>$vo): ?><dl>
            <a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>" target="_blank"> <dd><img src="<?php echo (goods_thum_images($vo["goods_id"],240,240)); ?>" alt="<?php echo (getSubstr($vo["goods_name"],0,30)); ?>"/><div class="bs"></div>

             <?php if($vo[prom_type] > 0): ?><div class="qg">
                    <?php if($vo[prom_type] == 1): ?>抢购商品<?php endif; ?>
                    <?php if($vo[prom_type] == 2): ?>团购商品<?php endif; ?>
                    <?php if($vo[prom_type] == 3): ?>限时折扣<?php endif; ?>
            </div><?php endif; ?>

             </dd></a>

            <dt><a href="<?php echo U('Goods/goodsInfo',array('id'=>$vo[goods_id]));?>"><?php echo (getSubstr($vo["goods_name"],0,20)); ?></a> </dt>
            <p><b>￥<?php echo ($vo["shop_price"]); ?></b>&nbsp;<del><?php echo ($v["market_price"]); ?></del></p>
            <span>NOW CLICK</span>
        </dl><?php endforeach; endif; ?>
    </section>
      <?php else: ?>
       <div style="width:1200px;margin:0 auto;text-align:center;height:200px;line-height:200px;font-size:20px;"> 抱歉没有找到相关商品!       </div><?php endif; ?>
<div style="clear:both;width:100%;"></div>
         <div style="width:100%;margin:0 auto;text-align:center;"> <?php echo ($page_show); ?></div>
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
</section>
</body>
</html>