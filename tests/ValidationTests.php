<?php

namespace Fulfillment\OMS\Tests;

use Fulfillment\OMS\Exceptions\ValidationFailureException;
use Fulfillment\OMS\Models\Request\Order;
use Fulfillment\OMS\Models\Request\Recipient;

/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/13/15
 * Time: 12:00 PM
 */
class ValidationTests extends \PHPUnit_Framework_TestCase
{
    public function testOrderFailure()
    {
        $this->setExpectedException('Fulfillment\OMS\Exceptions\ValidationFailureException');
        $order = new Order();
        try {
            $order->validate();
        } catch (ValidationFailureException $e) {
            $this->assertCount(5, $e->validationErrors);
            throw $e;
        }
    }

    public function testOrderSuccess()
    {
        $data  = DataUtility::requestOrder();
        $order = new Order($data);
        $order->validate();
    }

    public function testRecipientFailure()
    {
        $this->setExpectedException('Fulfillment\OMS\Exceptions\ValidationFailureException');
        $recipient = new Recipient();

        try {
            $recipient->validate();
        } catch (ValidationFailureException $e) {
            $this->assertCount(8, $e->validationErrors);
            throw $e;
        }
    }

    public function testRecipientSuccess(){
        $data = DataUtility::requestRecipient();
        $recipient = new Recipient($data);
        $recipient->validate();
    }
}