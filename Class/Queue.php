<?php
/*
 * Copyright (c) 2020. Qismat Huseynov
 */
class Queue
{
    // Queue array
    public $dataStore = array();

    // Get the length of the queue
    public function getLength()
    {
        return sizeof($this->dataStore);
    }

    // Judge whether the queue is empty
    public function isEmpty()
    {
        return $this->getLength() === 0;
    }

    // Join the team and add data at the end of the team.
    public function enqueue($element)
    {
        $this->dataStore[] = $element;
    }

    // Leave the team, return and remove the team head data. You can't leave the team when it's empty.
    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->dataStore);
        }
        return false;
    }

    // Traverse the queue and output
    public function show()
    {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->dataStore[$i] . PHP_EOL;
            }
        } else {
            return "empty";
        }
    }

    // Clear queue
    public function clearQueue()
    {
        unset($this->dataStore);
    }

}



