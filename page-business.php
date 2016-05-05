<?php
/*
 Template Name: Business Page
*/
?>

<?php get_header('business'); ?>

		<article id="main_wrap">
			<section id="branding" class="child_wrap business_child_wrap">
				<header class="contents_wrap business_contents_wrap">
					<h2>Branding</h2>
					<p class="child_sub_title">ブランディング事業</p>
					<p>
						ブランディングとは、顧客が伝えたいメッセージと、ユーザーの受けているメッセージを限りなく近づけ、<br/>
						ユーザーに共通のイメージを持たせたり、実態のない価値を与える方法。覚えていただく為の手段です。
					</p>
				</header>
				<ul class="child_slide_wrap child_card_wrap">
					<li>
						<article class="flex_row">
							<div class="slide_img">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/business_brandingimg01.jpg" alt="monoco">
							</div>
							<div class="slide_article">
								<h3 class="child_business_title"><span>モ</span>ノの体験（販路）提供</h3>
								<p class="child_business_article">
									MONOCO（弊社業務提携先）<br/>
									働く人のライフスタイルを美しくする<br/>
									オシャレで実用的なアイテムを取り扱う総合セレクトショップ
								</p>
								<a class="business_link" href="https://monoco.jp/" target="_blank">https://monoco.jp/</a>
							</div>
						</article>
					</li>
					<li>
						<article class="flex_row">
							<div class="slide_img">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/business_brandingimg02.jpg" alt="リブランディング">
							</div>
							<div class="slide_article">
								<h3 class="child_business_title"><span>リ</span>ブランディング</h3>
								<p class="child_business_article">
									ブランドにはコーポレートブランド、商品ブランドなど多様な形態があります。<br />
                                    グループ、企業、事業・カテゴリー、ライン、個別商品 ・サービスなどのブランドを整理し、それぞれの階層のブランドが、互いに相乗効果を発揮する関係を創出することができます。
								</p>
							</div>
						</article>
					</li>
					<li class="child_business_slide_footer">
						<div class="child_business_slide_footer_article slide_article flex_row">
							<h3 class="child_business_title"><span>ブ</span>ランディングで得られるもの</h3>
							<p>
								ブランディングによって、企業の調達力が強化されます。<br/>
								「調達力」には様々な意味があり、売上、人材、資金、販路、<br/>
								取引先など、経営に必要な要素の調達が容易になります。
							</p>
						</div>
					</li>
				</ul>
			</section><!--//branding end-->
            
			<section id="webstrategy" class="child_wrap business_child_wrap">
				<header class="contents_wrap business_contents_wrap">
					<h2 class="long_title">WEB strategy</h2>
					<p class="child_sub_title">WEB戦略事業</p>
					<p>
						Webサイトのディレクションからデザイン、構築、運用までをワンストップでご提供致します。<br/>
						お客様のニーズに合わせたWeb戦略のご提供を行います。
					</p>
				</header>
				<ul id="web_works" class="child_slide_wrap child_card_wrap">
					<?php query_posts( array(
								'post_type' => 'work_post', //カスタム投稿名
								'posts_per_page' => 3, //表示件数（ -1 = 全件 ）
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
				<div class="button_wrap business_button">
					<a href="<?php echo get_option('home'); ?>/works">more</a>
				</div>
			</section><!--//webstrategy end-->
            
			<section id="businessstrategy" class="child_wrap business_child_wrap child_business_strategy_wrap">
            	<header class="contents_wrap business_contents_wrap">
                	<h2 class="long_title">Business strategy</h2>
                    <p class="child_sub_title">事業戦略</p>
                    <p>
                        Gisucoは、革新的な戦略にさまざまな業務に関する専門知識と技術的ノウハウを<br/>
                        組み合わせることによって、戦略から実行まで包括的に提供しています。
                    </p>
                </header>
				<ul class="flex_row">
					<li>
						<section class="child_business_strategy flex_row">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>経営戦略、財務戦略、メディア戦略</h3>
								</div>
								<div class="business_link_article">
									<p>
										経営戦略、財務戦略、<br/>
										及びメディア戦略などのスペシャリストが、<br/>
										調達や在庫適正化等のSCMから、<br/>
										資金調達やWEB等のメディア活用<br/>
										までを包括的にご提案。
									</p>
								</div>
							</div>
						</section>
					</li>
					<li>
						<section class="child_business_strategy flex_row">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>スペシャリストからのご提案</h3>
								</div>
								<div class="business_link_article">
									<p>
										スペシャリストだからこそ、<br/>
										自社サービスに拘らず、外部資源の活用も<br/>
										含めた多面的なご支援が可能。
									</p>
								</div>
							</div>
						</section>
					</li>
					<li>
						<section class="child_business_strategy flex_row">
							<div class="business_link_hover">
								<div class="business_link_title">
									<h3>Gisucoからの最高のご提案</h3>
								</div>
								<div class="business_link_article">
									<p>
										WEB制作チームや、建築・不動産系関係会社など、<br/>
										Gisucoは多岐にわたる協力関係を構築。<br/>
										内部だからこその詳細なカスタマイズが可能<br/>
										であり、単なる既製サービスではなく、<br/>
										オーダーメイドなサービス提供。
									</p>
								</div>
							</div>
						</section>
					</li>
				</ul>
			</section><!--//businessstrategy end-->

<?php get_footer(''); ?>
