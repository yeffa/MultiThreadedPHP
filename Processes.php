<?php

class Processes
{
    private string $processClass;

    public function __construct(string $processClass)
    {
        $this->processClass = $processClass;
    }

    public function run(int $processesCount): void
    {
        $processes = [];
        while ($processesCount) {
            $processes[] = new ($this->processClass)("php task.php");
            $processesCount--;
        }
        array_walk($processes, function (Process $process) {
            echo $process->result();
        });
    }
}
