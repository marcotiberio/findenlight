<a href="<?php the_permalink(); ?>"
    class="post grid-item grid-item--<?php $cat = get_the_category(); ?><?php get_page_template() ?>"
    title="<?php the_title(); ?>">
    <div class="featuredImage">
        <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="featuredInfo featuredInfo-top">
        <div class="title h3"><?php the_title(); ?></div>
        <div class="post-type paragraph"><?php echo $cat[0]->cat_name; ?></div>
        <!-- <div class="date paragraph"><?php the_field('datePost'); ?></div> -->
    </div>
</a>
