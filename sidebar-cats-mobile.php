<div class="sidebar league" id="categories-sidebar-mobile">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('categories') ) : // begin primary sidebar widgets ?>
	
    <ul class="row">
	    <li class="phone-two columns"><a href="<?php echo home_url(); ?>/web">Web</a></li>
		<li class="phone-two columns"><a href="<?php echo home_url(); ?>/music">Music</a></li>
    </ul>
    <ul class="row">
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/art">Art</a></li>
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/personal">Personal</a></li>
    </ul>
    <ul class="row">
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/photos">Photos</a></li>
        <li class="phone-two columns"><a href="<?php echo home_url(); ?>/misc">Misc</a></li>
    </ul>        
        
	<?php endif; // end categories sidebar widgets  ?>
</div>