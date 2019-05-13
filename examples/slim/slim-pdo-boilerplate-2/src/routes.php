<?php

return function ($app) {
    $container = $app->getContainer();

    // Basic GET route
    $app->get('/user/{id}', function ($request, $response, $args) {
      $userID = $args['id'];
        $user = new User($this->db);
        return $response->withJson($user->getUserByID($userID));
    });
  
    // Add a basic template route
    $app->get('/[{name}]', function ($request, $response, $args) {
      // Render index view
      return $this->renderer->render($response, 'index.phtml', $args);
    });
};
