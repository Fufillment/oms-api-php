<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 4/21/15
 * Time: 1:25 PM
 */

namespace Fulfillment\OMS\Exceptions;



class ValidationFailureException extends \Exception {

    public $validationErrors;
    public $context;

   public function __construct($message = null, $errors = array(), \Exception $previous = null) {


       $this->validationErrors = $errors;
           $message = 'The requested action failed validation. Failed tests: '. PHP_EOL;
           foreach($this->validationErrors as $key => $error){
               $message.= '['.$key.'] '. $error . PHP_EOL;
           }

       parent::__construct($message, $previous);
   }

}