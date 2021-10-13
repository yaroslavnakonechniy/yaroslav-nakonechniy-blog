<?php

declare(strict_types=1);

function blogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Sport',
            'url'         => 'sport',
            'posts'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'TV',
            'url'         => 'tv',
            'posts'    => [4, 3]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Shoping',
            'url'         => 'shoping',
            'posts'    => [5, 2, 6]
        ],
    ];
}

function blogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'name'        => 'Football',
            'url'         => 'football',
            'description' => 'NFL Week 5 game picks, schedule guide, fantasy football tips, odds, injuries and more',
            'author'      => 'Ivan Salabay',
            'date'       => '11-09-2021'
        ],
        2 => [
            'post_id'  => 2,
            'name'        => 'Tenis',
            'url'         => 'tenis',
            'description' => 'Product 2 Description',
            'author'      => 'Oleg Vinik',
            'date'       => '02-12-2021'
        ],
        3 => [
            'post_id'  => 3,
            'name'        => 'Basketball',
            'url'         => 'basketball',
            'description' => 'Product 3 Description',
            'author'      => 'Olga Rudko',
            'date'       => '04-08-2021'
        ],
        4 => [
            'post_id'  => 4,
            'name'        => 'News for world',
            'url'         => 'news-for-world',
            'description' => 'sdfds dsfdsf sfdsf sdf',
            'author'      => 'Mihail Vinik',
            'date'       => '01-09-2021'
        ],
        5 => [
            'post_id'  => 5,
            'name'        => 'New game',
            'url'         => 'new-game',
            'description' => 'Product 5 Description',
            'author'      => 'Taras Fedorchk',
            'date'       => '09-01-2021'
        ],
        6 => [
            'post_id'  => 6,
            'name'        => 'Product 6',
            'url'         => 'product-6',
            'description' => 'Product 6 Description',
            'author'      => 'Garik Jon',
            'date'       => '02-04-2022'
        ]
    ];
}

function blogGetNewPosts(): array
{
    $posts = blogGetPost();
    $key = [];
    $sortArray = [];
    $time = time();
    $number = 0;

    foreach ($posts as $post) {
        $keyPost = $time - strtotime($post['date']);
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

function blogGetCategoryPost(int $categoryId): array
{
    $categories = blogGetCategory();

    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exist");
    }

    $postsForCategory = [];
    $posts = blogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Product with ID $postId from category $categoryId does not exist");
        }

        $postsForCategory[] = $posts[$postId];
    }

    return $postsForCategory;
}

function blogGetBlogByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetPostByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetPost(),
        static function ($post) use ($url) {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}

