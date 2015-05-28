<?php get_header(); ?>

<div class="content">
	<section class="">
		<div class="container">
			<div class="row" id="post-<?php the_ID(); ?>">
				<div class="col-md-8">
					<h1><?php the_title(); ?></h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		 </div>
	</section>


<?php get_footer(); ?>