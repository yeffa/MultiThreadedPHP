<?php
$result = 0;
for ($i = 1; $i < 50000000; $i++) {
    $result += 1 / $i;
}
echo "$result\n";
