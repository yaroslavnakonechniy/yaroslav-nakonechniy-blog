<?php

namespace Blog\Catalog\Controller;

use Blog\Framework\Http\ControllerInterface;

class Blog implements ControllerInterface
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

    public function execute(): string
    {
        $data = $this->request->getParameter('blog');
        $page = 'blog.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}