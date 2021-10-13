<!-- @TODO: Implement recently viewed products -->
<section title="Recently Viewed Products">
    <h2>Recently Viewed Products</h2>
    <div class="product-list">
        <div class="product">
            <a href="/product-1-url" title="Product 1">
                <img src="/product-placeholder.png" alt="Product 1" width="200"/>
            </a>
            <a href="/product-1-url" title="Product 1">Product 1</a>
            <span>$33.33</span>
            <button type="button">Add To Cart</button>
        </div>
        <?php foreach (blogGetNewPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="/product-placeholder.jpeg" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <p><a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"><?= $post['name'] ?></a></p>
                <p><?= $post['description'] ?></p>
                <p><?= $post['author'] ?></p>
                <p> <span>data: <?= $post['date']?></span></p>
                <a href="/contact-us"><button type="button">Comment</button></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
