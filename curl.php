<?php

$data = array();
$data['data']['notification']['title'] = "FCM Message";
$data['data']['notification']['body'] = "This is an FCM Message";
$data['data']['notification']['icon'] = "/mstile-150x150.png";
$data['data']['webpush']['headers']['Urgency'] = "high";
$data['to'] = "BEp1fvrc3dITXcy1t5C0na44X-lPMe4YOTMXOuByi9v9mdiuOgHwReLnlYJzvmUJDehnD-MMbDZpGHsB0eOaV1g";
// print_r(json_encode($data));
$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Authorization: key =AAAA1QumVF8:APA91bG8tZExQA2YWaGfLHwrjFYzKuQaBvrmeGjyjxaq2Ryh-lEfH_ATydGk9tZFAc6PAxcI33JuJraR5FnRGNyBZIe5fK9gMt1juRftGOiqYgJB6zAfM-SPlTTkZStsrYcn72EdN7LC";
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_URL , "https://fcm.googleapis.com/fcm/send");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($data));
// curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER , false);

$result = curl_exec($ch);
if (curl_errno($ch))
echo 'Error:' . curl_error($ch);

curl_close($ch);

echo "<pre>Result : ";
print_r(json_decode($result,1));
echo '<br>sent through</pre>';

?>