<?php

 declare(strict_types=1);

 return [
     \Blog\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
         'routers',
         [
             \DI\get(\Blog\Cms\Router::class),
             \DI\get(\Blog\Catalog\Router::class),
             \DI\get(\Blog\ContactUs\Router::class),
         ]
     )
 ];
