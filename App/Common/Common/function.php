<?php


/**
 * 获取数组中的某一列
 * @param type $arr 数组
 * @param type $key_name  列名
 * @return type  返回那一列的数组
 */
function get_arr_column($arr, $key_name)
{
	$arr2 = array();
	if(!empty($arr)){
		foreach($arr as $key => $val){
			$arr2[] = $val[$key_name];
		}
	}
	return $arr2;
}





/**
 *  商品缩略图 给于标签调用 拿出商品表的 original_img 原始图来裁切出来的
 * @param type $goods_id  商品id
 * @param type $width     生成缩略图的宽度
 * @param type $height    生成缩略图的高度
 */
function goods_thum_images($goods_id,$width,$height){

  
    $original_img = M('Goods')->where("goods_id = $goods_id")->getField('original_img');
    return C('DOMAIN').$original_img;
    
   
}





/**
 *   实现中文字串截取无乱码的方法
 */
function getSubstr($string, $start, $length) {
      if(mb_strlen($string,'utf-8')>$length){
          $str = mb_substr($string, $start, $length,'utf-8');
          return $str.'...';
      }else{
          return $string;
      }
}




// get请求方法
function gettpl($url)
{
		//初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        // curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        return $data;
}



function tpl()
{
	return array('index.html','header.html','footer.html','goods_list.html','left.html','news.html','newslist.html','store_news.html');
}





// 判断设备
function is_mobile() {
 static $is_mobile = null;
  
 if ( isset( $is_mobile ) ) {
  return $is_mobile;
 }
  
 if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
  $is_mobile = false;
 } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false 
  || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
  || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
  || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
  || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
  || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
  || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
   $is_mobile = true;
 } else {
  $is_mobile = false;
 }
  
 return $is_mobile;
}




//查找文件夹  手机模板用
 function showdir($path){
             $dir = array();
             $dh = opendir($path);//打开目录

             while(($d = readdir($dh)) != false)
             {
                 //逐个文件读取，添加!=false条件，是为避免有文件或目录的名称为0
                 if($d=='.' || $d == '..'){//判断是否为.或..，默认都会有

                 continue;
                 }
                 if(is_dir($path.'/'.$d)){
                 $dir[] = $d;
                  
                 }

                 
             }

             return $dir;
    }