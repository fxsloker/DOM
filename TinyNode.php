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

		$this->setFirstLastChilds();

		$this->setSiblings();
	}

	public function insertBefore($newNode, $refNode) 
	{
		$nodesList = $this->childNodes->getNodesList();

		$nodesListCopy = $nodesList;

		$index = array_search($refNode, $nodesList);

		for ($i = 0; $i <= $this->childNodes->getLength(); $i++) {
			if ($i == $index) {
				$nodesListCopy[$i] = $newNode;
				$nodesListCopy[$i + 1] = $refNode;
				$i++;
			} else {
				$nodesListCopy[] = $nodesList[$i];
			}
		}

		$this->childNodes->setNodesList($nodesListCopy);

		$this->setFirstLastChilds();
		$this->setSiblings();
	}

	protected function setFirstLastChilds()
	{
		$this->firstChild = $this->childNodes->getNodeByIndex(0);

		$this->lastChild = $this->childNodes->getNodeByIndex($this->childNodes->getLength());
	}

	protected function setSiblings()
	{
		for ($i = 0; $i <= $this->childNodes->getLength(); $i++) {
			if ($i != $this->childNodes->getLength()) {
				$this->childNodes->getNodeByIndex($i)->nextSibling = $this->childNodes->getNodeByIndex($i + 1);
			}

			if ($i != 0) {
				$this->childNodes->getNodeByIndex($i)->previousSibling = $this->childNodes->getNodeByIndex($i - 1);
			}
		}
	}
}