<?php
include_once "../LinkedList/Node.php";

class LinkList
{
    private $count;
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($index, $obj)
    {
        $count = 0;
        $current = $this->firstNode;
        $node = new Node($obj);
        while (!is_null($current)) {
            if ($count == $index) {
                $beforeCurrent->next = $node;
                $node->next = $current;
            }
            $beforeCurrent = $current;
            $current = $current->next;
            $count++;
        }
    }

    public function get($index)
    {
        $count = 0;
        $current = $this->firstNode;
        while (!is_null($current)) {
            if ($count == $index) {
                return $current->readNode();
            }
            $current = $current->next;
            $count++;
        }
    }

    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        $current = $this->firstNode;
        while (!is_null($current)) {
            echo $current->readNode()." ";
            $current = $current->next;
        }
    }

    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}