<?php 

1、composer 中国镜像调用命令：
	========>方法一： 修改 composer 的全局配置文件（推荐方式）

	打开命令行窗口（windows用户）或控制台（Linux、Mac 用户）并执行如下命令：

	-------->composer config -g repo.packagist composer https://packagist.phpcomposer.com
	################################
	========>方法二： 修改当前项目的 composer.json 配置文件：

	打开命令行窗口（windows用户）或控制台（Linux、Mac 用户），进入你的项目的根目录（也就是 composer.json 文件所在目录），执行如下命令：

	-------->composer config repo.packagist composer https://packagist.phpcomposer.com
**********************************************************************************************************************************

2、sublime3 插件安装控制台命令初始化包工具：
	-------->import urllib.request,os; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); open(os.path.join(ipp, pf), 'wb').write(urllib.request.urlopen( 'http://sublime.wbond.net/' + pf.replace(' ','%20')).read())

**********************************************************************************************************************************

3、sublime3 右键打开文件
	------>开始-运行-regedit打开注册表编辑器。
	------>选择HKEY_CLASSES_ROOT——*——shell，右键，新建项，命名为Edit with Sublime Text3(可以根据自己的喜欢调整)，然后在右边 新建-字符串值，命名为“Icon”，值为"C:\Program Files (x86)\Sublime Text3\sublime_text.exe,0"
	------>然后在Edit with Sublime Text3下新建-项，命名为command，然后修改右边的默认值为"C:\Program Files (x86)\Sublime Text3\sublime_text.exe %1"

**********************************************************************************************************************************

4、git 配置项目push提交重复输入github帐号
	------>在每次push 的时候，都要输入用户名和密码，是不是很麻烦？原因是使用了https方式 push，在git bash里边输入 git remote -v
	------>接下来，我们把它换成ssh方式的。command=>git remote rm origin
	------>git remote add origin git@github.com:(sosout/myblog.git) 括号内容为仓库名称
	------>git push origin master
 ?>