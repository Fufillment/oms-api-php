<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 11:19 AM
 */

namespace Fulfillment\OMS\Models;

use Fulfillment\OMS\Exceptions\ValidationFailureException;
use Respect\Validation\Exceptions\ExceptionInterface;

trait ValidatableBase
{
    protected abstract function getValidationRules();

    public function validate()
    {
        $errors     = [];
        $rulesToRun = $this->getValidationRules();
        foreach ($rulesToRun as $validator) {
            try {
                $validator->check($this);
            } catch (ExceptionInterface $e) {
                $varName          = current($validator->getRules())->getName();
                $errors[$varName] = $e->getMainMessage();
            }
        }
        if (!empty($errors)) {
            throw new ValidationFailureException("Validation failed for this object.", $errors);
        }
    }
}