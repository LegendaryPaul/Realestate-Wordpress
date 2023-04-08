<?php

    /*
        Template Name: Contact
    */ 

?>

<?php get_header(); ?>

<!-- Heading -->

<section>
      <div class="container">
        <div class="title contact">
          <h2>connect</h2>
          <h3>Let's Talk About Your Idea</h3>
        </div>
      </div>
    </section>

    <!-- Contacts Banner -->

    <section class="cBanner">
      <div class="container">
        <div class="cBanner__content">
          <h2><?php echo get_field('content_title'); ?></h2>

          <p>
          <?php echo get_field('content_parag'); ?>
          </p>

          <a href="#" class="btn bgcolor--light"><?php echo get_field('content_button'); ?></a>
        </div>
      </div>
    </section>

    <section class="contact py--10">
      <div class="container">
        <div class="contact__wrapper">
          <div class="contact__form">
            <h3>Send a Message</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
              maxime possimus praesentium exercitationem excepturi nesciunt.
            </p>

            <form action="">
              <label for="">Full Name</label>
              <input type="text" />

              <label for="">Email</label>
              <input type="text" />

              <label for="">Subject</label>
              <input type="text" />

              <label for="">Message</label>
              <textarea name="" id=""></textarea>

              <button class="btn bgcolor--yellow">Send Message</button>
            </form>
          </div>

          <div class="contact__details">
            <?php if(have_rows('contact_repeater')) : while(the_repeater_field('contact_repeater')) :?>
            <div class="number">
              <h3><?php echo get_sub_field('contact_title'); ?></h3>
              <p>
                <?php echo get_sub_field('contact_parag'); ?>
              </p>
              <?php if(have_rows('number_repeater')) : while(the_repeater_field('number_repeater')) :?>
              <ul>
                <li><?php echo get_sub_field('contact_number'); ?></li>
              </ul>
              <?php 
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
                <?php 
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                ?>
            <!-- <div class="location">
              <h3>Visit our Location</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                sint deleniti reprehenderit, odio vitae doloribus doloremque et
                libero ad dolore.
              </p>

              <ul>
                <li>
                  <i class="fa-solid fa-location-dot"></i>1 Warriors Way, San
                  Fancisco, CA 5678B, USA
                </li>
                <li><i class="fa-solid fa-location-dot"></i>View Map</li>
              </ul>
            </div>

            <div class="chat">
              <h3>Live Chat</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                sint deleniti reprehenderit, odio vitae doloribus doloremque et
                libero ad dolore.
              </p>

              <span
                ><i class="fa-brands fa-facebook-messenger"></i> Messenger</span
              >
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- Contacts -->

<?php get_footer(); ?>