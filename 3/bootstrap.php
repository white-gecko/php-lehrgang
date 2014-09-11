<?php
function my_autoloader ($class) {
    if (strpos($class, 'My_') === 0) {
        $split = strpos($class, '_');
        $file = substr($class, $split);
        include 'application/' . $file . '.php';
    }
}
spl_autoload_register('my_autoloader');
