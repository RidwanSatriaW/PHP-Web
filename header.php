<?php

header('Application: Belajar PHP Web');
header('Author: Ridwan');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
