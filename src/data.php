
<?php

//declare(strict_types=1);

function catalogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Sport',
            'url'         => 'sport',
            'blog'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'TV',
            'url'         => 'tv',
            'blog'    => [4, 3]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Shoping',
            'url'         => 'shoping',
            'blog'    => [5, 2, 6]
        ],
    ];
}

function catalogGetBlog(): array
{
    return [
        1 => [
            'blog_id'  => 1,
            'name'        => 'Football',
            'url'         => 'football',
            'description' => 'NFL Week 5 game picks, schedule guide, fantasy football tips, odds, injuries and more',
            'data'       => '11-09-2021'
        ],
        2 => [
            'blog_id'  => 2,
            'name'        => 'Tenis',
            'url'         => 'tenis',
            'description' => 'Product 2 Description',
            'data'       => '02-12-2021'
        ],
        3 => [
            'blog_id'  => 3,
            'name'        => 'Basketball',
            'url'         => 'basketball',
            'description' => 'Product 3 Description',
            'data'       => '04-08-2021'
        ],
        4 => [
            'blog_id'  => 4,
            'name'        => 'News for world',
            'url'         => 'news-for-world',
            'description' => 'sdfds dsfdsf sfdsf sdf',
            'data'       => '01-09-2021'
        ],
        5 => [
            'blog_id'  => 5,
            'name'        => 'New game',
            'url'         => 'new-game',
            'description' => 'Product 5 Description',
            'data'       => '09-01-2021'
        ],
        6 => [
            'blog_id'  => 6,
            'name'        => 'Product 6',
            'url'         => 'product-6',
            'description' => 'Product 6 Description',
            'data'       => '02-04-2022'
        ]
    ];
}

function blogGetNewPosts(): array
{
    $posts = catalogGetBlog();
    $key = [];
    $sortArray = [];
    $time = time();
    $number = 0;

    foreach ($posts as $post) {
        $keyPost = $time - strtotime($post['data']);
        $key[$keyPost] = $post;
    }

    ksort($key);

    foreach ($key as $post) {
        if ($number < 3) {
            $sortArray [] = $post;
        } else {
            break;
        }
    }
    return $sortArray;
}

function catalogGetCategoryBlog(int $categoryId): array
{
    $categories = catalogGetCategory();

    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exist");
    }

    $blogsForCategory = [];
    $blogs = catalogGetBlog();

    foreach ($categories[$categoryId]['blog'] as $blogId) {
        if (!isset($blogs[$blogId])) {
            throw new InvalidArgumentException("Product with ID $blogId from category $categoryId does not exist");
        }

        $blogsForCategory[] = $blogs[$blogId];
    }

    return $blogsForCategory;
}

function catalogGetCategoryByUrl(string $url): ?array
{
    $data = array_filter(
        catalogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function catalogGetBlogByUrl(string $url): ?array
{
    $data = array_filter(
        catalogGetBlog(),
        static function ($blog) use ($url) {
            return $blog['url'] === $url;
        }
    );

    return array_pop($data);
}

