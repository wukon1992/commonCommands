<?php 

//转储base64编码为文件
function base64ToImg($file)
{
    header('Content-type:text/html;charset=utf-8');
    $base64_image_content = trim($file);
    //正则匹配出图片的格式
    if (preg_match('/^(data:\s*(image|video)\/(\w+);base64,)/', $base64_image_content, $result)) {
        $type = $result[3];//图片后缀

 		$root_path = '.';
 		$save_path = "/Uploads/Picture/";
        $dateFile = date('Y-m-d', time()) . "/";  //创建目录
        $new_file = $root_path.$save_path. $dateFile;
        if (!file_exists($new_file)) {
            //检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir($new_file, 0700);
        }
 
        $filename = time() . '_' . uniqid() . ".{$type}"; //文件名
        $new_file = $new_file . $filename;
        //写入操作
        if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {
            return $save_path.$dateFile.$filename;  //返回文件名及路径
        } else {
            return false;
        }
    }else{
    	if(preg_match('/http/', $base64_image_content)){
    		return str_replace('http://'.$_SERVER['HTTP_HOST'], '', $base64_image_content);
    	}
    }
}


//thinkphp 简单上传图片
function Upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4','mp3');// 设置附件上传类型
    $upload->rootPath  =      './';  //根
    $upload->savePath  =      '/Uploads/Picture/'; // 设置附件上传目录
    $info = $upload->upload();
    if(!$info){
        return $upload->getError();
    }else{
        return $info;
    }
}





 ?>