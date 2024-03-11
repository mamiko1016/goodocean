<?php get_header(); ?>

<main class="main">
	<h1 data-title="News" class="page-title">お知らせ</h1>

	<div class="inner is-small">
		<ol class="c-breadcrumbs">
			<?php if (function_exists('bcn_display')) bcn_display_list(); ?>
			<!-- <li><a href="./">ホーム</a></li>
		<li><a href="./news.html">お知らせ</a></li>
		<li><span>2022年</span></li> -->
		</ol>

		<div class="news-wrapper">
			<div class="main-content">
				<div class="box-white">

					<!-- <h2 class="news-title">2022</h2> -->
					<?php if (is_date()) : ?>
						<h2 class="news-title"><?php echo get_query_var('year'); ?></h2>
					<?php elseif (is_category()) : ?>
						<h2 class="news-title"><?php echo get_queried_object()->name; ?></h2>
					<?php endif; ?>

					<!-- <ul class="news-list">
						//ここの中身は、parts-archiveposts.phpに記述している
					</ul> -->

					<?php if (have_posts()) : ?><ul class="news-list">
							<?php
							while (have_posts()) : the_post();
								get_template_part('parts', 'archiveposts');
							endwhile;
							?>
						</ul><?php else : ?>
						<p>記事はありません。</p>
					<?php endif; ?>

					<?php wp_pagenavi(); ?>
					<!--
				<div class="wp-pagenavi" role="navigation">
					<span aria-current="page" class="current">1</span>
					<a class="page larger" title="ページ 2" href="#">2</a>
					<a class="page larger" title="ページ 3" href="#">3</a>
					<a class="page larger" title="ページ 4" href="#">4</a>
					<a class="nextpostslink" rel="next" aria-label="次のページ" href="#">Next</a>
				</div> -->


				</div>
			</div>


			<?php get_sidebar(); ?>


		</div>
	</div>
</main>


<?php get_footer(); ?>
