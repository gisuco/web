    <footer class="global_footer">
    	<p class="totop"><a href="#wrapper">PAGE TOP</a></p>
        
        <p class="contact"><a href="<?php echo get_option('home'); ?>/contact/">サービスに関してのご相談・お問い合わせ</a></p>
        
        <div class="tel_list_wrap">
        	<dl>
            	<dt>東京事務所</dt>
                <dd>03-6452-9851</dd>
            </dl>
            
            <dl>
            	<dt>大阪事務所</dt>
                <dd>06-6772-2587</dd>
            </dl>
            
            <p class="info">お電話での受付時間：午前10時～午後5時まで</p>
        </div><!--//tel_list_wrap end-->
        
        <p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo_img01.svg" width="100%" alt="BridgeConsulting" /></p>
        
        <ul class="footlink">
        	<li><a href="<?php echo get_option('home'); ?>/privacy/">個人情報に関する取扱い</a></li>
            <li><a href="<?php echo get_option('home'); ?>/site-map/">サイトマップ</a></li>
        </ul>        
        
        <p class="copyright">Copyright&copy;2015 Bridge Co., Ltd. All Rights Reserved.</p>
    </footer>
</div><!--//wrapper end-->

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery.colorbox-min.js"></script>
<script src="https://use.typekit.net/zjp7dsl.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".colorbox").colorbox({
		rel:'group',
		inline: true
	});
});

jQuery('p.menubtn').click(function() {
	jQuery('.global_head').toggleClass('active');
	jQuery('nav#gnav').toggleClass('active');
});
</script>

</body>

</html> <!-- end of site. what a ride! -->
