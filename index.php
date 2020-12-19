<?php

include_once("connect.php");
include_once("Page.php");
include_once("PageHandler.php");

$handler = new PageHandler($connection);
$pages = $handler->getPages();
?>

<?php foreach ($pages as $page): ?>

<li>
	<a href="content.php?page_id=<?php echo $page->getId() ;?>">
		<?php echo $page->getTitle(); ?>
	</a>
</li>

<?php endforeach ?>
