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

$div = $doc->createElement('div');
$body->appendChild($div);

$p = $doc->createElement('p');
$body->appendChild($p);

$em = $doc->createElement('em');
$body->appendChild($em);

$img = $doc->createElement('img');
$body->insertBefore($img, $em);

var_dump($img->previousSibling);
var_dump($img->nextSibling);