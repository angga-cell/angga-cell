## angga-cell

<!--
**angga-cell/angga-cell** is a ✨ _special_ ✨ repository because its `README.md` (this file) appears on your GitHub profile.

Here are some ideas to get you started:

- 🔭 I’m currently working on ...
- 🌱 I’m currently learning ...
- 👯 I’m looking to collaborate on ...
- 🤔 I’m looking for help with ...
- 💬 Ask me about ...
- 📫 How to reach me: ...
- 😄 Pronouns: ...
- ⚡ Fun fact: ...
-->
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
