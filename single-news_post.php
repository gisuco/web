<?php get_header('news'); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap flex_row single_contents_wrap">
					<article class="news_single_contents">
						<header class="news_single_header">
							<div class="news_single_img">
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
							<div class="flex_row news_title">
								<h2><?php the_title();?></h2>
								<p><?php the_field('date_field'); ?></p>
							</div>
						</header>
						<div class="news_single_article">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content()?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            
                            <?php if( get_field('pdf_field') ): ?>
                            <div class="news_single_pdf ">
								<a href="<?php the_field('pdf_field'); ?>" class="flex_row">
									<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/pdf.png"></div>
									<p>全文PDFファイル</p>
								</a>
							</div>
                            <?php endif; ?>
							
						</div>
					</article>
					
				</section>
			</section>

<?php get_footer(''); ?>