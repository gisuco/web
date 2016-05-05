<?php if (is_mobile()) : ?>

<?php get_header('sp'); ?>

    <article id="service" class="common_wrap">
    	<h2 class="ttl">SERVICE</h2>
    
    	<ul class="under_content_link">
        	<li><a href="<?php echo get_option('home'); ?>/service/division/" class="pjax">Division</a></li>
            <li class="active"><a href="<?php echo get_option('home'); ?>/service/example/" class="pjax">Example</a></li>
        </ul>
        
        <div class="pjax_wrap">
        
            <section id="example_single" class="single_wrap">
                <header>
                    <h3><?php the_title();?></h3>
                    <p class="date"><?php the_field('date_field'); ?></p>
                </header>
                
                <div class="content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content()?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section><!--//single_wrap end-->
	        <?php get_template_part('breadcrumb_service'); ?>
        </div><!--//pjax_wrap end-->
    </article><!--//common_wrap end-->

<?php get_footer('sp_pjax'); ?>

<?php else: ?>

<?php get_header('service'); ?>

    <article id="service" class="common_wrap">
    	<h2 class="ttl">SERVICE</h2>
    
    	<ul class="under_content_link">
        	<li><a href="<?php echo get_option('home'); ?>/service/division/" class="pjax">Division</a></li>
            <li class="active"><a href="<?php echo get_option('home'); ?>/service/example/" class="pjax">Example</a></li>
        </ul>
        
        <div class="pjax_wrap">
        
            <section id="example_single" class="single_wrap">
                <header>
                    <h3><?php the_title();?></h3>
                    <p class="date"><?php the_field('date_field'); ?></p>
                </header>
                
                <div class="content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content()?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section><!--//single_wrap end-->
	        <?php get_template_part('breadcrumb_service'); ?>
        </div><!--//pjax_wrap end-->
    </article><!--//common_wrap end-->


<?php get_footer('pjax'); ?>

<?php endif; ?>