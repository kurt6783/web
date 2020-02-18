<h2><?php echo $title ?></h2>

<?php echo form_open('register/create') ?>
	<label for="account">account</label>
    <input type="input" name="account" /><br />
    
    <label for="password">password</label>
    <input type="input" name="password"><br />

    <label for="passwordConfirm">passwordConfirm</label>
    <input type="input" name="passwordConfirm"><br />

    <label for="identity_card">identity_card</label>
    <input type="input" name="identity_card"><br />

    <label for="email">email</label>
    <input type="input" name="email"><br />

    <label for="phone">phone</label>
    <input type="input" name="phone"><br />

    <label for="birthdayYear">birthdayYear</label>
    <input type="input" name="birthdayYear"><br />

    <label for="birthdayMonth">birthdayMonth</label>
    <input type="input" name="birthdayMonth"><br />

    <label for="birthdayDay">birthdayDay</label>
    <input type="input" name="birthdayDay"><br />

    <input type="submit" name="submit" value="submit" />
</form>