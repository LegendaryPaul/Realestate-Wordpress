
<?php

    /*
        Template Name: Home
    */ 

?>

<?php get_header(); ?>

<!-- Banner -->

<section class="banner">
      <div class="container">
        <div class="banner__content">
          <h2>
            <?php echo get_field('content_title'); ?>
          </h2>
          <p>
            <?php echo get_field('content_parag'); ?>
          </p>

          <a href="#" class="btn bgcolor--yellow"><?php echo get_field('content_button'); ?></a>
        </div>
      </div>
    </section>

    <!-- Popular -->

    <section class="popular py--10">
      <span></span>
      <div class="container">
        <div class="title">
          <h2>popular</h2>
          <h3>Our Best Houses</h3>
        </div>
        <div class="popular__wrapper">
            <?php if(have_rows('home_repeater')) : while(the_repeater_field('home_repeater')) :?>
          <div class="popular__block">
            <?php
                $img = get_sub_field('home_img');
                if(!empty($img)) :
            ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif;?>
            <div class="popular__block__content">
              <h3><?php echo get_sub_field('home_name'); ?></h3>

              <ul class="d--flex align--center justify--between">
                <?php echo get_sub_field('home_li'); ?>
              </ul>

              <div class="reference d--flex align--center justify--between">
                <a href="contacts.html" class="btn bgcolor--yellow"
                  ><?php echo get_sub_field('home_button'); ?></a
                >
                <h4>PHP <?php echo get_sub_field('home_price'); ?></h4>
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


        <?php
                    $args = array(
                        'post_type' => 'realPost',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'popular'
                            ),
                        ),
                    );
                    $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
        <div class="popular__description">
          <div class="name">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </div>

          <div class="qoute">
              <?php the_content(); ?>
            <i class="fa-solid fa-quote-left"></i>
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
    </section>

    <!-- Services -->

    <section class="services py--10">
      <div class="container">
        <div class="services__wrapper">
        <?php
                $img = get_field('service_img');
                if(!empty($img)) :
            ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif;?>

          <div class="services__content">
            <div class="title">
              <h2>services</h2>
              <h3><?php echo get_field('service_title'); ?></h3>
            </div>

            <p>
            <?php echo get_field('service_parag'); ?>
            </p>

            <a href="<?php echo get_field('service_url'); ?>" class="btn bgcolor--yellow"><?php echo get_field('service_button'); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Blogs -->

    <section class="blog py--10 bgcolor--ldark">
      <div class="container">
        <div class="title">
          <h2>blogs</h2>
          <h3>Latest Information</h3>
        </div>
        <div class="blog__wrapper">
            <?php
                $args = array(
                    'post_type' => 'latestPost',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'Interior'
                        ),
                    ),
                );
                $newQuery = new WP_Query($args);
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          <div class="blog__block">
            <?php echo get_the_post_thumbnail(); ?>

            <div class="blog__block__content">
              <small><?php echo get_the_date('M d, Y'); ?></small>
              <h3><?php the_title(); ?></h3>
              <p>
                <?php echo wp_trim_words(get_the_content(), 20);?>
              </p>

              <a href="list.html">Continue Reading</a>
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
      </div>
    </section>

    <!-- Reviews -->

    <div class="reviews py--10">
      <div class="container">
        <div class="title">
          <h2>reviews</h2>
          <h3>
            What our Clients <br />
            Say About Us
          </h3>
        </div>

        <div class="reviews__wrapper py--10" id="slider">

        <?php if(have_rows('review_repeater')) : while(the_repeater_field('review_repeater')) :?>
          <div class="reviews__block">
            <?php
              $img = get_sub_field('review_img');
              if(!empty($img)):
            ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif;?>
            <div class="info">
              <h3><?php echo get_sub_field('review_name'); ?></h3>
              <p>
              <?php echo get_sub_field('review_parag'); ?>
              </p>
              <small><?php echo get_sub_field('review_perf'); ?></small>
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
      </div>
    </div>

    <!-- FAQS -->

    <section class="faqs py--10">
      <div class="container">
        <div class="faqs__wrapper">
          <div class="faqs__left">
            
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

          <div class="faqs__right">
            <div class="title">
              <h2>faqss</h2>
              <h3>Frequently Asked Questions</h3>
            </div>

            <p>Have questions you want answers to?</p>
            <a href="about.html" class="btn bgcolor--yellow">See more</a>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>