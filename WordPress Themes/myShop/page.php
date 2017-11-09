<?php get_header(); ?>
      
<?php if(is_active_sidebar('showcase')) : ?>
  <div class="grid-x grid-padding-x showcase">
    <div class="small-12 cell">
      <div class="callout secondary">
        <?php dynamic_sidebar('showcase'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="grid-x grid-padding-x">
  <div class="medium-8 cell">
    <div class="products grid-x">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="large-12 columns">
            <h3><?php the_title(); ?></h3>
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <?php the_content(); ?>
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
