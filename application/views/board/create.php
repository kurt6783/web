<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('board/create') ?>
    <label for="user">User</label>
    <input type="input" name="user" /><br />
    
    <label for="message">Message</label>
    <textarea name="message"></textarea><br />

    <input type="submit" name="submit" value="Add news message" />
</form>