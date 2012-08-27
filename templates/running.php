<?php
/*
Template Name: Running
*/
get_header(); ?>

<style>
	.times {
		border-left: 1px solid #ccc;
		border-top: 1px solid #ccc;
		float: left;
		text-align: center;
		width: 100px;
	}

	.times p {
		height: 60px;
		line-height: 1;
		margin: 0;
		padding-top: 44px;
	}

	.times p:after {
		background: #ccc;
		content: '';
		display: block;
		height: 1px;
		width: 100%;
	}

	#running {
		border: 1px solid #ccc;
		height: 460px;
		overflow-x: scroll;
		white-space: nowrap;
	}

	#running * {
		box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
	}

	.table {
		float: left;
	}

	.run {
		border-bottom: 1px solid #ccc;
		border-right: 1px solid #ccc;
		display: inline-block;
		height: 361px;
		margin-right: -3px;
		overflow: visible;
		position: relative;
		width: 80px;
	}

	.run:nth-child(2n+1) {
		background: #f4f4f4;
	}

	.mile {
		border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
		cursor: pointer;
		height: 10px;
		left: 35px;
		position: absolute;
		width: 10px;		
	}

	.mile div {
		display: none;
		left: 23px;
		padding: 5px;
		position: absolute;
		text-align: center;
		top: -10px;
	}

	.mile div:after {
		background: #fff;
		box-shadow: -2px 2px 3px #999;
			-moz-box-shadow: -2px 2px 3px #999;
			-webkit-box-shadow: -2px 2px 3px #999;
		content: '';
		display: block;
		height: 10px;
		left: -4px;
		position: absolute;
		top: 9px;
		transform: rotate(45deg);
			-moz-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			-o-transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
		width: 10px;
	}

	.mile:hover {
		box-shadow: 0 0 3px #999;
			-moz-box-shadow: 0 0 3px #999;
			-webkit-box-shadow: 0 0 3px #999;
	}

	.mile:hover div {
		background: #fff;
		border: 1px solid #ccc;
		box-shadow: 0 0 3px #999;
			-moz-box-shadow: 0 0 3px #999;
			-webkit-box-shadow: 0 0 3px #999;
		display: block;
		z-index: 9999;
	}

	.mile div small {
		display: block;
		margin: 0;
		padding: 0;
	}

	.mile-1 { background: #000; }
	.mile-2 { background: #333; }
	.mile-3 { background: #555; }
	.mile-4 { background: #787878; }
	.mile-5 { background: #aaa; }

	.date {
		bottom: -31px;
		font-size: 14px;
		font-style: italic;
		height: 30px;
		line-height: 1.4;
		padding: 10px 5px 0;
		position: absolute;
		text-align: center;
		width: 100%;
	}
</style>

<h1 class="entry-title">Running</h1>

<div class="times">
	<p>10:00</p>
	<p>9:00</p>
	<p>8:00</p>
	<p>7:00</p>
	<p>6:00</p>
	<p>5:00</p>
</div><!-- .times -->

<div id="running">
	
	<div class="table">
	<?php if (get_field('miles')) {
		while (has_sub_field('miles')) { ?>
			<div class="run">
				<?php 
				$i = 0;
				while ($i < 5) {
					$i++;
					$mile = get_sub_field('mile_'.$i);
					if ($mile[0] == '1') { 
						$minute = $mile[0].$mile[1]; 
					} else {
						$minute = $mile[0]; 
					} 
					$second = substr($mile,-2);

					$top = -60*$minute + 655 - $second;
					?>

					<div class="mile mile-<?php echo $i; ?>" style="<?php 
							echo 'top: '.$top.'px';
						?>">
						<div><?php echo '<small>Mile '.$i.':</small><br /><strong>'.$mile.'</strong> min/mile'; ?></div>
					</div>
				<?php } ?>
				<div class="date">
					<?php the_sub_field('date'); ?>
				</div><!-- .date -->
			</div><!-- .run -->
		<?php } 
	} ?>

	</div><!-- .table -->
</div><!-- #running -->

<?php get_footer(); ?>