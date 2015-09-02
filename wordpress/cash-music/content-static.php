<!--Standard Post-->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<header><?php the_post_thumbnail('large', array( 'class' => 'article-image' )); } ?></header>
			<div class="inner">
				<h4 class="date"><?php if ( !is_single() ) {?><a href="<?php the_permalink() ?>" rel="bookmark"><?php } ?>Posted on <?php the_time('F jS, Y') ?><?php if ( !is_single() ) {?></a><?php } ?></h4>
			</div><!--inner-->
		<?php the_content(__('(more...)')); ?>
		<p><?php the_tags(); ?></p>
</article>
