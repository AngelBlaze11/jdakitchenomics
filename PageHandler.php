<?php

class PageHandler
{
	protected $db;

	public function __construct($connection)
	{
		$this->db = $connection;
	}

	public function getPages()
	{
		$pages = [];
		try {
			$sql = "SELECT id, title FROM pages";
			$result = $this->db->query($sql);
			while ($row = $result->fetch_assoc()) {
				extract($row);
				$page = new Page($id, $title);
				array_push($pages, $page);
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
		return $pages;
	}

	public function getPage($page_id)
	{
		$page = null;
		try {
			$sql = "SELECT * FROM pages WHERE id=?";
			$statement = $this->db->prepare($sql);
			$statement->bind_param('i', $page_id);
			$statement->execute();
			$result = $statement->get_result();
			$row = $result->fetch_assoc();
			extract($row);
			$page = new Page($id, $title, $content);
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
		return $page;
	}
}
