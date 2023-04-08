
<?php

    /*
        Template Name: Properties
    */ 

?>

<?php get_header(); ?>
 <!-- Top Property Heading -->

 <section class="topProperty">
      <div class="container">
        <div class="title topProperty">
          <h2>popular</h2>
          <h3>Our Best Houses</h3>
        </div>
      </div>
    </section>

    <!-- Best Houses -->
    <?php
        $args = array(
            'post_type' => 'propertiesPost'
        );
        $newQuery = new WP_Query($args);
    ?>
    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
    <section class="bestOne">
      
      <div class="container">
        <div class="bestOne__wrapper">
        <span></span>
          <?php echo get_the_post_thumbnail(); ?>
          <div class="bestOne__desc">
            <h2><?php the_title(); ?></h2>
            <p>
                <?php the_content();?>
            </p>
            <a href="<?php the_permalink(); ?>">Continue</a>
          </div>
        </div>
      </div>
    </section>
    <?php
        endwhile;
        else :
            echo "There is no content!";
        endif;
        wp_reset_postdata();
    ?>

    <section class="calltoaction">
      <div class="container">
        
        <div class="calltoaction__content">
          <h2><?php echo get_field('content_title'); ?></h2>
          <?php echo get_field('content_parag'); ?>

          <a href="#" class="btn bgcolor--light"><?php echo get_field('content_button'); ?></a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>