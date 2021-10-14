<?php

/*
./app/views/posts/index.php
	Variables disponibles :
    -$posts: ARRAY(ARRAY(id AS postId, title, text, created_at AS postDate, quote, category_id))
    -$categories: ARRAY(ARRAY(id AS categorieId, name AS categorieName, created_at))
*/
?>

<div class="col-md-12 content-page">


    <!-- ADD A POST -->
    <div>
        <a href="posts/add/form.html" type="button" class="btn btn-primary">Add a Post</a>
    </div>
    <!-- ADD A POST END -->

    <!-- Blog Post Start -->
    <div class="col-md-12 blog-post">
        <?php foreach ($posts as $post) : ?>
            <div class="post-title">
                <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Core\Functions\slugify($post['title']); ?>.html">
                    <h1><?php echo $post['title']; ?></h1>
                </a>
            </div>
            <div class="post-info">
                <span> <?php echo Core\Functions\datify($post['postDate'], 'Y\-m\-d'); ?> </span> | <span><?php echo $post['categorieName']; ?></span>
            </div>
            <p><?php echo \Core\Functions\truncate($post['text']); ?>
            </p>
            <a href="posts/<?php echo $post['postId']; ?>/<?php echo \Core\Functions\slugify($post['title']); ?>.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
        <?php endforeach; ?>

    </div>
    <!-- Blog Post End -->
</div>