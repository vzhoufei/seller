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
    			 C('DEFAULT_THEME',M('store')->where(array('store_id' => $store_id['store_id']))->getField('tpl').$this->store_id['store_id']);//模板名称
         		 define('STYLE',C('VIEW_PATHS').substr(C('DEFAULT_THEME'),0,-1));//css js路径
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


            //从远程加载模板
 			$tplconfig = include("./tpl/config".$this->store_id['store_id'].".php"); //引入当前模板配置
            if($tplconfig['tpl'] !=  C('DEFAULT_THEME')){

            	foreach(tpl() as $vc){
            		@unlink('./tpl/'.$tplconfig['tpl'].'/'.$vc);//删除原模板
            	}
            	rmdir('./tpl/'.$tplconfig['tpl']);//删除模板文件夹
            	mkdir('./tpl/'.C('DEFAULT_THEME'),777,true);//重新创建新文件夹
            	foreach(tpl() as $v){
            		$url = C('DOMAIN').'/Merchants_tpl/pc/'.substr(C('DEFAULT_THEME'),0,-1).'/'.$v;//创建模板地址
            		$tplhtml = gettpl($url);//获取模板
        			file_put_contents('./tpl/'.C('DEFAULT_THEME').'/'.$v,$tplhtml);//写入文件
            	}

            	//更改配置文件
            	$str_tpl = "<?php
						return array(

						        'tpl'=>'".C('DEFAULT_THEME')."',
						);";

            	file_put_contents("./tpl/config".$this->store_id['store_id'].".php",$str_tpl);
            }



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




}