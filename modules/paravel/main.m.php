<?php
/*  * Copyright (c) 2023 Nawasan Wisitsingkhon
    *
    * This source code is licensed under the MIT license found in the
    * LICENSE file in the root directory of this source tree.
*/

function view($template, $props = null)
{
    require('./views/' . $template);
}

