<?php

use framework\App;

$users = App::get('database')->selectAll('users');

$greeting = "Hello World!";

require '../resources/views/users.blade.php';