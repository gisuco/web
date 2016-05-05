 	<div class="main_img pc">
    	<ul class="slider">
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_txt01.png" alt="">
                    </li>
                    <li class="slide_word_back">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_bt01.png" alt="">
                    </li>
                    <li class="slider_background"></li>
                </ul>
            </li>
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_txt02.png" alt="">
                    </li>
                    <li class="slide_word_back">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_bt01.png" alt="">
                    </li>
                    <li class="slider_background"></li>
                </ul>
            </li>
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_txt03.png" alt="">
                    </li>
                    <li class="slide_word_back">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/mainimg_bt01.png" alt="">
                    </li>
                    <li class="slider_background"></li>
                </ul>
            </li>
        </ul>
    </div><!--//main_img end-->
    
    <div class="main_img sp">
    	<ul class="slider">
        	<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/main_img_bg.png" width="100%" alt=""></li>
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/mainimg_txt01.png" width="100%" alt="企業に翼を">
                    </li>
                    <li class="slider_background"><img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/main_img01.jpg" width="100%" alt="企業に翼を"></li>
                </ul>
            </li>
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/mainimg_txt02.png" width="100%" alt="クライアントをより高く、より前へ">
                    </li>
                    <li class="slider_background"><img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/main_img02.jpg" width="100%" alt="クライアントをより高く、より前へ"></li>
                </ul>
            </li>
            <li class="slider_contents">
                <ul class="slider_wrap">
                    <li class="slider_word">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/mainimg_txt03.png" width="100%" alt="日本からアジアそして、世界へ">
                    </li>
                    <li class="slider_background"><img src="<?php echo get_template_directory_uri(); ?>/library/images/sp/main_img03.jpg" width="100%" alt="日本からアジアそして、世界へ"></li>
                </ul>
            </li>
        </ul>
    </div><!--//main_img end-->
    
    <div id="company_logo_wrap" class="clearfix">
    	<?php query_posts( array(
					'post_type' => 'group_logo', //カスタム投稿名
					'posts_per_page' => 1 //表示件数（ -1 = 全件 ）
					)); ?>
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <ul>
        	<?php if(get_field('grouplogo_filed')): ?>
    		<?php while(the_repeater_field('grouplogo_filed')): ?>
            <li>
				<?php
                	$attachment_id = get_sub_field('image_field');
					$size = "full"; // (thumbnail, medium, large, full or custom size)
					$image = wp_get_attachment_image_src( $attachment_id, $size );
					$attachment = get_post( get_field('image') );
					$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
					$image_title = $attachment->post_title;
				?>
                <a href="<?php the_sub_field('url_field'); ?>" target="_blank"><img src="<?php echo $image[0]; ?>" width="100%" alt="<?php the_sub_field('name_field'); ?>" /></a>
            </li>
            <?php endwhile; ?>
			<?php endif; ?>
        </ul>
        <?php endwhile; ?>            
        <?php endif; ?>
    </div><!--//company_logo_wrap end-->
    
    <section id="press_and_news">
    	<header>
        	<h2 id="press_tab" class="press active">Press Release</h2>
            <h2 id="news_tab" class="news">News</h2>
        </header>
        
        <div id="press_list" class="content active">
        	<?php query_posts( array(
						'post_type' => 'press_info',
						'posts_per_page' => 3
			)); ?>
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        	<article>
            	<p class="date"><?php the_field('date_field'); ?></p>
                <p class="ttl"><a href="<?php the_permalink() ?>"><?php the_title();?></a></p>
            </article>
            <?php endwhile; ?>
			<?php endif; ?>
            
            <p class="morebtn"><a href="<?php echo get_option('home'); ?>/news/">more</a></p>
        </div><!--//press_list end-->
        
        <div id="news_list" class="content">
        	<?php query_posts( array(
						'post_type' => 'news_info',
						'posts_per_page' => 3
			)); ?>
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        	<article>
            	<p class="date"><?php the_field('date_field'); ?></p>
                <p class="ttl"><a href="<?php the_permalink() ?>"><?php the_title();?></a></p>
            </article>
            <?php endwhile; ?>
			<?php endif; ?>
            
            <p class="morebtn"><a href="<?php echo get_option('home'); ?>/news/">more</a></p>
        </div><!--//news_list end-->
    </section><!--//press_and_news end-->
    
    <section id="group_wrap">
    	<header>
        	<h3><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo_img02.svg" width="100%" alt="BridgeGroup" /></h3>
        </header>
        
        <div class="content">
        	<dl>
            	<dt>株式会社BridgeConsultinng</dt>
                <dd>
                	<p class="description">会計・財務コンサルティング事業</p>
                    <p class="tosite"><a href="http://bridge-group.co.jp/" target="_blank">to site</a></p>
                </dd>
            </dl>
            
            <dl>
            	<dt>税理士法人Bridge大阪</dt>
                <dd>
                	<p class="description">税務・相続コンサルティング事業</p>
                    <p class="tosite"><a href="http://bridge-osaka.com/" target="_blank">to site</a></p>
                </dd>
            </dl>
            
            <dl>
            	<dt>社労士事務所Bridge</dt>
                <dd>
                	<p class="description">人事・労務コンサルティング事業</p>
                    <p class="tosite"><a href="http://sr-bridge.com/" target="_blank">to site</a></p>
                </dd>
            </dl>
            
            <dl>
            	<dt>税理士法人Bridge東京</dt>
                <dd>
                	<p class="description">税務・相続コンサルティング事業</p>
                    <p class="tosite"><a href="http://bridge-tokyo.co/" target="_blank">to site</a></p>
                </dd>
            </dl>
            
            <dl>
            	<dt>株式会社HumanBridge</dt>
                <dd>
                	<p class="description">新しい働き方の提案・デザイン事業</p>
                    <p class="tosite"><a href="http://www.human-bridge.jp/" target="_blank">to site</a></p>
                </dd>
            </dl>
        </div><!--//content end-->
    </section><!--//group_wrap end-->
	
    
    <div id="media_list_wrap" class="pc">
    	<div class="content">
        	<a href="http://dokuritsu-cpa.com/" target="_blank">
            	<dl>
                	<dt>独立会計士.job</dt>
                    <dd>会計士のための開業・営業支援サイト</dd>
                </dl>
            </a>
            
            <a href="http://lady-cpa.com/" target="_blank">
            	<dl>
                	<dt>女性会計士.job</dt>
                    <dd>女性会計士と企業様のマッチングサイト</dd>
                </dl>
            </a>
            
            <a href="http://lady-keiri.com/" target="_blank">
            	<dl>
                	<dt>経理女子.job</dt>
                    <dd>経理・財務職のキャリアアップを目指す人の ためのお仕事紹介サイト</dd>
                </dl>
            </a>
        </div><!--//content end-->
    </div><!--//media_list_wrap-->
    
    <section id="media_list_wrap" class="sp">
    	<header>
        	<h4>Media</h4>
        </header>
    	<div class="content">
        	<a href="http://dokuritsu-cpa.com/" target="_blank">
            	<dl>
                	<dt>独立会計士.job</dt>
                    <dd>会計士のための開業・営業支援サイト</dd>
                </dl>
            </a>
            
            <a href="http://lady-cpa.com/" target="_blank">
            	<dl>
                	<dt>女性会計士.job</dt>
                    <dd>女性会計士と企業様のマッチングサイト</dd>
                </dl>
            </a>
            
            <a href="http://lady-keiri.com/" target="_blank">
            	<dl>
                	<dt>経理女子.job</dt>
                    <dd>経理・財務職のキャリアアップを目指す人の ためのお仕事紹介サイト</dd>
                </dl>
            </a>
        </div><!--//content end-->
    </section><!--//media_list_wrap-->