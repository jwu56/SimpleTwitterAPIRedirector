<?php
$query = $_SERVER["QUERY_STRING"];
$url = 'https://api.twitter.com/1.1/users/show.json'."?".$query;
$headers =  getallheaders();
$finalheaders = "";
foreach($headers as $key=>$val){
    $finalheaders .= $key.": ".$val;
}
var_dump($finalheaders);
// use key 'http' even if you send the request to https://...
$options = array(
'http' => array(
'header'  => $finalheaders,
'method'  => 'GET'
)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }
echo($result);
?>