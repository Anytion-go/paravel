<?php

function view($template, $props = null)
{
    require('./views/' . $template);
}

