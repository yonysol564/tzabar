<div class="answers">
    <div class="post">
        <div class="post_date"><?php the_time(get_option('date_format')); ?> | <?php the_title(); ?></div>
        <div class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
        <div class="cont">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="doc_reply">
        <div class="doc_reply_rt">
            <img class="reply_doc" src="<?php echo THEME_DIR; ?>/images/doctor.png" width="100" height="100" alt="" />
        </div>
        <div class="doc_reply_lft">
            <div class="cont">
                <?php echo get_field('doctor_answer'); ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
