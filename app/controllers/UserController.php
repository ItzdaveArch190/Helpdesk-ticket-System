<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ .  '/../models/user.php';



$conn =  new Database();
$createUser =  new User($conn->opencon());

json_decode([]);



if()
{

}

















?>