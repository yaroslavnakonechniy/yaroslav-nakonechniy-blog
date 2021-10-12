<?php

declare(strict_types=1);

namespace Blog\ContactUs;

use Blog\ContactUs\Controller\Form;

class Router implements \Blog\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'contact-us') {
            return Form::class;
        }

        return '';
    }
}
