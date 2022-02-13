<?php

class Process
{
    private $resource;

    public function __construct(string $task)
    {
        $this->resource = popen($task, 'r');
    }

    public function result(): string
    {
        return fread($this->resource, 2096);
    }
}
