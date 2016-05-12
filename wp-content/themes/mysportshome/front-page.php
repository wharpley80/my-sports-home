<?php get_header(); ?>

  <div class="container"> 
    <div class="row">
      <div class="col-md-9" id="home-cont">

        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
        ?>

        <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>graphic=">

        <?php endwhile; else: ?>

        <div class="page-header"> 
          <h1>Oh no!</h1>
        </div>
        <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>
         
      <?php get_sidebar(); ?>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <a href="http://localhost/my-sports-home/blog/">
      <div class="col-md-4" id="widget-left">

        <?php if ( dynamic_sidebar( 'front-left' ) ); ?>

      </div></a>
      <a href="http://localhost/my-sports-home/gallery/">
      <div class="col-md-4" id="widget-center">

        <?php if ( dynamic_sidebar( 'front-center' ) ); ?>

      </div>
      </a>
      <a href="http://localhost/my-sports-home/about/">
      <div class="col-md-4" id="widget-right">

        <?php if ( dynamic_sidebar( 'front-right' ) ); ?>

      </div>
      </a>
    </div>
  </div>

<?php get_footer(); ?>