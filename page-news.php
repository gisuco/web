<<<<<<< HEAD
<?php
/*
 Template Name: News Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row news_contents_wrap">
					<?php query_posts( array(
								'post_type' => 'news_post', //カスタム投稿名
								'posts_per_page' => 6, //表示件数（ -1 = 全件 ）
								'paged' => $paged
					)); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="news_contents">
						<a href="<?php the_permalink() ?>">
							<div class="news_header">
								<p class="news_date"><?php the_field('date_field'); ?></p>
								<h2><?php the_title();?></h2>
								<p class="news_text">
									<?php echo my_excerpt(70); ?>
								</p>
							</div>
							<div class="news_img">
                            	<?php
									$attachment_id = get_field('image_field');
									$size = "full"; // (thumbnail, medium, large, full or custom size)
									$image = wp_get_attachment_image_src( $attachment_id, $size );
									$attachment = get_post( get_field('image') );
									$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
									$image_title = $attachment->post_title;
								?>
								<img src="<?php echo $image[0]; ?>" width="100%" alt="<?php the_title();?>" />
							</div>
						</a>
					</article>
					<?php endwhile; ?>
					<?php endif; ?>
				</section>
			</section>
			<section class="contents_wrap news_pager">
				<?php
					//Pagenation 
					if (function_exists("pagination")) {
						pagination($additional_loop->max_num_pages);
					}
				?>
			</section>

<?php get_footer(''); ?>
=======
<?php
/*
 Template Name: News Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row news_contents_wrap">
					<?php query_posts( array(
								'post_type' => 'news_post', //カスタム投稿名
								'posts_per_page' => 6, //表示件数（ -1 = 全件 ）
								'paged' => $paged
					)); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="news_contents">
						<a href="<?php the_permalink() ?>">
							<div class="news_header">
								<p class="news_date"><?php the_field('date_field'); ?></p>
								<h2><?php the_title();?></h2>
								<p class="news_text">
									<?php echo my_excerpt(70); ?>
								</p>
							</div>
							<div class="news_img">
                            	<?php
									$attachment_id = get_field('image_field');
									$size = "full"; // (thumbnail, medium, large, full or custom size)
									$image = wp_get_attachment_image_src( $attachment_id, $size );
									$attachment = get_post( get_field('image') );
									$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
									$image_title = $attachment->post_title;
								?>
								<img src="<?php echo $image[0]; ?>" width="100%" alt="<?php the_title();?>" />
							</div>
						</a>
					</article>
					<?php endwhile; ?>
					<?php endif; ?>
				</section>
			</section>
			<section class="contents_wrap news_pager">
				<?php
					//Pagenation 
					if (function_exists("pagination")) {
						pagination($additional_loop->max_num_pages);
					}
				?>
			</section>

<?php get_footer(''); ?>
>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
