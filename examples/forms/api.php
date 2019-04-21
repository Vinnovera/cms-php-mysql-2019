<?php
  // Kolla om användaren försöker logga in
  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'jonas' && $_POST['password'] == 'pass') {
      echo json_encode([ 'username' => 'jonas' ]);
    } else {
      http_response_code(403);
    }
  }

  if (isset($_GET['messages'])) {
    $messages = [
      'Remember to feed the cat!',
      'I am a prince but have nowhere to place my millions of dollars',
      'Disney is interested in buying your company'
    ];
    echo json_encode(['messages' => $messages]);
  }

?>
