<div class="post">

    <div class="post-head">
        <h3>
            <a href="<?= site_url( 'blog/post/'. $item['id'] ) ?>"><?= $item['title'] ?></a>
        </h3>
        <p class="small">Posted on <?= date('Y-m-d', strtotime($item['created_on']) ) ?> at <?= date('g:ia', strtotime($item['created_on']) )  ?></p>
    </div>

    <div class="post-body">
        <?= auto_typography($item['body']) ?>
    </div>

    <hr/>
</div>