<?php

/* Show movie youtube */
add_shortcode('youtube', youtube_shortcode);

function youtube_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'id' => 'YE7VzlLtp-4',
			'height' => 350 
		), $atts);
	
	// extract($atts);

	return '<iframe width="100%" height="'.$atts['height'].'" src="https://www.youtube.com/embed/'.$atts['id'].'" frameborder="0" allowfullscreen style="margin-top:30px;margin-bottom:30px;"></iframe>';
}

/* shortcode offer product */
add_shortcode('offerProductTypeId', offer_product_type_id_shortcode);

function offer_product_type_id_shortcode($atts) {

	$homeUrl = get_home_url();

	$atts = shortcode_atts(
		array(
			'id' => 1,
		), $atts);
	$productId = $atts['id'];
    $productUrl = EASY_RECYCLAGE_STORE_URL."/subscription/product/".$productId;
    $product = file_get_contents($productUrl);
    $product = json_decode($product, TRUE);
	

	return '<div class="col-md-4 col-xs-12">
				<div class="block-offer" id="box_'.$product['product']['id'].'">
	                <h3>DÉCOUVREZ NOS PRESTATIONS<br>
						ET RECYCLEZ VOUS AUSSI
						VOS '.$product['product']['name'].' !</h3>
	                <div class="block-picto">
	                    <img src="'.$product['product']['picto1'].'">
	                </div>
	                <a class="btn btn-default" href="'.$homeUrl.'/decouvrez-notre-offre/#'.strtolower(str_replace(' ','-',$product['product']['name'])).'" target="_blank">voir nos offres</a>
	            </div>
	        </div>';
}

/* shortcode strong */
add_shortcode('styleStrongBlock', style_strong_block_shortcode);

function style_strong_block_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'content' => '',
		), $atts);
	
	// extract($atts);

	return '<div class="col-md-8 col-xs-12 shortcode-strong-container">
				<strong class="shortcode-strong-style">'.$atts['content'].'</strong>
			</div>';
}
/* shortcode title */
add_shortcode('postSubTitle', post_sub_title_shortcode);

function post_sub_title_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'title' => '',
		), $atts);
	
	// extract($atts);

	return '<h3 class="shortcode-post-title-green">'.$atts['title'].'</h3>';
}
/* shortcode quote */
add_shortcode('postQuoteBlock', post_block_quote_shortcode);

function post_block_quote_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'content' => '',
		), $atts);
	
	// extract($atts);

	return '<strong class="shortcode-blockquote-big">'.$atts['content'].'</strong>';
}


