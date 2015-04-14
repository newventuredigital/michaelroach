<?php if (!is_home()) { ?> 
   <section>
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h2>Latest Blog Entries</h2>
          
          <?php $args = array('posts_per_page' => 2);
              $posts = get_posts( $args );
          foreach ($posts as $post) { setup_postdata( $post ); ?>
            <div class="cf individual-post">
              <div class="col-sm-1 posted-on light-gray-bg visible-md visible-lg">
                <div class="month"><?php the_time('M'); ?></div>
                <div class="date"><?php the_time('j'); ?></div>
                <div class="year"><?php the_time('Y'); ?></div>
              </div>
              <div class="col-md-11 col-sm-12 post cf">
                <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php echo excerpt(30); ?>
              </div>
            </div>
          <?php wp_reset_postdata(); } ?>
        </div>
      </div>
    </div>
   </section>
<?php } ?>
</div>
<footer class="dark-gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h5>Built With</h5>
        <ul class="built-with">
          <li>
          <a href="http://www.wordpress.org" target="_blank"><i class="fa fa-wordpress"></i></a>
        </li>
          <li>
          <a href="http://www.getbootstrap.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bootstrap-logo.png" alt="Bootstrap Logo"></a>
        </li>
          <li>
          <a href="http://www.sass-lang.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sass-logo.png" alt="Sass Logo"></a>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h5>Connect</h5>
        <ul class="social">
          <li><a href="http://www.linkedin.com/in/roachdesign" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          <li><a href="http://github.com/roachdesign" target="_blank"><i class="fa fa-github-square"></i></a></li>
          <li><a href="" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
          <li><a href="" target="_blank"><i class="fa fa-rss-square"></i></a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h5>Navigation</h5>
        <nav class="footer-nav"><?php wp_nav_menu(array('menu' => 'Primary' )); ?></nav>
      </div>
    </div>
</footer>
  <!-- Closing Container -->
  </div>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
	$("#mobile-open").click(function(){
	$("html").addClass("navigation-open");
	});
	$("#mobile-close, .col-md-8").click(function(){
	$("html").removeClass("navigation-open");
	});
  </script>
  <?php wp_footer(); ?>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <!-- Bootstrap JS
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
</body>
</html>