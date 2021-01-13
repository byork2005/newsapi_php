<?php
// accepts Request from JS ajax call.

// Simple input validation class
include "../models/validate.class.php";
$validate = new validate();
$do_what = $validate -> validate_input($_REQUEST['do_what']);
$search_val = $validate -> validate_input($_REQUEST['search_val']);

// Search Class
include "../models/search.class.php";

$search = new search();

// Triggering the basic search class. Could be expanded for more features if the app requires it.
if($do_what = 'search') {
  $search -> news_search($search_val);
  $results = $search -> data;
  echo $results;
}

?>

