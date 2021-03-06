<?php
get_header();
\the_post();
?>
<div class="laydiv w has-sidebar" id="wrapper">
	<div class="c tr" id="content-outer">
		<div id="content" class="w-row">
			<div class="w-col w-col-10">
				<div class="w-row">
					<div id="left" class="w-col w-col-3">

					</div>
					<div id="content-inner" class="w-col w-col-9">
						<main class="inner">
							<?php \get_template_part( 'loop' ); ?>
						</main>
					</div>
				</div>
			</div>
			<div id="sidebar" class="w-col w-col-2">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
