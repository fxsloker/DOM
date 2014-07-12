<?php

require_once 'TinyNode.php';

class TinyElement extends TinyNode
{
	public $tagName;

	public function __construct(TinyDocument $tagName)
	{
		$this->$tagName = array ("<".$tagName.">", "</".$tagName.">");
	}
}