<h2>Blog Posts</h2>

<div class="post-list">

    <?php if (isset($rows) && is_array($rows) && count($rows)) : ?>

        <?php foreach ($rows as $row) : ?>

            <?= $themer->display('blog/post', ['item' => $row]); ?>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="alert alert-warning">
            Sad day. You haven't told anyone the secrets of the Universe yet.
        </div>

    <?php endif; ?>

</div>