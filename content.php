<?php

include_once("connect.php");
include_once("Page.php");
include_once("PageHandler.php");

if (!isset($_GET['page_id'])) {
	header("HTTP/1.0 404 Not Found");
}

$handler = new PageHandler($connection);

$page_id = $_GET['page_id'];
$page = $handler->getPage($page_id);
?>

<h1><?php echo $page->getTitle();  ?></h1>

<?php echo $page->getContent(); ?>
