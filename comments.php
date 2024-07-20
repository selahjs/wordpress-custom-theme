<div class="comments-wrapper">


    <div class="comments" id="comments">


        <div class="comments-header">

            <h2 class="comment-reply-title">
                <?php
                if( have_comments() === 0 ){
                    echo "Leave a comment!";
                }
                else{
                    echo get_comments_number(). " Comments";
                }
                ?>

        </div><!-- .comments-header -->

        <div class="comments-inner">

            <?php
                wp_list_comments(array(
                    'avatar_size' => 120,
                    'style' => 'div'
                ));
            ?>

        </div><!-- .comments-inner -->

    </div><!-- comments -->

    <hr class="" aria-hidden="true">
    <?php
        if(comments_open()){
            comment_form(array(
                'class_form' => ''
            ));
        }
    ?>

</div>