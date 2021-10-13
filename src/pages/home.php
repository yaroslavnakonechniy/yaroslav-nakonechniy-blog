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
        <?php foreach (blogGetNewPosts() as $blog) : ?>
            <div class="post">
                <a href="/<?= $blog['url'] ?>" title="<?= $blog['name'] ?>">
                    <img src="/product-placeholder.jpeg" alt="<?= $blog['name'] ?>" width="200"/>
                </a>
                <p><a href="/<?= $blog['url'] ?>" title="<?= $blog['name'] ?>"><?= $blog['name'] ?></a></p>
                <p>By <span><?= $blog['author']?></span> </p>
                <p><?= $blog['description'] ?></p>
                <p><?= $blog['author'] ?></p>
                <p> <span>data: <?= $blog['date']?></span></p>
                <a href="/contact-us"><button type="button">Comment</button></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
