<?php
require_once 'TinyDocument.php';

class TinyNodesList
{
	private $nodesList = array();
	private $length = 0;

	public function getNodeByIndex($index)
	{
		$nodes = $this->nodesList;
		return $nodes[$index];
	}

	public function addNode($newNode)
	{
		array_push($this->nodesList, $newNode);

		$this->length += 1;
	}

	public function getNodesList()
	{
		return $this->nodesList;
	}

	public function getLength()
	{
		return $this->length - 1;
	}

	public function setNodesList($nodesList)
	{
		$this->nodesList = $nodesList;

		$this->length += 1;
	}
}