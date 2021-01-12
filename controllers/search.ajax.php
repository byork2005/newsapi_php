<?php

include "../models/validate.class.php";
$validate = new validate();
$do_what = $validate -> validate_input($_REQUEST['do_what']);
$search_val = $validate -> validate_input($_REQUEST['search_val']);

include "../models/search.class.php";

$search = new search();

if($do_what = 'search') {
  $search -> news_search($search_val);
  $results = $search -> data;
  echo $results;
}

?>

