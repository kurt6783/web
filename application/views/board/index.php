<h2><?php echo $title ?></h2>

<?php foreach ($boards as $boards_item): ?>
    <div class="main">
		<?php echo $boards_item['id'] ?>
		<?php echo ':' ?>
		<?php echo $boards_item['user'] ?>
		<?php echo ':' ?>
        <?php echo $boards_item['message'] ?>
        <?php echo ':' ?>
        <?php echo $boards_item['datetime'] ?>               
    </div>        
<?php endforeach ?>
<div>
	<a class="add" href="board/create">add</a>
	<a class="update" href="board/update">update</a>
	<a class="delete" href="board/delete">delete</a>
</div>




