<div id="comments">
    <?php
    if (have_comments()) :
        foreach ($comments as $comment) : ?>
            <div class="comment">
                <p><?php comment_author(); ?> says:</p>
                <p><?php comment_text(); ?></p>
            </div>
        <?php endforeach;
    endif;
    comment_form();
    ?>
</div>
