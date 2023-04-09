<?php
    /*
        Template Name: Blog
    */ 
?>

<?php get_header(); ?>

 <!-- List Banner -->

 <section class="lbanner">
      <span></span>
      <div class="container">
        <div class="lbanner__content">
          <h2><?php echo get_field('content_title'); ?></h2>
          <p>
            <?php echo get_field('content_parag'); ?>
          </p>
          <a href="#" class="btn bgcolor--light"><?php echo get_field('content_button'); ?></a>
        </div>
      </div>
    </section>

    <!-- List -->

    <section class="list py--10">
      <div class="container">
        <div class="list__wrapper">
            <?php 
                $args = array(
                    'post_type' => 'blogPost'
                );
                $newQuery = new WP_Query($args);
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="list__item">
                <div class="list__item__container">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="content">
                    <small><?php echo get_field('blog_date'); ?></small>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p>
                        <?php echo wp_trim_words(get_the_content(), 15); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>">Continue Reading</a>
                </div>
                </div>
            </div>
            <?php 
                endwhile;
            else :
                echo "There is no content!";
            endif;
            wp_reset_postdata();
            ?>
        </div>

        <ul class="d--flex align--center justify--center py--10">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li class="active">4</li>
        </ul>
      </div>
    </section>

<?php get_footer(); ?>