<?php

use PHPUnit\Framework\TestCase;
include_once "../App/MethodArrayList/MyList.php";
class MyListTest extends TestCase
{
    public function testGet()
    {
        $myList = new MyList(10);
        $myList->add(1);
        $myList->add(2);
        $myList->add(3);
        $result = $myList->get(1);
        $expect = 2;
        $this->assertEquals($expect,$result);
    }
    public function testRemote()
    {
        $myList = new MyList(10);
        $myList->add(1);
        $myList->add(2);
        $myList->add(3);
        $myList->remove(1);
        $result = $myList->getAll();
        $expect = [1,3];
        $this->assertEquals($expect,$result);
    }
    public function testIndexOf()
    {
        $myList = new MyList(10);
        $myList->add(1);
        $myList->add(2);
        $myList->add(3);
        $result = $myList->indexOf(3);
        $expect = 2;
        $this->assertEquals($expect,$result);
    }
}