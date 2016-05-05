<?php
/*
 Template Name: Contact Page
*/
?>

<?php get_header(''); ?>

		<article id="main_wrap">
			<section class="child_wrap">
				<header class="contents_wrap title_contents">
					<h2 class="long_title">Mail Form</h2>
					<p>当社に関するお問い合わせ／採用については、下記フォームよりお願いいたします。</p>
				</header>
				<div class="form_contents_wrap">
					<?php echo do_shortcode('[mwform_formkey key="16"]'); ?>
				</div>
			</section>

<?php get_footer(''); ?>
