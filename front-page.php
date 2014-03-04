<?php get_header();?>

<section>
	<div class="container">
		<div class="section group">
			<div id="home-side-nav" class="col span_3_of_12">
	   			<?php if( dynamic_sidebar( 'sub-nav')): ?>

	   			<?php endif; ?>


  			</div>
  			<div id="home-slider" class="col span_9_of_12">

  			</div>
  		</div>
  	</div>
</section>

<section>
	<div class="container">

		<?php if(have_posts()):while(have_posts()):the_post();?>
			<h1><?php the_title();?></h1>
			<p><?php the_content();?></p>
		<?php endwhile;else:?>
			<p>No posts found.</p>
		<?php endif;?>
	</div>
</section>
<?php get_footer();?>