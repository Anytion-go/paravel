<?php
function index()
{
    $props = [
        'title' => 'welcome',
        'header' => 'Welcome to paravel app'
    ];
    return view('index.php', $props);
}
