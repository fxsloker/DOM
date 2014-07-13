<?php
require_once 'TinyNode.php';
require_once 'TinyText.php';
require_once 'TinyElement.php';
require_once 'TinyNodesList.php';

class TinyDocument extends TinyNode
{
	public $doctype; 
	public $documentElement = null; 
	public $encoding;

	public function __construct()
	{
		$this->nodeName = "#document";
		$this->nodeType = self::XML_DOCUMENT_NODE;
	}

	public function createElement($tagName)
	{
		$newNode = new TinyElement($tagName);

		return $newNode;
	}

	public function createComment()
	{

	}

	public function createTextNode($content)
	{
		$textNode = new TinyText($value);
		return $textNode;
	}

	public function getElementsByTagName($name)
	{

	}

	public function getElementById($elementID)
	{

	}

	public function saveHTML()
	{

	}
}