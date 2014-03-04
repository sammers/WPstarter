<?php get_header(); ?>

<section>
 <div class="container">
  <div class="section group">
   <article class="col span_12_of_12">
   	<?php if(have_posts()):while(have_posts()):the_post();?>
		<h1><?php the_title();?></h1>
		<p><?php the_content();?></p>
	<?php endwhile;else:?>
		<p>No posts found.</p>
	<?php endif;?>
   </article><!-- end of span 12 of 12-->
  </div><!-- end of section group-->
 </div><!-- end of container-->
</section>

<?php get_template_part('content', 'custom'); ?>

<?php get_footer(); ?>