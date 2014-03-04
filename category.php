<?php get_header(); ?>

<section>
 <div class="container">
  <div class="section group">
   <section class="col span_9_of_12">
    <h1>Category: <?php single_cat_title(); ?></h1>
   	<?php if(have_posts()):while(have_posts()):the_post();?>
		<?php get_template_part('content', 'post'); ?>
	<?php endwhile;else:?>
		<p>No posts found.</p>
	<?php endif;?>
   </section><!-- end of blog content-->

   <aside class="col span_3_of_12">
    <h2>Sidebar goes here</h2>
   </aside>
  </div><!-- end of section group-->
 </div><!-- end of container-->
</section>

<?php get_template_part('content', 'custom'); ?>

<?php get_footer(); ?>