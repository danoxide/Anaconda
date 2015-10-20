<?php theme_include('partial/header'); ?>

<section class="container" id="content">
	<div class="row">
		<div class="col-md-7">
			<?php if(has_posts()): while(posts()): ?>
			<article>
				<header>
					<h2><?php echo article_title(); ?></h2>
					<div class="meta clearfix">
						<p class="pull-left">
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date(DATE_W3C, article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
						</p>

						<div class="share-area pull-right">
							<div class="fb-share-button" data-href="<?php echo substr(full_url(), 0, -1).article_url(); ?>" data-layout="button"></div>
						</div>
					</div>
				</header>

				<p class="article-description"><?php echo article_description(); ?></p>
				
				<div class="keep-reading">
					<a href="<?php echo article_url(); ?>">Keep reading &raquo;</a>
				</div>
			</article>
			<?php endwhile; endif; ?>

			<?php if(has_pagination()): ?>
			<nav>
				<ul class="pager">
					<li class="pull-left"><?php echo posts_prev(); ?></li>
					<li class="pull-right"><?php echo posts_next(); ?></li>
				</ul>
			</nav>
			<?php endif; ?>
		</div>

		<?php theme_include('partial/aside'); ?>
	</div>
</section>

<?php theme_include('partial/footer'); ?>