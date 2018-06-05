.Routed方式

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
  
  
  .路由的定义 requirement
    路由的requirements（条件），可以令特定的路由只匹配特定的条件（conditions）
    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
   .基于不同语言的路由定义_locale
   /**
     * @Route("/{_locale}", defaults={"_locale": "en"}, requirements={
     *     "_locale": "en|fr"
     * })
     */
    public function homepageAction($_locale)
    {
    }
    
    Path/路径	 Parameters/参数
    /	        {_locale} = "en"
    /en	      {_locale} = "en"
    /fr	      {_locale} = "fr"
    /es	      won't match this route
    
    .指定http请求方法的路由 method
      /**
     * @Route("/api/posts/{id}")
     * @Method({"GET","HEAD","put"})
     */
     
    .host匹配路由
    mobile_homepage:
    path:     /
    host:     m.example.com
    defaults: { _controller: AcmeDemoBundle:Main:mobileHomepage }

    homepage:
        path:     /
        defaults: { _controller: AcmeDemoBundle:Main:homepage }
    两个路由匹配相同的路径（path）/，但是第一个只在host主机是m.example.com时才算数。
    
   .高级路由应用实例
   /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showAction($_locale, $year, $slug)
    {
    }
    
    
    特殊路由参数 ¶
    你已经看到，每一个路由参数或其默认值最终都是可以做为参数（arguments）用在控制器方法（译注：即action）中的。此外，还有四个特殊参数：每一个都能为你的程序增添一个独有的功能性。

    _controller
    就像你看到的，此参数用于决定，当路由匹配时，须执行哪个控制器。
    _format
    用于设置request format (详见这里)。
    _fragment
    用于设置fragment identifier，即，URL中可选的最末部分，起自一个 # 字符，用来识别页面中的某一部分。

    Symfony 3.2: _fragment 参数自Symfony 3.2起被引入。
    _locale

