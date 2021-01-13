<?php
// Validate class can be expanded as needed to protech from malicious or inaccurate submissions.

class validate {

  public $value;

  public function validate_input($value, $type = "") {
    $this -> value = htmlspecialchars(stripslashes(trim($value)));
    return $this -> value;
  }

}

?>