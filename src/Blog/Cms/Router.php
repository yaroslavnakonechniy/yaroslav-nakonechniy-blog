<?php

declare(strict_types=1);

namespace Blog\Cms;

use Blog\Cms\Controller\Page;

class Router implements \Blog\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === '') {
            return Page::class;
        }

        return '';
    }
}
