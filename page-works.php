<<<<<<< HEAD
=======
<<<<<<< HEAD
<?php
/*
 Template Name: Works Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row works_contents_wrap">
						<?php $args = array(
							'posts_per_page'   => 9,
							'post_type'        => 'work_post',
							'paged'            => $paged,
							);
							$posts_array = get_posts( $args ); ?>
		                <?php foreach( $posts_array as $post ) : ?>
                    <article class="works_contents">
						<a href="<?php the_permalink() ?>">
							<div class="works_hover">
								<div class="works_img">
                                	<?php
										$attachment_id = get_field('thum_field');
										$size = "full"; // (thumbnail, medium, large, full or custom size)
										$image = wp_get_attachment_image_src( $attachment_id, $size );
										$attachment = get_post( get_field('image') );
										$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
										$image_title = $attachment->post_title;
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>" />
								</div>
								<div class="works_hover_text_wrap">
									<div class="works_hover_text flex_row">
										<p>Detail</p>
									</div>
								</div>
							</div>
							<div class="works_title">
								<h2><?php the_title();?></h2>
								<p class="works_text">
									<?php 
										$terms = get_the_terms( $post -> ID, 'work_category' );
										foreach ( $terms as $term ) { 
											$termname = $term -> name; 
												}
										echo esc_html( $termname );
									?>
								</p>
							</div>
						</a>
					</article>
                    <?php endforreach; ?>
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
>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
<?php
/*
 Template Name: Works Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row works_contents_wrap">
<<<<<<< HEAD
					<?php query_posts( array(
								'post_type' => 'work_post', //カスタム投稿名
								'posts_per_page' => 9, //表示件数（ -1 = 全件 ）
								'paged' => $paged
					)); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
=======
						<?php $args = array(
							'posts_per_page'   => 9,
							'post_type'        => 'work_post',
							'paged'            => $paged,
							);
							$posts_array = get_posts( $args ); ?>
		                <?php foreach( $posts_array as $post ) : ?>
>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
                    <article class="works_contents">
						<a href="<?php the_permalink() ?>">
							<div class="works_hover">
								<div class="works_img">
                                	<?php
										$attachment_id = get_field('thum_field');
										$size = "full"; // (thumbnail, medium, large, full or custom size)
										$image = wp_get_attachment_image_src( $attachment_id, $size );
										$attachment = get_post( get_field('image') );
										$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
										$image_title = $attachment->post_title;
									?>
									<img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>" />
								</div>
								<div class="works_hover_text_wrap">
									<div class="works_hover_text flex_row">
										<p>Detail</p>
									</div>
								</div>
							</div>
							<div class="works_title">
								<h2><?php the_title();?></h2>
								<p class="works_text">
									<?php 
										$terms = get_the_terms( $post -> ID, 'work_category' );
										foreach ( $terms as $term ) { 
											$termname = $term -> name; 
												}
										echo esc_html( $termname );
									?>
								</p>
							</div>
						</a>
					</article>
<<<<<<< HEAD
                    <?php endwhile; ?>
					<?php endif; ?>
=======
                    <?php endforeach; ?>
>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
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
<<<<<<< HEAD
=======
>>>>>>> 1a1876d73bac9ce02c32c0293e9a29e581944c0e
>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
