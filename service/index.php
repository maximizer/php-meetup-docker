<?php
$ret = ["server_ip" => $_SERVER['SERVER_ADDR'], "remote_ip" => $_SERVER['REMOTE_ADDR'], "x_forwarded_for" => $_SERVER['HTTP_X_FORWARDED_FOR'], "random_number_generator" => rand(0, 100)];



echo json_encode($ret);
