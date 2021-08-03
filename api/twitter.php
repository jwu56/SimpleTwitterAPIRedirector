<?php
$query = $_SERVER["QUERY_STRING"];
// make request
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: '. $_SERVER['HTTP_AUTHORIZATION']
));
curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/1.1/users/show.json'."?".$query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
echo($output);

// handle error; error output
if(curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {

    var_dump($output);
}

curl_close($ch);
?>