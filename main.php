<?php

// Выполняет любой таск в 10 раз бысрее
// Загружает физически все ядра (AMD 2600 6ядер 12потоков)

include 'Processes.php';
include 'Process.php';

(new Processes(
    Process::class // Имя класса процесса
))->run('task.php', 12); // ссылка на таск, кол-во потоков
