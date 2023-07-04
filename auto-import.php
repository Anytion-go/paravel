<?php
function auto_import($path)
{
    $path_list = glob($path);
    foreach ($path_list as $pl) {
        if (is_dir($pl)) {
            auto_import($pl);
        } elseif (substr($pl, -4) == '.php') {
            require($pl);
        }
    }
}
