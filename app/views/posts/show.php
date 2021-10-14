<?php

/*
./app/views/posts/show.php
	Variables disponibles :
    -$posts: ARRAY(ARRAY(id AS postId, title, text, created_at AS postDate, quote, category_id))
*/

?>


<div class="sub-title">
    <a href="index.html" title="Go to Home Page">
        <h2>Back Home</h2>
    </a>
    <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
</div>


<div class="col-md-12 content-page">
    <div class="col-md-12 blog-post">


        <!-- Post Headline Start -->
        <div class="post-title">
            <h1><?php echo $post['title']; ?></h1>
        </div>
        <!-- Post Headline End -->


        <!-- Post Detail Start -->
        <div class="post-info">
            <span><?php echo Core\Functions\datify($post['postDate'], 'F d, Y'); ?></span> | <span><?php echo $post['categorieName'] ?></span>
        </div>
        <!-- Post Detail End -->


        <p><?php echo $post['text'] ?></p>



        <!-- Post Blockquote (Italic Style) Start -->
        <blockquote class="margin-top-40 margin-bottom-40">
            <p><?php echo $post['quote'] ?></p>
        </blockquote>
        <!-- Post Blockquote (Italic Style) End -->

        <!-- Post Buttons -->
        <div>
            <a href="posts/<?php echo $post['postId'] ?>/<?php echo \Core\Functions\slugify($post['title']); ?>/edit/form.html" type="button" class="btn btn-primary">Edit Post</a>
            <a href="posts/<?php echo $post['postId'] ?>/<?php echo \Core\Functions\slugify($post['title']); ?>/delete.html" type="button" class="btn btn-secondary delete" role="button">Delete Post</a>
        </div>
        <!-- Post Buttons End -->




    </div>
</div>