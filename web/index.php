<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();

try {
    $containerBuilder->addDefinitions('../config/di.php');
    $container = $containerBuilder->build();
    /** @var \Blog\Framework\Http\RequestDispatcher $requestDispatcher */
    $requestDispatcher = $container->get(\Blog\Framework\Http\RequestDispatcher::class);
    $requestDispatcher->dispatcher();
}catch (\Exception $e) {
    echo "{$e->getMessage()} in file {$e->getFile()} at line {$e->getLine()}";
    exit(1);
}


//
//$requestDispatcher = new \Blog\Framework\Http\RequestDispatcher([
//    new \Blog\Cms\Router(),
//    new \Blog\Catalog\Router(),
//    new \Blog\ContactUs\Router(),
//]);
//$requestDispatcher->dispatcher();


exit;


switch ($requestUri) {

    default:
        if ($data = catalogGetCategoryByUrl($requestUri)) {
            $page = 'category.php';
            break;
        }

        if ($data = catalogGetBlogByUrl($requestUri)) {
            $page = 'blog.php';
            break;
        }

        break;
}

