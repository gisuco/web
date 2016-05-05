<?php
/*
 Template Name: Company Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<section class="contents_wrap title_contents">
					<h2 class="long_title">Company Information</h2>
					<p class="child_sub_title">会社概要</p>
				</section>
				<section class="contents_wrap basic_contents">
					<dl class="company_info_wrap flex_row">
						<dt>称号</dt>
						<dd>株式会社Gisuco</dd>
					</dl>
					<dl class="company_info_wrap flex_row">
						<dt>役員</dt>
						<dd>
							<dl class="company_member_wrap flex_row">
								<dt>代表取締役社長</dt>
								<dd>
									<a href="<?php echo get_option('home'); ?>/member/#officer01">
										村山 博史
									</a>
								</dd>
								<dt>代表取締役副社長</dt>
								<dd>
									<a href="<?php echo get_option('home'); ?>/member/#officer02">
										栗原 佑輔
									</a>
								</dd>
                                <dt>執行役員兼事業戦略部長</dt>
								<dd>
									<a href="<?php echo get_option('home'); ?>/member/#officer03">
										阪本 拡也
									</a>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="company_info_wrap flex_row">
						<dt>住所</dt>
						<dd>東京都渋谷区広尾1-3-18　広尾オフィスビル11F</dd>
					</dl>
					<dl class="company_info_wrap flex_row">
						<dt>電話番号</dt>
						<dd>03-6869-0181(代表)</dd>
					</dl>
				</section>
				<section class="contents_wrap title_contents">
					<h2>Access</h2>
					<p class="child_sub_title">アクセス</p>
				</section>
			</section>
			<div class="map_wrap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1413261707867!2d139.71019021525782!3d35.64888953020192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b6a659eac8d%3A0x8a2ce7813470acc4!2z44CSMTUwLTAwMTIg5p2x5Lqs6YO95riL6LC35Yy65bqD5bC-77yR5LiB55uu77yT4oiS77yR77yYIOW6g-WwvuOCquODleOCo-OCueODu-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1452511273309" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

<?php get_footer(''); ?>
