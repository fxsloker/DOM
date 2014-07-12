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

	public function createElement($tagName)
	{
		$newnode = new TinyElement($tagName);

		return $newnode;
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