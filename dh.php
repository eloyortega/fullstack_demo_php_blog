<?php

//print_r( $_POST );
//echo '<br><br>';

$d = file_get_contents('data.json');
$d = json_decode($d, true);
array_unshift($d, $_POST);
$d = json_encode($d);
file_put_contents('data.json', $d);

//print_r($d);

header('location: index.php');

$t="info@artbyeloi.com";
$s = 'New Lead';
$m = $_POST['Author'].' Just wrote a new article';
$h = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($t, $s, $m, $h);



?>