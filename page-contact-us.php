<?php

//function to generate form feedback
function form_feedback($type, $message){
 global $feedback;

 if($type == "success") $feedback = "<div class='success'>{$message}</div>";
 else $feedback = "<div class='error'>{$message}</div>";
 
}

	//feedback messages
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Your message was succesfully sent!";
 
	//user posted variables
	$subject = strip_tags($_POST['message_subject']);
	$name = strip_tags($_POST['message_name']);
	$email = strip_tags($_POST['message_email']);
	$privacy = strip_tags($_POST['privacy_consent']);
	$honeypot = strlen($_POST['message_yogi']);
	$form_message = strip_tags($_POST['message_text']);
	$email_body = 'Sent by '.$name.','."\n\n".$form_message;

	$headers = 'From: '. $email . "\r\n" .'Reply-To: ' . $email . "\r\n";
		
	if ($_POST['submitted'] == '1' && $honeypot == '0' && $privacy == "accepted") {

		$sent = wp_mail( 'contact@greenbitacora.org', $subject, $email_body, $headers);

		if($sent){
			form_feedback("success", $message_sent);

			//empty the form after correct submit
			$_POST = array();
		} else{
			form_feedback("error", $message_unsent);
		} 
	}
?>

<?php get_header(); ?>

<div class="page-container">
	<div class="page-box">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post(); 
		?>
			<?php //the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<div class="page-title-box">
				<?php the_post_thumbnail('large'); ?>
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div>
			<div class="page-text-box"><?php the_content(); ?>
			
			<?php echo $feedback; ?>
			  <form action="<?php the_permalink(); ?>" method="post">
			  	<p>
			    	<label for="name">Subject:<br>
			    		<select name="message_subject" required>
			    			<option value=""></option>
			    			<option value="Improvement idea">I have an improvement idea</option>
			    			<option value="I want to write">I want to write in Green Bitácora</option>
			    			<option value="I want to help">I want to help by other means</option>
			    			<option value="Error founded">I found an error</option>
			    			<option value="Other">Other</option>
			    		</select>
			    	</label>
			    </p>
			    <p>
			    	<label for="name">Name:<br>
			    		<input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" placeholder="How do you want us to address you?" required>
			    	</label>
			    </p>
			    <p>
			    	<label for="message_email">Email:<br>
			    		<input type="email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="Email to contact you" required>
			    	</label>
			    </p>
			    <?php //Honeypot field to catch spam bots ?>
			    <input type="text" name="message_yogi" value="" class="yogi">
			    <p>
			    	<label for="message_text">Message:<br>
			    		<textarea type="text" name="message_text" placeholder="Whatever you want to tell us" required><?php echo esc_textarea($_POST['message_text']); ?></textarea>
			    	</label>
			    </p>
			    <p>
			    	<label for="privacy_consent">
			    		<input type="checkbox" name="privacy_consent" value="accepted" required> I've read and accepted the <a href="https://greenbitacora.org/en/privacy-policy" target="_blank">privacy policy</a>
			    	</label>
			    </p>
			    <input type="hidden" name="submitted" value="1">
			    <p class="submit-area">
			    	<button class="submit">Submit</button>
			    </p>
			  </form>

			</div> <!-- page-text-box -->
	
		<?php
			// End of the loop.
		endwhile;
		?>
	</div>
</div>

<?php get_footer(); ?> 
