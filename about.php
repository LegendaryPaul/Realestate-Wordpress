<?php

    /*
        Template Name: About
    */ 

?>

<?php get_header(); ?>

<section>
      <div class="container">
        <div class="title about">
          <h2>connect</h2>
          <h3>Let's Talk About Your Idea</h3>
        </div>
      </div>
    </section>

    <!-- About Banner -->

    <section class="aBanner">
      <div class="container">
        <div class="aBanner__content">
          <h2><?php echo get_field('content_title'); ?></h2>

          <p>
            <?php echo get_field('content_parag'); ?>
          </p>

          <a href="#" class="btn bgcolor--light"><?php echo get_field('content_button'); ?></a>
        </div>
      </div>
    </section>

    <!-- About Content -->

    <section class="about py--10">
      <div class="container">
        <div class="about__wrapper">
          <?php
            $args = array(
              'post_type' => 'aboutPost'
            );
            $newQuery = new WP_Query($args);
          ?>
          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          <div class="about__description">
            <h3><?php the_title();?></h3>
            <p>
              <?php the_content();?>
            </p>
          </div>
            <?php
              endwhile;
            else :
              echo "There is no content!";
              
            endif;
            wp_reset_postdata();
            ?>
          <div class="about__details">
          <?php if(have_rows('about_repeater')) : while(the_repeater_field('about_repeater')) :?>
            <div class="about__details__block">
            <?php echo get_sub_field('about_icon');?>
              <h3><?php echo get_sub_field('about_title');?></h3>

              <p>
              <?php echo get_sub_field('about_parag');?>
              </p>
            </div>
            <?php
            endwhile;
            else :
              echo "There is no content!";
            endif;
            wp_reset_postdata();
          ?>
          </div>
        </div>
      </div>
    </section>

    <section class="connect py--10">
      <div class="container">
        <div class="connect__wrapper">
          <div class="connect__faqs">
            <h3>Frequently Asked Questions</h3>
          
            <?php if(have_rows('faq_repeater')) : while(the_repeater_field('faq_repeater')) : ?>

              <div class="questions">
                <button>
                  <span><?php echo get_sub_field('faq_question'); ?></span>
                  <span><i class="fa-solid fa-chevron-down"></i></span>
                </button>
                <p>
                <?php echo get_sub_field('faq_answer'); ?>
                </p>
              </div>
                <?php
                  endwhile;
                  else :
                    echo "There is no content!";
                  endif;
                  wp_reset_postdata();
                ?>
          </div>

          <div class="connect__right">
            <div class="connect__right__info">
              <h3>Let's Connect</h3>

              <h4>Call Us</h4>
              <p><i class="fa-solid fa-phone-flip"></i>(123) 456 7890</p>
              <p><i class="fa-solid fa-phone-flip"></i>(123) 456 7890</p>

              <h4>Visit Us</h4>
              <p><i class="fa-solid fa-location-dot"></i>(123) 456 7890</p>

              <h4>Live Chat</h4>
              <p>
                <i class="fa-brands fa-facebook-messenger"></i>(123) 456 7890
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>