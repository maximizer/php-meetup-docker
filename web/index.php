<?php
  $randomNumberResponse = file_get_contents(getenv("RANDOM_NUMBER_URL"));
  $randomArr = json_decode($randomNumberResponse, true);
?>
<h1>Hello, your random number is:<?=$randomArr['random_number_generator']?> </h1>
From docker container with IP address: <?=$randomArr['server_ip']?>
