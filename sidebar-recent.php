<div class="sidebar recent">

	<h3 class="recent-title">Related posts</h3>
    
    <?php do_action('erp-show-related-posts', array('title'=>'', 'num_to_display'=>5, 'no_rp_text'=>'No Related Posts Found')); ?>

	<h3 class="recent-title">Recent<br />dispatches</h3>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('recent') ) : // begin primary sidebar widgets ?>
	<?php endif; // end categories sidebar widgets  ?>
    
</div>