<?php
/*  * Copyright (c) 2023 Nawasan Wisitsingkhon
    *
    * This source code is licensed under the MIT license found in the
    * LICENSE file in the root directory of this source tree.
*/

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
