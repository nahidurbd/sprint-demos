<h4>Recent Posts</h4>

<ul class="nav nav-list">
    <?php foreach ($posts as $post) : ?>
        <li>
            <a href="<?= site_url( 'blog/post/'. $post['id'] ) ?>"><?= $post['title'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>