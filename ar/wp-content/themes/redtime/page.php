<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-page" id="post-<?php the_ID(); ?>">
		<h2 class="page_title"><?php the_title(); ?></h2>
			<div class="entry entry_page">
				<?php the_content('<p class="serif">Читать остальное &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('Редактировать эту запись', '<br /><p>', '</p>'); ?>
			</div>
		</div>
        <?php comments_template(); ?>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>