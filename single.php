<?php get_header(); ?>

 <!-- Single Banner -->

 <section class="sBanner">
      <div class="container">
        <div class="sBanner__content">
          <h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam,
            alias.
          </h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,
            laboriosam? Velit, voluptate repellat dicta consequuntur pariatur in
            rem officiis optio repudiandae ipsa inventore alias facere ullam
            ipsum est. Qui, minima.
          </p>
        </div>
      </div>
    </section>

    <section class="sArticle py--10">
      <div class="container">
        <div class="sArticle__wrapper">
          <div class="sArticle__side">
            <div class="sArticle__side__data">
              <ul class="d--flex align--center justify--between">
                <li>By:</li>
                <li><?php echo get_field('blog_author'); ?></li>
              </ul>

              <ul class="d--flex align--center justify--between">
                <li>Date:</li>
                <li><?php echo get_field('blog_date'); ?></li>
              </ul>

              <ul class="d--flex align--center justify--between">
                <li>Category:</li>
                <li><?php the_category(); ?></li>
              </ul>

              <ul class="d--flex align--center justify--between">
                <li>Tag:</li>
                <li><?php the_tags(''); ?></li>
              </ul>

              <ul class="d--flex align--center justify--between">
                <li>Reading:</li>
                <li>10mins</li>
              </ul>
            </div>
          </div>

          <div class="sArticle__main">
            <h3>
              <?php the_title(); ?>
            </h3>

            <p>
                <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="latest py--10">
      <div class="container">
        <div class="title">
          <h2>blogs</h2>
          <h3>Latest Article</h3>
        </div>
        <div class="latest__wrapper">
        <?php 
                $args = array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 3
                );
                $newQuery = new WP_Query($args);
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          <div class="latest__item">
            <div class="latest__item__container">
              <?php echo get_the_post_thumbnail(); ?>

              <div class="lcontent">
                <h3>
                  <?php the_title();?>
                </h3>
                <p>
                  <?php echo wp_trim_words(get_the_content(), 15); ?>
                </p>
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
      </div>
    </section>

<?php get_footer(); ?>