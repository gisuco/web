        <ul class="breadcrumb">
        	<li><a href="<?php echo get_option('home'); ?>">TOP</a></li>
            <?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?>
            <li><a href="<?php echo get_page_link( $parid );?>" title="<?php echo get_page($parid)->post_title; ?>">
<?php echo get_page($parid)->post_title; ?></a></li>
            <?php } ?>
            <li><?php the_title(''); ?></li>
        </ul>