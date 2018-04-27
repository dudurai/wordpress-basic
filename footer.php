<div class="footer">
  <div class="wrap">
    <h2>Fale Conosco</h2>
    <?php echo FrmFormsController::get_form_shortcode(array('id' => 3, 'key' => '', 'title' => false, 'description' => false, 
    'readonly' => false, 'entry_id' => false)); ?>
  </div>
</div>

<div class="footer-2">
  <div class="wrap">
    <p>Sociedade Esportiva Palmeiras - 2018</p>
      <ul class="soc">
        <li><a class="soc-twitter" href="#"></a></li>
        <li><a class="soc-facebook" href="#"></a></li>
        <li><a class="soc-linkedin" href="#"></a></li>
        <li><a class="soc-rss soc-icon-last" href="#"></a></li>
      </ul>
      <div class="clear"></div>
  </div>
</div>

<script>
 $(document).ready(function() {
	$(".popup").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    
$(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });
});
$('.nav').slideAndSwipe();
});
</script>
<?php wp_footer(); ?>
</body>
</html>