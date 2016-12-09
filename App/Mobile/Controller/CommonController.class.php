<?php
namespace Mobile\Controller;
use Think\Controller;
class CommonController extends Controller 
{
	public $store_id = array();

	public function _initialize()
	{
    	$domain = $_SERVER['HTTP_HOST'];//当前域名d
        // 判断设备
        if(!is_mobile()){
            header('location:http://'.$domain);
        }
    	$this->store_id = $store_id = M('store')->where(array('domain'=>$domain))->field('store_id')->find();//查询当前域名
    	if($store_id){

    			 C('DEFAULT_THEME',M('store')->where(array('store_id' => $store_id['store_id']))->getField('mtpl'));//模板名称
         		 define('STYLE',C('VIEW_PATHS').C('DEFAULT_THEME'));//css js路径
    	}else{

    		header("location:".C('DOMAIN')."");//跳转到主网站
    	}

    	 $this->assign('nav_where',1);
    	$store_id = $store_id['store_id'];//当前商户的id
        $store = M('store')->where(array('store_id' => $store_id))->find();
        if ($store) {
        	if($store['store_state'] == 0){
        		$this->error('该店铺不存在或者已关闭', U('Index/index'));
        	}
          
            $store = str_replace('/Public',C('DOMAIN').'/Public', $store);//将配置文件数组加上主域名
            $store['mb_slide'] = explode(',', $store['mb_slide']);
            $store['mb_slide_url'] = explode(',', $store['mb_slide_url']);


            $store['store_presales'] = unserialize($store['store_presales']);
            $store['store_aftersales'] = unserialize($store['store_aftersales']);
            unset($store['store_id']);
            $this->assign('store', $store);


        $this->load_tpl();//从远程加载模板
        $this->store_class();//店铺内部分类 导航
        } else {
            $this->error('该店铺不存在或者已关闭', U('Index/index'));
        }
	}


    //从远程加载模板
    public function load_tpl()
    {
            $tpldir = showdir('./mtpl');//当前已有的所有手机模板
            if(!in_array(C('DEFAULT_THEME'),$tpldir)){
                mkdir('./mtpl/'.C('DEFAULT_THEME'),777,true);//创建新文件夹
                foreach(tpl() as $v){
                    $url = C('DOMAIN').'/Merchants_tpl/mobile/'.C('DEFAULT_THEME').'/'.$v;//创建模板地址
                    $tplhtml = gettpl($url);//获取模板
                    file_put_contents('./mtpl/'.C('DEFAULT_THEME').'/'.$v,$tplhtml);//写入文件
                }
            }
    }




    /**
     * 店铺内部分类
     */
    public function store_class()
    {

        $navigation = M('store_navigation')->field('sn_content', true)->where(array('sn_store_id' => $this->store_id['store_id'], 'sn_is_show' => 1))->select();//店铺导航
        $this->assign('navigation',$navigation);
        //分类
         $goods_class = M('store_goods_class')->where(array('store_id' =>$this->store_id['store_id'],'is_show'=>'1'))->select(); //'is_nav_show'=>'1',
            foreach($goods_class as $v){
                if($v['is_nav_show'] == 1){$goods_class_nav[]  = $v;}
                if($v['parent_id'] == 0){
                    $goods_class1[] = $v;
                }else{
                    $goods_class2[$v['parent_id']][] = $v;
                }
            }
            $this->assign('goods_class',$goods_class);//全部分类
            $this->assign('goods_class1',$goods_class1);//一级分类
            $this->assign('goods_class2',$goods_class2);//二级分类


        //分类在导航显示
        $goods_class_nav = M('store_goods_class')->where(array('store_id' => $this->store_id['store_id'], 'is_nav_show'))->select();
        $this->assign('goods_class_nav',$goods_class_nav);

    }




}