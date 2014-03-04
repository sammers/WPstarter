  <footer>
   <p>&copy; Copyright <?php echo date('Y');?></p>
   <div class="section group">
	   <div class="col span_4_of_12">
	   		<?php if( dynamic_sidebar( 'footer_left')): ?>

	   		<?php else: ?>

	   			<p>install widget</p>
	   		<?php endif; ?>

	   </div>
	   <div class="col span_4_of_12">
	   		<?php if( dynamic_sidebar( 'footer_middle')): ?>

	   		<?php else: ?>

	   			<p>install widget</p>
	   		<?php endif; ?>

	   </div>
	   <div class="col span_4_of_12">
	   		<?php if( dynamic_sidebar( 'footer_right')): ?>

	   		<?php else: ?>

	   			<p>install widget</p>
	   		<?php endif; ?>

	   </div>
	</div>

  </footer>

<?php wp_footer(); ?>

 </body>
</html>