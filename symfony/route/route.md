-Routed方式
  1.annotation 方法上添加注释的方式增加路由
    M：
    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
 
 2.yml 方式
  # app/config/routing.yml
  blog_list:
    path:      /blog/{page}
    defaults:  { _controller: AppBundle:Blog:list }
    requirements:
        page: '\d+'
 
 3.xml 方式
 <!-- app/config/routing.xml -->
 <?xml version="1.0" encoding="UTF-8" ?>
 <routes xmlns="http://symfony.com/schema/routing"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/routing
        http://symfony.com/schema/routing/routing-1.0.xsd">
 
    <route id="blog_list" path="/blog/{page}">
        <default key="_controller">AppBundle:Blog:list</default>
        <requirement key="page">\d+</requirement>
    </route>
 
    <!-- ... -->
 </routes>
 
 4.php 方式
 // app/config/routing.php
  use Symfony\Component\Routing\RouteCollection;
  use Symfony\Component\Routing\Route;

  $collection = new RouteCollection();
  $collection->add('blog_list', new Route('/blog/{page}', array(
      '_controller' => 'AppBundle:Blog:list',
  ), array(
      'page' => '\d+'
  )));

  // ...

  return $collection;
