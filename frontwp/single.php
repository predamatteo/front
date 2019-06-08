<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post();?>
              <article class="card">
                <div class="row">
                  <div class="col-md-5 center">
                    <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-7">
                    <h3> <a href="<?php echo the_permalink() ?>"><?php the_title(); ?><a/></h3>
                    <ul class="meta">
                       <li>By <a href=""><?php the_author(); ?></a></li>
                       <li><a href="<?php get_category_link( $category_id ); ?> "><?php the_category(); ?></a></li>
                    </ul>
                    <p class="text-content">
                      <?php the_content(); ?>
                    </p>
                  </div>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php if(is_active_sidebar('sidebar1')) : ?>
            <?php dynamic_sidebar('sidebar1'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
