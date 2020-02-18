<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('board/update') ?> 
	<label for="id">id</label>
    <input type="input" name="id" /><br />

    <label for="message">Message</label>
    <textarea name="message"></textarea><br />

    <input type="submit" name="submit" value="Update message" />
</form>