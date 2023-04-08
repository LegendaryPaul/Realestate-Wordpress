    <?php wp_footer(); ?>
    
    
    <!-- footer -->

    <section class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__left">
            <img src="<?php echo get_template_directory_uri(); ?>./img/logo.jpg" alt="" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
              quasi delectus excepturi error ratione.
            </p>
          </div>

          <div class="footer__right">
            <h3>Subscribe to our news letter</h3>

            <form action="">
              <input type="text" name="" id="" />
              <button href="#" class="btn bgcolor--yellow">See more</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Script -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

    <script>
      const toggleMenu = document.querySelector(".toggle__menu");
      const mobileNav = document.querySelector(".header__actions");
      toggleMenu.addEventListener("click", () => {
        toggleMenu.classList.toggle("open");
        mobileNav.classList.toggle("open");
      });

      const buttons = document.querySelectorAll("button");
      buttons.forEach((button) => {
        button.addEventListener("click", () => {
          const faq = button.nextElementSibling;
          const icon = button.children[1];

          faq.classList.toggle("show");
          icon.classList.toggle("rotate");
        });
      });

      var slider = tns({
        container: "#slider",
        items: 1,
        mouseDrag: true,
        autoplay: true,
        controls: false,
        navPosition: "bottom",

        responsive: {
          200: {
            items: 1,
          },
          300: {
            items: 1,
          },
          640: {
            items: 2,
          },
          900: {
            items: 2,
          },
        },
      });
    </script>
  </body>
</html>
