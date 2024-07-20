<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date">Published <?php the_date(); ?></span>
            <span class="tag"><i class='fa fa-tag'></i> <?php the_tags(); ?></span>
            <span class="tag"><i class='fa fa-tag'></i> Categories</span>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span></div>
            <!-- <span class="tag"><i class='fa fa-tag'></i> <?php the_category(); ?></span>
            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php the_comment(); ?></a></span></div> -->
    </header>
    <?php
    the_content();
    ?>
<?php 
comments_template();?>
</div>