<?php get_header(); ?>
		<div class="content">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main">
				<div class="post-date"><?php the_time("Y"); ?>/<?php the_time("m"); ?>/<?php the_time("d"); ?></div>
				<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="post">
					<?php the_content(); ?>
				</div>
				<?php wp_link_pages( $args ); ?>
				<?php if (get_the_tags()) :?><div class="categories"><tag><?php the_tags(); ?></tag></div><?php endif; ?>
				<?php if (get_the_category()): ?><div class="categories">カテゴリ: <?php the_category(' '); ?></div><?php endif; ?>
				<div class="nav-prev-next">
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous post link', 'WhitePaper' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next post link', 'WhitePaper' ) . '</span>' ); ?></span>
				</div>
			</div>
			<?php comments_template(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<aside class="widget">
			<div class="row">
				<div class="sidebar-left span2">
					<center>
					<?php get_sidebar ('left'); ?>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="sidebar-center span2">
					<center>
					<?php get_sidebar ('center'); ?>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="sidebar-right span2">
					<center>
					<?php get_sidebar ('right'); ?>
					</center>
				</div>
			</div>
		</aside>
	</div>

<?php get_footer(); ?>
