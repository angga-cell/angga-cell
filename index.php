<?php

header('Content-Type: application/json');
$sender isset($_GET['sender']) ? $_GET['sender']: 'Unknown';

$response = [
  'status' => true,
  'data' => "Response from server: $sender"
  ]
  echo json_encode($response)
  
  
  //http://192.168.0.1/apk/index.php
?>