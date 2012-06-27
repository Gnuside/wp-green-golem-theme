<?php if ( have_comments() ) : ?>
<div id='comment-list'>
	<h3>Commentaires</h3>
	<?php
		wp_list_comments(array(
			'callback' => 'revenudebase_comment',
			'reverse_top_level' => TRUE
		));
	?>
</div>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="comment-write">
	<h3>Rédiger un commentaire</h3>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<label for="author">Nom ou pseudo&nbsp;:</label>
		<input id="author" name='author' placeholder='Nom ou pseudo' type='text' />
		<label for="email">Adresse email&nbsp;:</label>
		<input id="email" name='email' placeholder='Adresse email' type='text' />
		<label for="url">Site web (facultatif)&nbsp;:</label>
		<input id="url" name='url' placeholder='Site web' type='text' />
		<label for="comment">Commentaire&nbsp;:</label>
		<textarea id="comment" name='comment'></textarea>
		<label>&nbsp;</label>
		<input name='submit' type='submit' value='Envoyer' />

		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>
<?php endif; ?>
