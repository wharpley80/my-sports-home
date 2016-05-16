<?php get_header(); ?>

  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-xs-9">
          <h1>Ballparks</h1>
        </div>
        <div class="col-xs-3 prev-next">
          <?php next_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
          <!-- Uses the id # of the Ballparks Page -->  
          <a href="<?php bloginfo('url'); ?>/?p=58"><span class="glyphicon glyphicon-th"></span></a>
          <?php previous_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
        </div>
      </div>
    </div>
    <div class="row">

      <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-sm-8 ballparks-image">

          <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
          ?>

          <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
          </p>

        <div class="modal fade modal" id="imagemodal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <img class="modal-logo" src="">
                <h2><?php the_title(); ?></h2> 
              </div>
              <div class="modal-body" id="my-body">
                <img src="" id="imagepreview" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
        <div class="row hidden-xs">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d1"></span>
              <h3 class="view-img"><?php the_field( 'title1' ); ?></h3><span data-id= "d1"></span>
              <img class="view-img" id="imageresourced1" src="<?php the_field( 'photo1' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d2"></span>
              <h3 class="view-img"><?php the_field( 'title2' ); ?></h3><span data-id= "d2"></span>
              <img class="view-img" id="imageresourced2"  src="<?php the_field( 'photo2' ); ?>">
            </a>
          </div> 
        </div>
        <div class="row hidden-xs">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d3"></span>
              <h3 class="view-img"><?php the_field( 'title3' ); ?></h3><span data-id= "d3"></span>
              <img class="view-img" id="imageresourced3"  src="<?php the_field( 'photo3' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d4"></span>
              <h3 class="view-img"><?php the_field( 'title4' ); ?></h3><span data-id= "d4"></span>
              <img class="view-img" id="imageresourced4"  src="<?php the_field( 'photo4' ); ?>">
            </a>
          </div> 
        </div>
        <div class="row hidden-xs">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d5"></span>
              <h3 class="view-img"><?php the_field( 'title5' ); ?></h3><span data-id= "d5"></span>
              <img class="view-img" id="imageresourced5"  src="<?php the_field( 'photo5' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d6"></span>
              <h3 class="view-img"><?php the_field( 'title6' ); ?></h3><span data-id= "d6"></span>
              <img class="view-img" id="imageresourced6"  src="<?php the_field( 'photo6' ); ?>">
            </a>
          </div> 
        </div>
        </div>
        <div class="col-sm-4" id="reading-col">
          <h1><?php the_title(); ?></h1>
          <hr>

          <?php the_content(); ?>
          
          <hr>
          <p><a class="btn btn-large btn-primary" href="<?php the_field('link'); ?>">View Final Park <span class="glyphicon glyphicon-arrow-right"></span></a>
          </p>
        </div>
        </div>
          <div class="row photo-row hidden-sm hidden-md hidden-lg">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d1"></span>
              <h3 class="view-img"><?php the_field( 'title1' ); ?></h3><span data-id= "d1"></span>
              <img class="view-img" id="imageresourced1" src="<?php the_field( 'photo1' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d2"></span>
              <h3 class="view-img"><?php the_field( 'title2' ); ?></h3><span data-id= "d2"></span>
              <img class="view-img" id="imageresourced2"  src="<?php the_field( 'photo2' ); ?>">
            </a>
          </div> 
        </div>
        <div class="row hidden-sm hidden-md hidden-lg">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d3"></span>
              <h3 class="view-img"><?php the_field( 'title3' ); ?></h3><span data-id= "d3"></span>
              <img class="view-img" id="imageresourced3"  src="<?php the_field( 'photo3' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d4"></span>
              <h3 class="view-img"><?php the_field( 'title4' ); ?></h3><span data-id= "d4"></span>
              <img class="view-img" id="imageresourced4"  src="<?php the_field( 'photo4' ); ?>">
            </a>
          </div> 
        </div>
        <div class="row hidden-sm hidden-md hidden-lg">
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d5"></span>
              <h3 class="view-img"><?php the_field( 'title5' ); ?></h3><span data-id= "d5"></span>
              <img class="view-img" id="imageresourced5"  src="<?php the_field( 'photo5' ); ?>">
            </a>
          </div> 
          <div class="col-sm-6 extra-photos">
            <a href="#" data-toggle="modal"><span data-id= "d6"></span>
              <h3 class="view-img"><?php the_field( 'title6' ); ?></h3><span data-id= "d6"></span>
              <img class="view-img" id="imageresourced6"  src="<?php the_field( 'photo6' ); ?>">
            </a>
          </div> 
        </div>

      <?php endwhile; else: ?>

        <div class="page-header"> 
          <h1>Oh no!</h1>
        </div>
        <p>No content is appearing for this page!</p>

      <?php endif; ?>
     
    </div>
  </div>

<?php get_footer(); ?>