<?php
define('ROOT', '../');

require ROOT."ScratchAPI/Scratch.php";
require ROOT."ScratchAPI/User.php";

$user = new \ScratchAPI\User('robinp');

print_r($user->following());