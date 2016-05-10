<<<<<<< HEAD
<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap work_detail_contents">
				<div class="work_contents_wrap mainimg_wrap">
					<?php
                    	$attachment_id = get_field('mainimg_field');
						$size = "full"; // (thumbnail, medium, large, full or custom size)
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$attachment = get_post( get_field('image') );
						$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
						$image_title = $attachment->post_title;
					?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>">	
				</div>
				<section class="work_detail_contents_article contents_wrap">
                	<div class="work_detail_article"> 
                    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content()?>
                        <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                    
                    <p class="url_wrap"><a href="<?php the_field('url_field'); ?>" target="_blank"><?php the_field('url_field'); ?></a></p>					
				</section>
			</section>
			<section class="child_wrap">
				<header class="contents_wrap title_contents">
					<h2 class="long_title">Other Works</h2>
					<p class="child_sub_title">その他実績</p>
				</header>
				<section class=" flex_row works_contents_wrap">
					<?php query_posts( array(
								'post_type' => 'work_post', //カスタム投稿名
								'posts_per_page' => 6, //表示件数（ -1 = 全件 ）
								'paged' => $paged
					)); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
					<?php endif; ?>
					
			</section>

=======
<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap work_detail_contents">
				<div class="work_contents_wrap mainimg_wrap">
					<?php
                    	$attachment_id = get_field('mainimg_field');
						$size = "full"; // (thumbnail, medium, large, full or custom size)
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$attachment = get_post( get_field('image') );
						$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
						$image_title = $attachment->post_title;
					?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>">	
				</div>
				<section class="work_detail_contents_article contents_wrap">
                	<div class="work_detail_article"> 
                    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content()?>
                        <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                    
                    <p class="url_wrap"><a href="<?php the_field('url_field'); ?>" target="_blank"><?php the_field('url_field'); ?></a></p>					
				</section>
			</section>
			<section class="child_wrap">
				<header class="contents_wrap title_contents">
					<h2 class="long_title">Other Works</h2>
					<p class="child_sub_title">その他実績</p>
				</header>
				<section class=" flex_row works_contents_wrap">
					<?php query_posts( array(
								'post_type' => 'work_post', //カスタム投稿名
								'posts_per_page' => 6, //表示件数（ -1 = 全件 ）
								'paged' => $paged
					)); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
					<?php endif; ?>
					
			</section>

>>>>>>> 95e892f0119610bae73d9832826c30de7e4c312c
<?php get_footer(''); ?>