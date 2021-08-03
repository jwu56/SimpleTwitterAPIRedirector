<?php
$url = 'https://api.twitter.com/1.1/users/show.json';

// use key 'http' even if you send the request to https://...
$options = array(
'http' => array(
'header'  => getallheaders(),
'method'  => 'GET',
'content' => $_GET
)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
echo($result);
?>