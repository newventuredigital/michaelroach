<?php get_header(); ?>

<div class="content">
	<section class="">
		<div class="container">
			<div class="row" id="post-<?php the_ID(); ?>">
				<div class="col-md-10">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
					<?php endwhile; endif; ?>
				</div>
		 	</div>
		 </div>
	</section>


<?php get_footer(); ?>