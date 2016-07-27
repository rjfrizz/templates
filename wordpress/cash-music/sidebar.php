<div class="pure-u-1 pure-u-md-1-3">
<aside id="sidebar">
	<section>
	<!-- Mailing List -->
	<h2><?php echo _e('Mailing List', 'cash-music'); ?></h2>
	<script type="text/javascript"> window.cashmusic.embed('https://cashmusic.org/public','6867');</script>
	</section>
	<!-- Catagories -->
	<section>
	<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</section>
	<!-- Archives -->
	<section>
	<h2 ><?php echo _e('Archives', 'cash-music'); ?></h2>
	<ul >
	<?php wp_get_archives('type=monthly'); ?>
	</ul>
	</section>
</aside><!--sidebar-->
</div><!--pure-->
