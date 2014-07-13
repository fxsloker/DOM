<?php
mb_internal_encoding("UTF-8");

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

	public function __construct()
	{
		$this->childNodes = new TinyNodesList();
	}

	public function appendChild($newNode)
	{
		$this->childNodes->addNode($newNode);

		if (!$this->documentElement) {
			$this->documentElement = $newNode;
		}
	}

	public function insertBefore(TinyNode $newnode, TinyNode $refnode) 
	{

	}
}