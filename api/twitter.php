<?php
var_dump($_SERVER['QUERY_STRING']);
$url = 'https://api.twitter.com/1.1/users/show.json'.$_SERVER['QUERY_STRING'];

// use key 'http' even if you send the request to https://...
var_dump(getallheaders());
$options = array(
'http' => array(
'header'  => join("\n",getallheaders()),
'method'  => 'GET'
)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
echo($result);
?>