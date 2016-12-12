<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller 
{
	public $store_id = array();

	public function _initialize()
	{
        $domain = $_SERVER['HTTP_HOST'];//当前域名
        // 判断设备
        if(is_mobile()){
            header('location:http://'.$domain.'/Mobile');
        }
    	$this->store_id = $store_id = M('store')->where(array('domain'=>$domain))->field('store_id')->find();//查询当前域名
    	if($store_id){
    			 C('DEFAULT_THEME',M('store')->where(array('store_id' => $store_id['store_id']))->getField('tpl'));//模板名称
         		 define('STYLE',C('VIEW_PATHS').C('DEFAULT_THEME'));//css js路径
                 // echo C('DEFAULT_THEME');
    	}else{

    		header("location:".C('DOMAIN')."");//跳转到主网站
    		// $this->redirect(C('DOMAIN'));
    	}

    	 $this->assign('nav_where',1);
    	$store_id = $store_id['store_id'];//当前商户的id
        $store_info = M('store')->where(array('store_id' => $store_id))->find();
        if ($store_info) {
        	if($store_info['store_state'] == 0){
        		$this->error('该店铺不存在或者已关闭', U('Index/index'));
        	}
          
            $store_info = str_replace('/Public',C('DOMAIN').'/Public', $store_info);//将配置文件数组加上主域名
            $store_info['store_slide'] = explode(',', $store_info['store_slide']);//幻灯片
            $store_info['store_slide_url'] = explode(',', $store_info['store_slide_url']);//幻灯链接
            $store_info['store_presales'] = unserialize($store_info['store_presales']);
            $store_info['store_aftersales'] = unserialize($store_info['store_aftersales']);
            $navigation = M('store_navigation')->field('sn_content', true)->where(array('sn_store_id' => $store_id, 'sn_is_show' => 1))->select();//店铺导航
            unset($store_info['store_id']);
            $this->assign('store', $store_info);
            $this->assign('navigation',$navigation);
            $this->load_tpl();//从远程加载模板
 
        //店铺内部分类
        $store_goods_class_list = M('store_goods_class')->where(array('store_id' => $store_id,'is_show'=>'1'))->select();//zhoufei 增加了 ,'is_show'=>'1'
        if ($store_goods_class_list) {
            $sub_cat = $main_cat = array();
            foreach ($store_goods_class_list as $val) {
                if ($val['parent_id'] == 0) {
                    $main_cat[] = $val;
                } else {
                    $sub_cat[$val['parent_id']][] = $val;
                }
            }
            $this->assign('main_cat', $main_cat);
            $this->assign('sub_cat', $sub_cat);
        }

        $link_cat = M('store_goods_class')->where(array('store_id' => $store_id, 'is_nav_show'))->select();
        $this->assign('link_cat',$link_cat);


        } else {
            $this->error('该店铺不存在或者已关闭', U('Index/index'));
        }




	}

    //从远程加载模板
    public function load_tpl()
    {
            $tpldir = is_dir('./tpl/'.C('DEFAULT_THEME'));//检测当前模板是否存在
            if(!$tpldir){
                //创建新文件夹
                 if(mkdir('./tpl/'.C('DEFAULT_THEME'),777,true)){
                //从远程加载模板
                foreach(tpl() as $v){
                    $url = C('DOMAIN').'/Merchants_tpl/pc/'.C('DEFAULT_THEME').'/'.$v;//创建模板地址
                    $tplhtml = gettpl($url);//获取模板
                    file_put_contents('./tpl/'.C('DEFAULT_THEME').'/'.$v,$tplhtml);//写入文件
                }
                 }else{

                    echo '创建目录失败！请检测目录权限！';
                 }
            }
            
    }





}





