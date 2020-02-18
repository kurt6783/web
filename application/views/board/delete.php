<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('board/delete') ?> 
	<label for="id">id</label>
    <input type="input" name="id" /><br />

    <input type="submit" name="submit" value="Delete message" />
</form>