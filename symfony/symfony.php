<?php 

1.symfony 安装：
	composer=> composer create-project symfony/framework-standard-edition my-project "3.2.*"

2.清除 Symfony 缓存：php bin/console cache:clear --env=prod --no-warmup --verbose/--no-debug

3.Assetic 部署正式环境必要步骤：php bin/console assetic:dump --env=prod --no-debug

4.Assetic 操作：php bin/console assetic:dump || php bin/console assetic:watch

5.创建数据库：php app/console doctrine:database:create

6.创建一个bundle：php bin/console generate:bundle --space src/AdminBundle

7.创建一个控制器：php bin/console generate:controller 

8.创建一个实体：php bin/console doctrine:generate:entity 

9 entity 的field 字段设置
@ORM\Column(name="filed_name", type="string", length=64, nullable=true, options={"default" : "default_value", "comment": "字段注释","fixed": true})
type(可选的,默认为“字符串”)使用列映射类型。
name(可选的,默认为字段名)的名字列在数据库中。
length(可选,默认255)数据库中的列的长度。(只适用于如果使用string值列)。
unique(可选,默认错误)是否一个唯一键列。
nullable(可选,默认错误)数据库列是否可以为空。
precision(可选,默认0)的精度小数(具体数值)列(只适用于十进制列),这是数字存储的最大数量的值。
scale(可选,默认0)小数(具体数值)列的规模(只适用于十进制列),代表的数字小数点右边的,不得大于精度。
columnDefinition(可选):允许定义一个自定义的DDL片段用于创建列。警告:这通常混淆SchemaTool总是检测列变化。
options:键值(可选)的选项传递给底层数据库平台当生成DDL语句。

10 创建getter setter php bin/console doctrine:generate:entities bundleName;
11 根据实体创建表到数据库 php bin/console doctrine:schema:update --force
 ?>