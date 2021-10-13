<section title="Products">
    <h1><?= $data['name'] ?></h1>
    <div class="product-list">
        <?php foreach (blogGetCategoryPost($data['category_id']) as $post) : ?>
            <div class="product">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="/product-placeholder.png" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"><?= $post['name'] ?></a>
                <p><?= $post['description'] ?></p>
                <p>By <span><?= $post['author']?></span> </p>
                <span>data: <?= $post['date'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</section>
