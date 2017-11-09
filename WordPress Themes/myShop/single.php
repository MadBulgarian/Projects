<?php get_header(); ?>

<div class="grid-x grid-padding-x">
  <div class="medium-8 cell">
    <div class="products grid-x">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="grid-x single-product">
            <div class="large-5 columns">
              <a href="<?php echo site_url(); ?>">Go Back</a>
              <br>
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
            <div class="large-7 columns">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <hr>
              <?php if(the_tags()) : ?>
                <?php if(function_exists('the_tags')) { ?>
                  <strong>Tags: </strong><?php the_tags('', ',', ''); ?><br>
                <?php } ?>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="medium-4 cell">
    <?php if(is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
