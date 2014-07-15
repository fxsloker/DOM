<?php
mb_internal_encoding("UTF-8");
error_reporting(-1);

abstract class TinyNode
{
	const XML_ELEMENT_NODE = 1;
	const XML_ATTRIBUTE_NODE = 2;
	const XML_TEXT_NODE = 3;
	const XML_CDATA_SECTION_NODE = 4;
	const XML_COMMENT_NODE = 8;
	const XML_DOCUMENT_NODE = 9;
	const XML_DOCUMENT_TYPE_NODE = 10;

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

	public function appendChild($newNode)
	{	
		$this->childNodes->addNode($newNode);

		$length = $this->childNodes->length;

		if ($length > 1) {
			$newNode->previousSibling = $this->childNodes->getNode($length - 2);
			$this->childNodes->getNode($length - 2)->nextSibling = $newNode;
		} 

		$this->firstChild = $this->childNodes->getNode(0);

		if ($length > 1) {
			$this->lastChild = $this->childNodes->getNode($length - 1);
		} else {
			$this->lastChild = $this->firstChild;
		}
	}

	public function insertBefore($newNode, $refNode) 
	{
		$nodes = $this->childNodes->getAllNodes();

		$index = array_search($refNode, $nodes);

		var_dump($this->childNodes->nodes);

		if ($index != 0) {
			array_splice($this->childNodes->nodes, $index - 1, 0, $newNode);
		} else {
			array_unshift($this->childNodes->nodes, $newNode);
		}

		var_dump($this->childNodes->nodes);

		if ($this->childNodes->length > 1) {
			$this->lastChild = $this->childNodes->getNode($this->childNodes->length - 1);
		} else {
			$this->lastChild = $this->firstChild;
		}
	}
}