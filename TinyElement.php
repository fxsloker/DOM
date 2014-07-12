<?php

require_once 'TinyNode.php';

class TinyElement extends TinyNode
{
	public $tagName;

	public function __construct(TinyDocument $tagName)
	{
		$singleTags = array(
							'area', 'base', 'basefont', 'bgsound', 'br', 'col', 'command',
							'embed', 'hr', 'img', 'input', 'isindex', 'keygen', 'link', 
							'meta', 'param', 'source', 'track', 'wbr'
							)

		foreach ($singleTags as $singleTag) {
			if ($singleTag == $tagName) {
				$this->tagName = "<".$tagName.">";
			} else {
				$this->tagName = array ("<".$tagName.">", "</".$tagName.">");
			}
		}
	}
}