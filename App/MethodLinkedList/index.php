<?php
include_once "LinkList.php";
$linkList = new LinkList();
$linkList->addFirst(20);
$linkList->addFirst(30);
$linkList->addLast(40);
$linkList->addLast(50);
print_r($linkList->readList());
$linkList->add(0,50);
print_r($linkList->readList());
echo "<br>";
echo $linkList->get(0);
echo "<br>";
$linkList->printList();