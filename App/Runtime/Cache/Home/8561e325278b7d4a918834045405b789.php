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

    <link rel="stylesheet" href="<?php echo STYLE;?>/css/all.css" type="text/css">

<div  id="portfolio" class="sel_portfolio">
<div class="container">
  <div class="main">
    <div class="ps_box">
      <div class="pics_switch">
        <div class="pb">

            <?php if(is_array($store[store_slide])): foreach($store[store_slide] as $k=>$vimg): if(!empty($vimg)): ?><div class="pic_box"><a class="pic_banner_00<?php echo ($k+1); ?>" target="_blank" href="<?php echo ($store[store_slide_url][ $k ]); ?>" style="background-image:url(<?php echo ($vimg); ?>); " ></a></div><?php endif; endforeach; endif; ?>
        </div>
        <div class="viewArrows prev">上一张</div>
        <div class="viewArrows next">下一张</div>
        <div class="pics_switch_clients">
          <ul>

         <?php if(is_array($store[store_slide])): foreach($store[store_slide] as $kk=>$v): if(!empty($v)): ?><li class="li_<?php echo ($kk+1); ?>"><span class="current"><?php echo ($kk+1); ?></span></li><?php endif; endforeach; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
    </div><!--banner结束 -->


      <!--banner结束 -->
<!-- 推荐 -->
    <section class="bbcl">
      <?php if(is_array($recomend_goods)): foreach($recomend_goods as $kg=>$v): ?><dl>
            <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" target="_blank"> <dd><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"/><div class="bs"></div> 
            <?php if($v[prom_type] > 0): ?><div class="qg">
                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
            </div><?php endif; ?>
            </dd></a>
            <dt><a href="#"><?php echo (getSubstr($v["goods_name"],0,16)); ?></a> </dt>
            <p><b>￥<?php echo ($v["shop_price"]); ?></b>&nbsp;<del><?php echo ($v["market_price"]); ?></del></p>
            <span>NOW CLICK</span>
        </dl><?php endforeach; endif; ?>
    </section>
<!-- 推荐 -->

    <div class="cl"></div>
    <section class="sec3"> <section class="sec">
          <section class="sec1"><a href="#"><img src="<?php echo STYLE;?>/images/sec1.jpg"/> </a> </section>
      </section></section>
<!-- 最新产品 -->
    <section class="bbcl">
          <?php if(is_array($new_goods)): foreach($new_goods as $kg=>$v): ?><dl>
            <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" target="_blank"> <dd><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"/><div class="bs"></div> 
            <?php if($v[prom_type] > 0): ?><div class="qg">
                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
            </div><?php endif; ?>
            </dd></a>
            <dt><a href="#"><?php echo (getSubstr($v["goods_name"],0,16)); ?></a> </dt>
            <p><b>￥<?php echo ($v["shop_price"]); ?></b>&nbsp;<del><?php echo ($v["market_price"]); ?></del></p>
            <span>NOW CLICK</span>
        </dl><?php endforeach; endif; ?>
      </section>
<!-- 最新产品 -->

    <div class="cl"></div>
    <section class="sec3">
        <section class="sec">
          <section class="sec1"><a href="#"><img src="<?php echo STYLE;?>/images/sec2.jpg"/> </a> </section>
      </section>
    </section>
    <!-- <section class="fl">
        <div class="nav">
            <div class="left"></div>
            <div class="mid">
                <p>Category navigation</p>
                <p>品类导航</p>
            </div>
            <div class="left"></div>
        </div>
        <div class="one">
            <div class="left"><a href="#"><img src="<?php echo STYLE;?>/images/fl1.jpg"/> </a><div class="bt"><span>羽绒服</span></div> </div>
            <ul class="mid">
                <li>
                    <a href="#"><p>------女士皮衣------<br/>
                        Ms. leather</p></a>
                </li>
                <li>
                    <a href="#"><p>------商场同款------<br/>
                        Shopping mall</p></a>
                </li>
                <li>
                    <a href="#"><p>------轻薄羽绒服------<br/>
                        Thin down jacket</p></a>
                </li>
                <li>
                    <a href="#"><p>------手工棉服------<br/>
                        Handmade cotton</p></a>
                </li>
            </ul>
            <div class="right"><a href="#"><img src="<?php echo STYLE;?>/images/fl2.jpg"/> </a> </div>
        </div>
    </section> -->
    <!-- 收藏排行榜 -->
    <section class="bbcl">
            <?php if(is_array($collect_goods)): foreach($collect_goods as $kg=>$v): ?><dl>
            <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" target="_blank"> <dd><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"/><div class="bs"></div> 
            <?php if($v[prom_type] > 0): ?><div class="qg">
                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
            </div><?php endif; ?>
            </dd></a>
            <dt><a href="#"><?php echo (getSubstr($v["goods_name"],0,16)); ?></a> </dt>
            <p><b>￥<?php echo ($v["shop_price"]); ?></b>&nbsp;<del><?php echo ($v["market_price"]); ?></del></p>
            <span>NOW CLICK</span>
        </dl><?php endforeach; endif; ?>
      </section>
    <!-- 收藏排行榜 -->
    <div class="cl"></div>
    <section class="sec3"> <section class="sec">
          <section class="sec1"><a href="#"><img src="<?php echo STYLE;?>/images/sec3.jpg"/> </a> </section>
      </section></section>
      <!-- 热门 -->
      <section class="bbcl">
                    <?php if(is_array($hot_goods)): foreach($hot_goods as $kg=>$v): ?><dl>
            <a href="<?php echo U('Goods/goodsInfo',array('id'=>$v[goods_id]));?>" target="_blank"> <dd><img src="<?php echo (goods_thum_images($v["goods_id"],240,240)); ?>"/><div class="bs"></div> 
            <?php if($v[prom_type] > 0): ?><div class="qg">
                    <?php if($v[prom_type] == 1): ?>抢购商品<?php endif; ?>
                    <?php if($v[prom_type] == 2): ?>团购商品<?php endif; ?>
                    <?php if($v[prom_type] == 3): ?>限时折扣<?php endif; ?>
            </div><?php endif; ?>
            </dd></a>
            <dt><a href="#"><?php echo (getSubstr($v["goods_name"],0,16)); ?></a> </dt>
            <p><b>￥<?php echo ($v["shop_price"]); ?></b>&nbsp;<del><?php echo ($v["market_price"]); ?></del></p>
            <span>NOW CLICK</span>
        </dl><?php endforeach; endif; ?>
      </section>
      <!-- 热门 -->
      <div class="cl"></div>
     
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