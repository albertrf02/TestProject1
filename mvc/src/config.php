<?php

$config = [
    "db" => [
        "user" => "root",
        "pass" => "",
        "db" => "testProject1",
        "host" => "localhost"
    ],
];



$accessCode = "1234";
include '../src/models/Db.php';
include '../src/models/UploadUser.php';
include '../src/models/Users.php';