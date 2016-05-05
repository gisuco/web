<?php get_header(); ?>
		<article id="main_wrap">
			<section class="business_wrap">
				<header class="business_header">
					<h2>Business</h2>
					<p>事業内容</p>
				</header><!-- /header -->
				<ul class="flex_row">
					<li>
						<a href="<?php echo get_option('home'); ?>/business/#branding">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>Branding</h3>
								</div>
								<div class="business_link_article">
									<p>ブランディング事業部</p>
								</div>
							</div>
						</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/top_businessimg.png" width="100%" />
					</li>
					<li>
						<a href="<?php echo get_option('home'); ?>/business/#webstrategy">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>WEB strategy</h3>
								</div>
								<div class="business_link_article">
									<p>WEB戦略事業部</p>
								</div>
							</div>
						</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/top_businessimg.png" width="100%" />
					</li>
					<li>
						<a href="<?php echo get_option('home'); ?>/business/#businessstrategy">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>Business strategy</h3>
								</div>
								<div class="business_link_article">
									<p>事業戦略</p>
								</div>
							</div>
						</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/top_businessimg.png" width="100%" />
					</li>
				</ul>
			</section>

			<section class="works_wrap">
				<article>
					<header class="works_header">
						<h2>Works</h2>
						<p>実績の一部をご紹介</p>
					</header>
					<ul class="slide_wrap">
						<?php query_posts( array(
									'post_type' => 'work_post', //カスタム投稿名
									'posts_per_page' => 1, //表示件数（ -1 = 全件 ）
									'paged' => $paged
						)); ?>
						<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <li>
							<article class="flex_row">
								<div class="slide_img">
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
								<div class="slide_article">
									<h3><?php the_title(); ?></h3>
									<p>
										<?php the_field('cc_field'); ?>
									</p>
									<div class="button_wrap">
										<a href="<?php the_permalink() ?>">detail</a>
									</div>
								</div>
							</article>
						</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<div class="button_wrap">
						<a href="<?php echo get_option('home'); ?>/works/">more</a>
					</div>
				</article>
			</section>
			
			<section class="philosophy_wrap">
				<section class="contents_wrap">
					<h2>Our Philosophy</h2>
					<p class="philosophy_symbol">人間第一主義</p>
					<p class="philosophy_article">
						全ては人。<br/>
						対外的な意識を捨て、共に新たな時代を創世していくような関係性を目指します。<br/>
						我々が提供できるものを最大化し、多種多様な企業それぞれに合ったサポートの形を提案します。<br/>
						成長戦略を実現させるため、より大きな「発展」を目指す経営戦略の立案・実施を支援します。
					</p>
					<div class="button_wrap">
						<a href="<?php echo get_option('home'); ?>/about/">more</a>
					</div>
				</section>
			</section>
			<section class="recruit_wrap">
				<header class="recruit_header">
					<h2>Recruit</h2>
					<p class="recruit_wrap_article">私達が目指すのはオリジナルのサービスを生み提供する最高のITサービス企業。<br/>
					才能を持った人材が必要です。全員が仕事を「楽しんでいる組織」への参加をお待ちしています。</p>
				</header>
				<nav class="recruit_nav_wrap">
					<ul class="recruit_nav flex_row">
						<li>
							<div class="recruit_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/pen.svg">
							</div>
							<p>web director</p>
						</li>
						<li>
							<div class="recruit_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/pc.svg">
							</div>
							<p>web designer</p>
						</li>
						<li>
							<div class="recruit_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/web.svg">
							</div>
							<p>front end engineers</p>
						</li>
						<li>
							<div class="recruit_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/gear.svg">
							</div>
							<p>system engineer</p>
						</li>
						<li>
							<div class="recruit_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/etc.svg">
							</div>
							<p>and more</p>
						</li>
					</ul>
				</nav>
				<div class="contents_wrap">
					<div class="button_wrap">
						<a href="<?php echo get_option('home'); ?>/contact/">entry more</a>
					</div>
				</div>
			</section>
<?php get_footer(); ?>