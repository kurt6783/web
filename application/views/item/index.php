<h2><?php echo $title ?></h2>

<?php foreach ($items as $items_item): ?>
        <div class="main">
        		<?php echo $items_item['name'] ?>
        		<?php echo ':' ?>
                <?php echo $items_item['content'] ?>
             	<img height="42" width="42" src="<?php echo $items_item['img'] ?>">
        </div>        
<?php endforeach ?>
