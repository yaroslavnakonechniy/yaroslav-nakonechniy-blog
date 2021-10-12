<?php

declare(strict_types=1);

namespace Blog\Catalog;

use Blog\Catalog\Controller\Blog;
use Blog\Catalog\Controller\Category;

class Router implements \Blog\Framework\Http\RouterInterface
{
    private \Blog\Framework\Http\Request $request;

    /**
     * @param \Blog\Framework\Http\Request $request
     */
    public function __construct(
        \Blog\Framework\Http\Request $request
    ) {

        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';

        if ($data = catalogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }

        if ($data = catalogGetBlogByUrl($requestUrl)) {
            $this->request->setParameter('blog', $data);
            return Blog::class;
        }

        return '';
    }
}
