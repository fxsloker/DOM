<?php
require_once 'TinyDocument.php';

class TinyNodesList
{
	public $nodes = array();
	public $length = 0;

	public function getNode($index)
	{
		$nodes = $this->nodes;
		return $nodes[$index];
	}

	public function addNode($newNode)
	{
		array_push($this->nodes, $newNode);

		$this->length += 1;
	}

	public function getAllNodes()
	{
		return $this->nodes;
	}
}