<?php theme_include('partial/header'); ?>

<section class="container" id="content">
	<div class="row">
		<div class="col-md-7">
			<article>
				<header>
					<h2><?php echo article_title(); ?></h2>
					<div class="meta clearfix">
						<p class="pull-left">
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date(); ?></time> by <?php echo article_author('real_name'); ?><?php if(user_authed()): ?> / <a href="<?php echo base_url('admin/posts/edit/' . article_id()); ?>">Edit</a><?php endif; ?>.
						</p>

						<div class="share-area pull-right">
							<div class="fb-share-button" data-href="<?php echo article_url(); ?>" data-layout="button"></div>
						</div>
					</div>
				</header>

				<?php echo article_markdown(); ?>
			</article>

			<nav>
				<ul class="pager">
					<?php if(article_previous_url()): ?><li><a href="<?php echo article_previous_url(); ?>" class="pull-left"><span class="glyphicon glyphicon-chevron-left"></span> Previous article</a></li><?php endif; ?>
					<?php if(article_next_url()): ?><li><a href="<?php echo article_next_url(); ?>" class="pull-right">Next article <span class="glyphicon glyphicon-chevron-right"></span></a></li><?php endif; ?>
				</ul>
			</nav>

			<?php if(comments_open()): ?>
			<section class="comments" id="comments">
				<h3>Komentarze</h3>
				<?php if(has_comments()): ?>
				<ul class="commentlist">
					<?php $i = 0; while(comments()): $i++; ?>
					<li class="comment" id="comment-<?php echo comment_id(); ?>">
						<h4><?php echo comment_name(); ?> <small><time><?php echo relative_time(comment_time()); ?></time></small></h4>

						<p class="content">
							<?php echo comment_text(); ?>
						</p>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>

				<form id="comment" class="form-horizontal" method="post" action="<?php echo comment_form_url(); ?>#comment">
					<?php echo comment_form_notifications(); ?>

					<div class="form-group">
						<label for="comment_name" class="col-sm-4 control-label">Your name</label>
						<div class="col-sm-5">
							<input type="text" name="name" class="form-control" id="comment_name" placeholder="Your name">
						</div>
					</div>

					<div class="form-group">
						<label for="comment_email" class="col-sm-4 control-label">Your email adress</label>
						<div class="col-sm-5">
							<input type="email" name="email" class="form-control" id="comment_email" placeholder="Your email adress (won’t be published)">
						</div>
					</div>

					<div class="form-group">
						<label for="comment_comment" class="col-sm-4 control-label">Your comment</label>
						<div class="col-sm-8">
							<textarea name="text" id="comment_comment" class="form-control" placeholder="Your comment"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-4">
							<button type="submit" class="btn btn-info">Post comment</button>
						</div>
					</div>
				</form>
			</section>
		<?php endif; ?>
		</div>

		<?php theme_include('partial/aside'); ?>
	</div>
</section>

<?php theme_include('partial/footer'); ?>
