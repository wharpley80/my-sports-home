<?php
/*
  Template Name: Gallery Homepage Template
*/
?>
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        
        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header"> 
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="jumbotron">

            <?php the_content(); ?>
            
          </div>

        <?php endwhile; else: ?>

        <div class="page-header"> 
          <h1>Oh no!</h1>
        </div>
        <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>
     
      <?php get_sidebar('gallery'); ?>
     
    </div>
  </div>

<?php get_footer(); ?>