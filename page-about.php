<?php
/*
 Template Name: About Page
*/
?>

<?php get_header('about'); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<header class="contents_wrap title_contents">
					<h2 class="long_title">Human first principle</h2>
				</header>
				<section class="contents_wrap">	
					<p class="symbol_word">
						企業理念である「人間第一主義」<br/>
						"何をやるか"より"誰とやるか"が重要
					</p>
					<p class="child_wrap_article">
						そんな想いから「共同経営精神」という言葉を掲げ、<br/>
						人や企業に対し対外的な意識を捨て、より身近な距離感でサポートをしていける関係性を目指しています。
					</p>
					<p class="child_wrap_article">
						その関係性を築く為、我々は「ブランディング」という形で様々なリソースを提供していきます。
					</p>
					<p class="child_wrap_article">
						Gisucoの考えるブランディングとは、顧客が伝えたいメッセージと、ユーザーの受けているメッセージを限りなく近づけ、 <br/>
						ユーザーに共通のイメージを持たせたり、実態のない価値を与える方法。「覚えていただく為の手段」だと考えています。
					</p>
					<p class="child_wrap_article">
						多くの会社がブランディングを事業として掲げる中、<br/>
						Gisucoでは独自の「感受性」と「表現力」でブランディング実績を重ねています。<br/>
					</p>
					<p class="child_wrap_article">
						そのブランディング力こそ、Gisucoが提供できる「唯一無二」であると自負しています。
					</p>
				</section>
			</section>
            
			<section id="about_business" class="business_wrap">
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
			</section><!--//business_wrap end-->

<?php get_footer(''); ?>
