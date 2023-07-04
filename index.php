<?php
require('./modules/use-import/main.m.php');
// **** import libraries type version here ****** //


// ********** //
import('paravel');
import('paravel/auto-import');
if (file_exists('./.env'))
    import('dotenv')->config();
import('paravel/route');
import('paravel/database');
// ********** //
auto_import('./models/*');
auto_import('./controllers/*');
auto_import('./routes/*');
