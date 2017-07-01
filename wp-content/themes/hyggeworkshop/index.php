<?php get_header(); ?>
<section>
    <div class="photo-wrapper">
        <div class="photo-box">
            <img src="img/img1.jpg" alt=''>
        </div>
        <div class="photo-box">
            <img src="img/img2.jpg" alt=''>
        </div>
    </div>
</section>
<section id="main-section">
    <main class="main-content">
        <div class="wrapper">

            <?php 
            if (have_posts() ) :

            while ( have_posts() ) : the_post();			
            ?>
            <h2 class="post-title aligncenter">
                <a href = "<?php the_permalink(); ?>"  >
                <?php the_title(); ?>
                </a>
            </h2> 

            <p class="main-text">
                <?php the_content(); ?> 
            </p>

            <?php
            endwhile; // End of the loop.
            
            endif;


            ?>
        </div>
        <span class="more-text tag alignright">more posts &#10137;</span>
    </main>
    <aside class="aside">
        <div class="wrapper wrapper-aside">
            <div class="sidebar-box">
                <h4 class="aside-titles">Categories</h4>
                <ul class="sidebar menu">
                    <li><a href="#" class="tag">self-development</a></li>
                    <li><a href="#" class="tag">psychology</a></li>
                    <li><a href="#" class="tag">travelling</a></li>
                    <li><a href="#" class="tag">tradition</a></li>
                    <li><a href="#" class="tag">lifestyle</a></li>
                    <li><a href="#" class="tag">culture</a></li>
                    <li><a href="#" class="tag">habits</a></li>
                </ul>
            </div>
            <div class="sidebar-box">
                <h4 class="aside-titles">Related posts</h4>
                <ul class="sidebar menu">
                    <li class="mini-posts">
                        <a href="#" class="tag">
                            <h5 class="mini-title">Morning pleasures</h5>
                            <img src="img/mini1.jpg" alt="related post">
                        </a>
                    </li>
                    <li class="mini-posts">
                        <a href="#" class="tag">
                            <h5 class="mini-title">Easy (distr)action</h5>
                            <img src="img/mini2.jpg" alt="related post">
                        </a>
                    </li>
                    <li class="mini-posts">
                        <a href="#" class="tag">
                            <h5 class="mini-title">Meditaion</h5>
                            <img src="img/mini3.jpg" alt="related post">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</section>
<?php get_footer(); ?>