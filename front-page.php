<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 * 
 * 
 * 
 * 
 */
get_header(); ?>

<section class="jumbotron">
   <div class="container">
      <img class="" src="<?php echo get_template_directory_uri() . "/images/bessemer_team_aristotle.png"; ?>" alt="The Bessemer team">
     <h1><?php echo CFS()->get( 'jumbotron_title' );?></h1>
    
     <p>
       <?php echo CFS()->get( 'jumbotron_subtitle' );?>
     </p>
     
     <p>
       <?php $jbo_link = CFS()->get( 'jumbotron_btn' );?>
       <a class="btn btn-warning btn-lg" href="<?php echo $jbo_link["url"];?>" title="<?php echo $jbo_link["text"];?>" target="<?php echo $jbo_link["target"];?>" role="button"><?php echo $jbo_link["text"];?></a>
     </p>
  </div>
</section>

<section id="primary" class="page-service-marketing-container">
  <div class="container">
    <div class="row">
      <main id="main" class="col-md-12" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
              <?php edit_post_link( esc_html__( 'Edit', 'sth' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-footer -->
          </article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>        
        </main><!-- #main -->

    </div><!-- #primary -->
    

  </div>
</section>

<?php get_footer(); ?>