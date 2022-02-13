<?php

include 'Processes.php';
include 'Process.php';

(new Processes(
    Process::class
))->run(10);
