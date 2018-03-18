<?php
require('config.php');

function tqq($url, $id, $msg_prefix, $msg) {

  $curl = curl_init();

  curl_setopt_array($curl, array(
//    CURLOPT_PORT => "5700",
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    #CURLOPT_POSTFIELDS => "{\"group_id\": 701311009, \"message\": \"Github have new Message!!!\"}",
    CURLOPT_POSTFIELDS => '{"group_id": ' . $id . ', "message": " ' . $msg_prefix . $msg . '"}',
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache",
      "content-type: application/json",
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
}

#echo $target_url;
#var_dump(json_decode(file_get_contents("php://input")));
$p_json = json_decode(file_get_contents("php://input"), true);
#var_dump($p_json["sender"]["login"]);
tqq($target_url, $qq_gid, $msg_prefix, $p_json["sender"]["login"]);
#        echo "\n";
#var_dump(json_decode(file_get_contents("php://input"), true));

?>
