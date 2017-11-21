<?php

class CRM_Erroweu_Exception extends CRM_Extension_Exception {
  public function __construct($message, $error_code = 0, array $errorData = [], $previous = NULL) {
    parent::__construct($message, $error_code, $errorData, $previous);
  }

}
