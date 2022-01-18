<?php

use PHPUnit\Framework\TestCase;
include_once "../App/LinkedList/LinkedList.php";
class LinkedListTest extends TestCase
{
    public function testTotalNodes()
    {
        $linkedList = new LinkedList();
        $linkedList->insertFirst(11);
        $linkedList->insertFirst(22);
        $linkedList->insertLast(33);
        $linkedList->insertLast(44);
        $result = $linkedList->totalNodes();
        $expect = 4;
        $this->assertEquals($expect,$result);
    }

    public function testReadList()
    {
        $linkedList = new LinkedList();
        $linkedList->insertFirst(11);
        $linkedList->insertFirst(22);
        $linkedList->insertLast(33);
        $linkedList->insertLast(44);
        $result = $linkedList->readList();
        $expect = [22,11,33,44];
        $this->assertEquals($expect,$result);
    }
}