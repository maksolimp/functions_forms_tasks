<?php
function current_dir($dir) {
    return scandir($dir);
}
print_r(current_dir(__DIR__));