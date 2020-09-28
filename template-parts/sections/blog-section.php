<div class="blog-section">
    <div class="container">
        <h1 class="blog-section__title">Latest News</h1>

        <?php
        $home_page_news = new WP_Query( [
            'posts_per_page' => 4
        ] );
        ?>

        <div class="blog-section__body">
            <?php if($home_page_news->have_posts($home_page_news)) : ?>
                <div class="posts posts--grid">
                    <?php while($home_page_news->have_posts()) : ?>
                        <?php $home_page_news->the_post(); ?>

                        <div class="post post--grid">
                            <div class="post__image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('small_images') ?>
                                </a>
                            </div>

                            <h3 class="post__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <a class="post__read-more" href="<?php the_permalink('/blog'); ?>">Read more</a>
                        </div><!-- post -->
                    <?php endwhile; ?>
                </div><!-- posts -->
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div><!-- blog-section__body -->
    </div><!-- container -->
</div><!-- blog-section -->