<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$requestDispatcher = new \Blog\Framework\Http\RequestDispatcher([
    new \Blog\Cms\Router(),
    new \Blog\Catalog\Router(),
    new \Blog\ContactUs\Router(),
]);
$requestDispatcher->dispatcher();


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

