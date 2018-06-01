<?php 

1.symfony 安装：
	composer=> composer create-project symfony/framework-standard-edition my-project "3.2.*"

2.清除 Symfony 缓存：php bin/console cache:clear --env=prod --no-warmup --verbose/--no-debug

3.Assetic 部署正式环境必要步骤：php bin/console assetic:dump --env=prod --no-debug

4.Assetic 操作：php bin/console assetic:dump || php bin/console assetic:watch

5.创建数据库：php app/console doctrine:database:create

6.创建一个bundle：php bin/console generate:bundle --space src/AdminBundle



 ?>