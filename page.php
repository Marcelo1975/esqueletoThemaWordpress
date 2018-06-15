<?php get_header(); ?>

<section>
	<div class="container">
		<article>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<p>
				<?php the_content(); ?>
			</p>
			
			<?php
				if(comments_open()){
					?>
					<hr/>
					<p>
						<?php comments_number('0 Comentários', 'um Comentário', '% Comentários'); ?>
					</p>
					<?php
					comments_template();
				}
				?>
		</article>
	<?php endwhile; ?>
	</div>

	<?php get_sidebar(); ?>
	
	<div style="clear:both;"></div>
</section>

<?php get_footer(); ?>