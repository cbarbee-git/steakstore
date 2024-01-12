<section id="footer">
  <div id="footer-top">
      <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
      <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul id="footer-menu" class="float-left">%3$s</ul>', 'theme_location' => 'footer-menu' ) ); ?>
      <?php endif; ?>

    <div id="social">
      <a aria-label="Facebook" href="https://www.facebook.com/steakstore" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
      <a aria-label="Twitter" href="https://www.x.com/steakstore" target="_blank"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
      <a aria-label="Yelp" href="https://www.yelp.com/biz/steakstore" target="_blank"><i class="fa-brands fa-yelp" aria-hidden="true"></i></a></div>
    </div>
  </div>
  <div id="footer-btm">
    <div class="wrapper">
        <p class="float-left">
          <?php echo (get_field('street_address', 'option')); ?> <?php echo (get_field('city', 'option')); ?> <?php echo (get_field('state', 'option')); ?>, <?php echo (get_field('zipcode', 'option')); ?>
          <span>|</span>
          <?php //echo (get_field('phone_number', 'option')); ?>
          <a class="phone phone-cursor" href="tel:<?php echo(str_replace('.','-',get_field('phone_number', 'option'))); ?>"><?php echo(get_field('phone_number', 'option')); ?></a>
        </p>

        <p id="copyright" class="float-right">
            Copyright &copy; <?php echo(date('Y')) ?> SteakStore. All Rights Reserved.<br />
            <a href="https://www.chadbarbee.com">Designed by Chad Barbee</a>
        </p>
    </div>
  </div>
  <div id="git-link"> 
      <p class="center">
        <i class="fa-brands fa-github"></i>Link to this Project on Github: <a href="https://github.com/git-cbarbee/steakstore">https://github.com/git-cbarbee/steakstore</a>
      </p>
    </div>
</section>

</body>
<script>

// Create the observer
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animated');
      return;
    }

    entry.target.classList.remove('animated');
  });
});

// Get multiple elements using "querySelectorAll"
const animated_objs = document.querySelectorAll('.animation');

// Loop over the elements and add each one to the observer
animated_objs.forEach((element) => observer.observe(element));


//this could go elsewhere...but leave it for now
$(window).on('load', function () {
    //be sure font-awesome is completely loaded before this
    $('a.phone-cursor').awesomeCursor('phone', {
      color: '#fff'
    });
    $('a.email-cursor').awesomeCursor('envelope', {
      color: '#fff',
    });

    $('#nav-expand').click( function(e) {
        e.preventDefault();
        $('html').toggleClass('mobile-nav-menu-active');
        return false;
    });
});
//
</script>
</html>