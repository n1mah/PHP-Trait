<?php
require_once __DIR__ . '/../src/Traits/LoggerTrait.php';
require_once __DIR__ . '/../src/Models/User.php';

use Models\User;

$user = new User("Nima");
$user->greet();
