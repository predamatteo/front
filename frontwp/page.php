<?php get_header(); ?>
    <div class="container">
      <div class="row">
          <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post();?>
              <div class="col-md-12">
                <article class="card">
                  <div class="card-header">
                    <h3 class="card-title"><?php the_title();s ?></h3>
                  </div>
                  <div class="card-body">
                    <p class="text_contet">
                      <?php the_content(); ?>
                    </p>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
<?php get_footer(); ?>
