<div class="sidebar league" id="categories-sidebar-mobile">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('categories') ) : // begin primary sidebar widgets ?>
	
    <ul class="row">
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/about">About</a></li>
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/blog/category/web">Web</a></li>
    </ul>
    <ul class="row">
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/blog/category/art">Art</a></li>
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/blog/category/misc">Misc</a></li>
    </ul>
    <ul class="row">
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/blog/category/music">Music</a></li>
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/blog/category/personal">Personal</a></li>
    </ul>        
        
	<?php endif; // end categories sidebar widgets  ?>
</div>