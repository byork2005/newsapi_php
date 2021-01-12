<?php

class validate {

  public $value;

  public function validate_input($value, $type = "") {
    $this -> value = htmlspecialchars(stripslashes(trim($value)));
    return $this -> value;
  }







}

?>