<?php

declare(strict_types=1);

namespace Blog\Catalog;

use Blog\Catalod\Controller\Blog;
use Blog\Catalog\Controller\Page;

class Router implements \Blog\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {

//        require_once '../src/data.php';
//
//        if ($data = catalogGetCategoryByUrl($requestUrl)) {
//           return Category::class;
//        }
//
//        if ($data = catalogGetBlogByUrl($requestUrl)) {
//           return Blog::class;
//        }

        return '';
    }
}
