<div class="sidebar league" id="categories-sidebar">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('categories') ) : // begin primary sidebar widgets ?>
    <h3 class="categories-title">Categories</h3>	
	
    <ul>
	    <li class="category-web100"><a href="<?php echo home_url(); ?>/web">Web</a></li>
        <li class="category-music100"><a href="<?php echo home_url(); ?>/music">Music</a></li>
		<li class="category-art100"><a href="<?php echo home_url(); ?>/art">Art</a></li>
        <li class="category-personal100"><a href="<?php echo home_url(); ?>/personal">Personal</a></li>
        <li class="category-misc100"><a href="<?php echo home_url(); ?>/misc">Misc</a></li>
    </ul>    
        
	<?php endif; // end categories sidebar widgets  ?>
</div>