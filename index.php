<?php 

require_once 'router.php'; 

route('/newsapi_php', function() {
  require 'views/main.php';
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);





?>


