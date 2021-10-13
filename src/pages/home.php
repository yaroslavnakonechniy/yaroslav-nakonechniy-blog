<!-- @TODO: Implement recently viewed products -->
<section title="Recently Viewed Products">
    <h2>Recently Viewed Products</h2>
    <div class="product-list">
        <?php foreach (blogGetNewPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="/product-placeholder.png" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <p><a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"><?= $post['name'] ?></a></p>
                <p><?= $post['description'] ?></p>
                <p><?= $post['author'] ?></p>
                <p> <span>data: <?= $post['date']?></span></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
