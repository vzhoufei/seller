<?php
namespace Mobile\Controller;
use Think\Controller;
class StoreController extends CommonController 
{

    public function index()
    {

    	$store_id = $this->store_id['store_id'];
        //热门商品排行
        $hot_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $store_id))->order('sales_sum desc')->limit(10)->select();
        foreach($hot_goods as &$v){
            $v['original_img'] = str_replace('/Public',C('DOMAIN').'/Public', $v['original_img']);
        }

        //收藏商品排行
        $collect_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $store_id))->order('collect_sum desc')->limit(10)->select();
         foreach($collect_goods as &$v){
            $v['original_img'] = str_replace('/Public',C('DOMAIN').'/Public', $v['original_img']);
        }
        //新品
        $new_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $store_id, 'is_new' => 1))->order('goods_id desc')->limit(10)->select();
         foreach($new_goods as &$v){
            $v['original_img'] = str_replace('/Public',C('DOMAIN').'/Public', $v['original_img']);
        }
        //推荐商品
        $recomend_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $store_id, 'is_recommend' => 1))->order('goods_id desc')->limit(10)->select();
         foreach($recomend_goods as &$v){
            $v['original_img'] = str_replace('/Public',C('DOMAIN').'/Public', $v['original_img']);
        }
        $goods_id_arr = array_merge(get_arr_column($new_goods, 'goods_id'), get_arr_column($recomend_goods, 'goods_id'));
        if ($goods_id_arr){
            $goods_id_arr = M('goods_images')->where("goods_id in (" . implode(',', $goods_id_arr) . ")")->cache(true)->select();
        }


        $this->news(10);//调取新闻
        $this->assign('hot_goods',$hot_goods);
        $this->assign('collect_goods', $collect_goods);
        $this->assign('new_goods', $new_goods);
        $this->assign('recomend_goods', $recomend_goods);
        $this->assign('goods_images', $goods_images); //相册图片
        $this->assign('recommend',$this->recommend());
        $this->display('/index');
    }


    //调取新闻
    public function news($num)
    {
        $store_navigation = M('store_navigation')->where(array('sn_store_id'=>$this->store_id['store_id'],'sn_is_list'=>1,'sn_is_show'=>1))->getField('sn_id',true);
        $news = M('store_art')->where('sn_id in('.implode(',',$store_navigation).')')->order('id desc')->limit($num)->select();
        foreach ($news as &$value) {
            $value['newsimg'] = str_replace('/Public', C('DOMAIN').'/Public', $value['newsimg']);
        }
        $this->assign('news',$news);
    }



       
       /**
     * 首页推荐
     */
    public function recommend()
    {
        //查询首页推荐栏目
        $product_m = M('goods');
        $recommend = M('store_goods_class')->where(array('store_id'=>$this->store_id['store_id'],'is_show'=>1,'is_recommend'=>1))->select();
        foreach($recommend as &$v){
            // 查询推荐商品
            $v['cat_id_goods'] = $product_m->where('store_cat_id1 = '.$v['cat_id'].' or store_cat_id2 = '.$v['cat_id'])->field('goods_id,goods_name,original_img,shop_price')->limit($v['show_num'])->select();
        }

        return $recommend;
    }
    
    


    /**
     * 商品列表
     */
    public function goods_list()
    {
        $store_id = $this->store_id['store_id'];
        $cat_id = I('cat_id', 0);
        $key = I('key', 'is_new');
        $sort = I('sort', 'desc');
        $keyword = urldecode(trim(I('keyword','')));
        $map = array('store_id' => $store_id, 'is_on_sale' => 1);
        $keyword && $map['goods_name']  = array('like','%'.$keyword.'%');
        $this->page('?');//上一页 下一页 按钮
        $cat_name = "全部商品";
        if ($cat_id > 0) {
            $map['_string'] = "store_cat_id1=$cat_id OR store_cat_id2=$cat_id";
            $cat_name = M('store_goods_class')->where(array('cat_id' => $cat_id))->getField('cat_name');
        }
        $filter_goods_id = M('goods')->where($map)->cache(true)->getField("goods_id", true);
        $count = count($filter_goods_id);
        $num = ceil($count / 12);
        $this->assign('num',$num);//页码
        $this->assign('current',$_GET['p']?$_GET['p']:1);//当前页
        $Page = new \Think\Page($count, 12);
        if ($count > 0) {
            $goods_list = M('goods')->where("goods_id in (" . implode(',', $filter_goods_id) . ")")->order("$key $sort")->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $filter_goods_id2 = get_arr_column($goods_list, 'goods_id');
            if ($filter_goods_id2) {
                $goods_images = M('goods_images')->where("goods_id in (" . implode(',', $filter_goods_id2) . ")")->cache(true)->select();
            }
        }

        $sort = ($sort == 'desc') ? 'asc' : 'desc';
        $this->assign('sort', $sort);
        $this->assign('keys', $key);
        $link_arr = array(
            array('key' => 'is_new', 'name' => '新品', 'url' => U('Store/goods_list', array('key' => 'is_new', 'sort' => $sort, 'cat_id'=>$cat_id, 'keyword'=>$keyword))),
            array('key' => 'shop_price', 'name' => '价格', 'url' => U('Store/goods_list', array('key' => 'shop_price', 'sort' => $sort, 'cat_id'=>$cat_id,'keyword'=>$keyword))),
            array('key' => 'sales_sum', 'name' => '销量', 'url' => U('Store/goods_list', array('key' => 'sales_sum', 'sort' => $sort, 'cat_id'=>$cat_id, 'keyword'=>$keyword))),
            array('key' => 'collect_sum', 'name' => '收藏', 'url' => U('Store/goods_list', array('key' => 'collect_sum', 'sort' => $sort, 'cat_id'=>$cat_id, 'keyword'=>$keyword))),
            array('key' => 'is_recommend', 'name' => '人气', 'url' => U('Store/goods_list', array('key' => 'is_recommend', 'sort' => $sort, 'cat_id'=>$cat_id, 'keyword'=>$keyword)))
        );

         foreach($goods_list as &$v){
            $v['original_img'] = str_replace('/Public',C('DOMAIN').'/Public', $v['original_img']);
        }

        //栏目信息
        $navlist = str_replace('/Public', C('DOMAIN').'/Public',M('store_goods_class')->where(array('store_id' => $this->store_id['store_id'], 'cat_id' => $cat_id))->find());
        $this->assign('navlist', $navlist);

        $this->assign('link_arr', $link_arr);
        $this->assign('goods_list', $goods_list);
        $this->assign('goods_images', $goods_images);  //相册图片
        $this->assign('cat_name', $cat_name);
        $page_show = $Page->show();// 分页显示输出
        $this->assign('page_show', $page_show);// 赋值分页输出
        $this->assign('navigation', $this->navigation);
        $this->assign('keyword',$keyword);
        $this->display('/goods_list');


    }


    /**
     * 文章列表
     */
     public function newsList()
    {
        $storeid = $this->store_id['store_id'];
        $_GET['p'] = isset($_GET['p'])?$_GET['p']:1;
        $sn_id = (empty($_GET['sn']))?0:(int)$_GET['sn'];
        $news = M('store_art')->where('store = '.$storeid.' and sn_id in (0,'.$sn_id.')')->page($_GET['p'].',12')->select();
        $count = M('store_art')->where('store = '.$storeid.' and sn_id in (0,'.$sn_id.')')->count();


        $num = ceil($count / 12);
        $this->assign('num',$num);//页码
        $this->assign('current',$_GET['p']?$_GET['p']:1);//当前页

        $page = new \Think\Page($count,12);
        $hot_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $storeid))->order('sales_sum desc')->limit(10)->select();
        //收藏商品排行
        $collect_goods = M('goods')->field('goods_content', true)->where(array('store_id' => $storeid))->order('collect_sum desc')->limit(10)->select();
        //新品
        foreach($news as &$v){
            $v['newsimg'] = str_replace('/Public', C('DOMAIN').'/Public', $v['newsimg']);
        }

        //栏目信息
        $navlist = str_replace('/Public', C('DOMAIN').'/Public', M('store_navigation')->where(array('store_id' => $storeid,'sn_id'=>$sn_id))->find());
        $this->assign('navlist', $navlist);
        $this->page('?');//上一页 下一页 按钮
        $this->assign('hot_goods', $hot_goods);
        $this->assign('collect_goods', $collect_goods);
        $this->assign('navigation', $this->navigation);
        $this->assign('page',$page->show());
        $this->assign('news',$news);
        $this->display('/newslist');
    }


    /**
     * 文章页
     */
    public function newscontent()
    {
        $storeid = $this->store_id['store_id'];
        $text = (empty($_GET['text']))?0:(int)$_GET['text'];
        if(!$text){$this->_empty();}
        $article = M('store_art');
        $news = $article->where(array('store'=>$storeid,'id'=>$text))->find();
        $where['id'] = array('gt',$news['id']);
        $where['store'] = $storeid;
        $where['sn_id'] = $news['sn_id'];
        $where['is_show'] = 1;
        $next = $article->where($where)->find();//下一篇
        unset($where['id']);
        $where['id'] = array('lt',$news['id']);
        $pre = $article->where($where)->find();//上一篇
        $this->assign('news',str_replace('/Public', C('DOMAIN').'/Public', $news));
        $this->assign('next',$next);//下一篇
        $this->assign('pre',$pre);//上一篇
        //点击量
        M('store_art')->where('id='.$text)->setInc('m_click',1);
        $this->display('/news');
    }


    /**
     * 单页
     */
    public function store_news()
    {
        $sn_id = I('sn_id');
        $navlist = str_replace('/Public', C('DOMAIN').'/Public',M('store_navigation')->where(array('sn_store_id' => $this->store_id['store_id'], 'sn_id' => $sn_id))->find());
        $this->assign('navlist', $navlist);
       $this->display('/store_news');

    }



    // 店内搜索
    public function search()
    {
        $keywords = I('get.keywords');
        $cat_id = $this->store_id['store_id'];
        if(!$keywords || !$cat_id){$this->redirect('Index/index'); }
        $map['store_id'] = array('eq',$cat_id);
        $where['goods_name'] = array('like','%'.$keywords.'%');
        $where['keywords'] = array('like','%'.$keywords.'%');
        $where['goods_remark'] = array('like','%'.$keywords.'%');
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $m = M('goods');
        $count = $m->where($map)->count();
        $num = ceil($count / 12);
        $page = new \Think\Page($count,12);
        $goods = $m->where($map)->limit($page->firstRow.','.$page->listRows)->select();
         foreach($goods as &$v){
            $v['original_img'] = str_replace('/Public', C('DOMAIN').'/Public', $v['original_img']);
        }
        $this->page('&');//上一页 下一页 按钮

        $this->assign('num',$num);//页码
        $this->assign('current',$_GET['p']?$_GET['p']:1);//当前页
        $this->assign('goods_list',$goods);
        $this->assign('page',$page->show);// 赋值分页输出
        $this->display('/goods_list');

    }

    /**
     * 上一页 下一页 按钮
     *$symbol  符号
     */
    public function page($symbol)
    {
        $prev = str_replace('p='.$_GET['p'], 'p='.($_GET['p']-1), $_SERVER['REQUEST_URI']);
        $request_uri = isset($_GET['p'])?$_SERVER['REQUEST_URI']:$_SERVER['REQUEST_URI'].$symbol.'p=2';
        $_GET['p'] = $_GET['p']?$_GET['p']:1;
        $next = str_replace('p='.$_GET['p'], 'p='.($_GET['p']+1), $request_uri);
        $this->assign('prev',$prev);//上一页
        $this->assign('next',$next);//下一页
    }


    public function _empty()
    {
        echo '404';
        // $this->display();
    }

}