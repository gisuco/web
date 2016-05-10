<?php
/*
 Template Name: Blog Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row works_contents_wrap">
						<?php $args = array(
							'posts_per_page'   => 9,
							'post_type'        => 'blog_post',
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
										$terms = get_the_terms( $post -> ID, 'blog_category' );
										foreach ( $terms as $term ) { 
											$termname = $term -> name; 
												}
										echo esc_html( $termname );
									?>
								</p>
							</div>
						</a>
					</article>
                    <?php endforeach; ?>
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
