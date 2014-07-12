<?php
mb_internal_encoding("UTF-8");

abstract class TinyNode
{
	public $nodeName;
	public $nodeValue;
	public $nodeType;
	public $parentNode;
	public $childNodes;
	public $firstChild;
	public $lastChild;
	public $previousSibling;
	public $nextSibling;
	public $ownerDocument;
	public $textContent;

	public function __construct()
	{
		$this->childNodes = new TinyNodesList();
	}

	public function appendChild($newnode)
	{
		array_push($this->childNodes->nodes, $newnode);
	}

	public function insertBefore(TinyNode $newnode, TinyNode $refnode) 
	{

	}
}