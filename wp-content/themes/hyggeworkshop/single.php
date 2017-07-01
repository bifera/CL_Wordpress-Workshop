<div class="post-box">

    <?php
    if (have_posts() ) :

    while ( have_posts() ) : the_post();
    ?>

    <p class="aside-text aligncenter">
        <a href="#" class="date"><?php echo get_the_date(); ?></a>
    </p>
    <h2 class="post-title aligncenter">
        <a href="#"><?php the_title();?></a>
    </h2>
    <p class="aligncenter">
        <a href="<?php the_permalink();?>" class="tag"><?php echo get_the_tag_list('', '&#124; '); ?></a>
    </p>
    <img src="img/img3.jpg" class="img-post">
    <p class="main-text">

        <?php the_content();
        ?>

    </p>
    <?php
    endwhile; // End of the loop.

    endif;

    ?>

    <span class="more-text tag">continue reading &#10137;</span>
</div>