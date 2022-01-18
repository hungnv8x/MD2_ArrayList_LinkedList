<?php

use PHPUnit\Framework\TestCase;
include_once "../App/List/ArrayList.php";

class ListTest extends TestCase
{
    public function testArrayListGet()
    {
        $item =1;
        $item1 =2;
        $item2 =3;
        $arrayList = new ArrayList();
        $arrayList->add($item);
        $arrayList->add($item1);
        $arrayList->add($item2);
        $result = $arrayList->get(2);
        $expect = 3;
        $this->assertEquals($expect,$result);
    }
    public function testArrayListGet1()
    {
        $item =1;
        $item1 =2;
        $item2 =3;
        $arrayList = new ArrayList();
        $arrayList->add($item);
        $arrayList->add($item1);
        $arrayList->add($item2);
        $result = $arrayList->get(-1);
        $expect = "ERROR in ArrayList.get";
        $this->assertEquals($expect,$result);
    }
}