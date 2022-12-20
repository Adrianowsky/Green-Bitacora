<?php

//function to generate form feedback
function form_feedback($type, $message){
 global $feedback;

 if($type == "success") $feedback = "<div class='success'>{$message}</div>";
 else $feedback = "<div class='error'>{$message}</div>";
 
}

	//feedback messages
	$message_unsent  = "El mensaje no se envió. Vuelve a intentarlo.";
	$message_sent    = "Tu mensaje fue enviado con éxito. ¡Pronto te responderemos!";
 
	//user posted variables
	$subject = strip_tags($_POST['message_subject']);
	$name = strip_tags($_POST['message_name']);
	$email = strip_tags($_POST['message_email']);
	$privacy = strip_tags($_POST['privacy_consent']);
	$honeypot = strlen($_POST['message_yogi']);
	$form_message = strip_tags($_POST['message_text']);
	$email_body = 'Enviado por '.$name.','."\n\n".$form_message;

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
			    	<label for="name">Asunto:<br>
			    		<select name="message_subject" required>
			    			<option value=""></option>
			    			<option value="Idea de mejora">Tengo una idea de mejora</option>
			    			<option value="Quiero escribir">Quiero escribir en Green Bitácora</option>
			    			<option value="Quiero colaborar">Quiero ayudar de otra forma</option>
			    			<option value="Error encontrado">He visto un error que quiero comunicar</option>
			    			<option value="Otros">Otro asunto</option>
			    		</select>
			    	</label>
			    </p>
			    <p>
			    	<label for="name">Nombre:<br>
			    		<input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" placeholder="Como quieres que nos dirijamos a ti" required>
			    	</label>
			    </p>
			    <p>
			    	<label for="message_email">Email:<br>
			    		<input type="email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="Email para comunicarnos contigo" required>
			    	</label>
			    </p>
			    <?php //Honeypot field to catch spam bots ?>
			    <input type="text" name="message_yogi" value="" class="yogi">
			    <p>
			    	<label for="message_text">Mensaje:<br>
			    		<textarea type="text" name="message_text" placeholder="Lo que quieras decirnos" required><?php echo esc_textarea($_POST['message_text']); ?></textarea>
			    	</label>
			    </p>
			    <p>
			    	<label for="privacy_consent">
			    		<input type="checkbox" name="privacy_consent" value="accepted" required> He leído y acepto la <a href="https://greenbitacora.org/es/politica-de-privacidad" target="_blank">política de privacidad</a>
			    	</label>
			    </p>
			    <input type="hidden" name="submitted" value="1">
			    <p class="submit-area">
			    	<button class="submit">Enviar</button>
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
