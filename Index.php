<?php
require_once 'TinyNode.php';
require_once 'TinyText.php';
require_once 'TinyElement.php';
require_once 'TinyNodesList.php';
require_once 'TinyDocument.php';

$doc = new TinyDocument();

$root = $doc->createElement('html');
$doc->appendChild($root);

$body = $doc->createElement('body');
$doc->appendChild($body);

$div = $doc->createElement('div');
$body->appendChild($div);

$p = $doc->createElement('p');
$body->insertBefore($p, $div);

var_dump($body->childNodes->getNodesList());