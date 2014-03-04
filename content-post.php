<article>
 <header class="blogTitle">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 </header>

 <ul class="blogInfo">
  <li>Category: <?php the_category(', '); ?></li>
  <li>Date: <?php the_time('F j, Y'); ?></li> 
 </ul>

 <div class="blogExcerpt">
 <?php if(is_single()): ?>
 	<?php the_content(); ?>
 	<?php comments_template();?>

 <?php else:?>

 	<?php the_excerpt(); ?>
 	<p><a class="post-link" href="<?php the_permalink(); ?>">Read Full Story &rarr;</a></p>

 <?php endif; ?>
 </div>

</article>