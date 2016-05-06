<?php get_header(); ?>

<div> 

        <div class="row">
          <div class="col-md-9" id="home-cont">
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>

            <div class="page-header"> 
              <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>

          </div>
       
          <?php get_sidebar(); ?>

        </div>
       
     <!-- </div>-->

<?php get_footer(); ?>