<?php

class Processes
{
    private string $processClass;

    public function __construct(string $processClass)
    {
        $this->processClass = $processClass;
    }

    public function run(string $taskUrl, int $processesCount): void
    {
        $processes = [];
        while ($processesCount) {
            $processes[] = new ($this->processClass)("php $taskUrl");
            $processesCount--;
        }
        array_walk($processes, function (Process $process) {
            echo $process->result();
        });
    }
}
