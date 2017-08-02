<?php
/**
 * Displays footer contsct if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="tw-seventeen-contact">
	 
	<p class="only-desktop">
		<span class="tw-contact-btn-label"><?php esc_html_e('Call Us', 'twentyseventeen'); ?></span>:  
		<a class="tw-contact-btn" href="tel:0935345634652"><?php esc_html_e('0935345634652', 'twentyseventeen'); ?></a>
	</p>

	<p class="only-desktop">
		<span class="tw-contact-btn-label"><?php esc_html_e('Email', 'twentyseventeen'); ?></span>: 
		<a class="tw-contact-btn" href="mailto:testtestt@example.com"><?php esc_html_e('testtestt@example.com', 'twentyseventeen'); ?></a>
	</p> 

	<button class="only-mobile tw-contact-btn">
		<a href="tel:0935345634652">
			<?php esc_html_e('Call Us', 'twentyseventeen'); ?>
		</a>
	</button>  

	<button class="only-mobile tw-contact-btn">
		<a href="mailto:testtestt@example.com">
			<?php esc_html_e('Email Us', 'twentyseventeen'); ?>
		</a>
	</button> 


	<button class="tw-seventeen-popup-btn js_footer_contact_btn"><?php esc_html_e('Contact Us', 'twentyseventeen'); ?></button>

	<div class="tw-seventeen-contact-popup js_footer_contact_popup">
		<form method="post" action="/messages">
		    <p><label for="email"><?php esc_html_e('Your email or name', 'twentyseventeen'); ?></label><input type="text" size="30" name="email" id="email" /></p>
		    <p><label for="body"><?php esc_html_e('Message', 'twentyseventeen'); ?></label><textarea rows="6" name="body" cols="35"></textarea></p>
		    <p><input type="submit" value="<?php esc_html_e('Send Message', 'twentyseventeen'); ?>" name="commit" id="message_submit"/> or <a class="close js_footer_contact_btn_close" href="/"><?php esc_html_e('Cancel', 'twentyseventeen'); ?></a></p>
		  </form>
	</div> 


</div>

 
