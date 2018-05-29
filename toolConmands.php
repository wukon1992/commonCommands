<?php 

1、composer 中国镜像调用命令：
	========>方法一： 修改 composer 的全局配置文件（推荐方式）

	打开命令行窗口（windows用户）或控制台（Linux、Mac 用户）并执行如下命令：

	-------->composer config -g repo.packagist composer https://packagist.phpcomposer.com
	################################
	========>方法二： 修改当前项目的 composer.json 配置文件：

	打开命令行窗口（windows用户）或控制台（Linux、Mac 用户），进入你的项目的根目录（也就是 composer.json 文件所在目录），执行如下命令：

	-------->composer config repo.packagist composer https://packagist.phpcomposer.com

2、sublime3 插件安装控制台命令初始化包工具：
	-------->import urllib.request,os; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); open(os.path.join(ipp, pf), 'wb').write(urllib.request.urlopen( 'http://sublime.wbond.net/' + pf.replace(' ','%20')).read())

 ?>