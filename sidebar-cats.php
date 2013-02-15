<div class="sidebar categories league">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('categories') ) : // begin primary sidebar widgets ?>
    <h3 class="categories-title">Categories</h3>	
	
    <ul>
	    <li class="web"><a href="<?php echo home_url(); ?>/blog/category/web">Web</a></li>
        <li class="music"><a href="<?php echo home_url(); ?>/blog/category/music">Music</a></li>
		<li class="art"><a href="<?php echo home_url(); ?>/blog/category/art">Art</a></li>
        <li class="personal"><a href="<?php echo home_url(); ?>/blog/category/personal">Personal</a></li>
        <li class="misc"><a href="<?php echo home_url(); ?>/blog/category/misc">Misc</a></li>
    </ul>    
        
	<?php endif; // end categories sidebar widgets  ?>
</div>