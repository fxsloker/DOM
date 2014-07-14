<?php
require_once 'TinyNode.php';
require_once 'TinyText.php';
require_once 'TinyElement.php';
require_once 'TinyNodesList.php';
require_once 'TinyDocument.php';

$doc = new TinyDocument();

$root = $doc->createElement('html');
$doc->appendChild($root);

$head = $doc->createElement('head');
$root->appendChild($head);

$body = $doc->createElement('body');
$root->appendChild($body);

var_dump($doc);