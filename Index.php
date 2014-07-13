<?php
require_once 'TinyNode.php';
require_once 'TinyText.php';
require_once 'TinyElement.php';
require_once 'TinyNodesList.php';
require_once 'TinyDocument.php';

$doc = new TinyDocument();

$root = $doc->createElement('html');
$doc->appendChild($root);

var_dump($doc->documentElement);