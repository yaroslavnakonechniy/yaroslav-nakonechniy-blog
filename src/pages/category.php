<section title="Products">
    <h1><?= $data['name'] ?></h1>
    <div class="product-list">
        <?php foreach (catalogGetCategoryBlog($data['category_id']) as $blog) : ?>
            <div class="product">
                <a href="/<?= $blog['url'] ?>" title="<?= $blog['name'] ?>">
                    <img src="/product-placeholder.png" alt="<?= $blog['name'] ?>" width="200"/>
                </a>
                <a href="/<?= $blog['url'] ?>" title="<?= $blog['name'] ?>"><?= $blog['name'] ?></a>
                <p><?= $blog['description'] ?></p>
                <p>By <span><?= $blog['author']?></span> </p>
                <span>data: <?= $blog['data'] ?></span>
                <button type="button">Add To Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</section>
